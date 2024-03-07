<?php

namespace App\Livewire;

use App\Http\Helper;
use App\Mail\OrderMail;
use App\Mail\OrderMailToAdmin;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Divission;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\UserAddress;
use App\Notifications\StatusNotification;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;
use Notification;
use Illuminate\Support\Str;

#[Title('Checkout')]

class Checkout extends Component
{
    #[Rule("required", message: "Please, write your first name")]
    #[Rule("string", message: "Please, enter a valid name")]
    public $name;

    #[Rule("required", message: "Please, write your last name")]
    #[Rule("string", message: "Please, enter a valid name")]
    public $l_name;

    #[Rule("required", message: "Please, write your address")]
    #[Rule("string", message: "Please, enter a valid address")]
    public $address;

    #[Rule("required", message: "Please, enter your phone number")]
    #[Rule("numeric", message: "Please, enter a valid phone number")]
    public $phone;

    #[Rule("required", message: "Please, enter an email")]
    #[Rule("email", message: "Please,Enter a valid email")]
    public $email;

    #[Rule("required", message: "Please, write your city")]
    #[Rule("string", message: "Please, enter a valid city")]
    public $city;

    #[Rule("required", message: "Please, enter a zone")]
    #[Rule("exists:divissions,id", message: "Please, Select a valid zone")]
    public $divission_id;

    #[Rule("nullable")]
    #[Rule("string", message: "Please, enter a valid comment")]
    public $comment;

    public $payment_method = 'cod';
    public $shipping_id = 1;

    public $err_msg;
    public $payment_possess;

    public function orderSubmit()
    {
        $this->validate();

        if (auth()->user()) {
            $carts = Cart::with('product')->where('user_id', auth()->user()->id)->where('order_id', null)->get();
            $user = auth()->user();
        } else {
            $carts = Cart::with('product')->where('ip', request()->ip())->where('order_id', null)->get();
            $user = User::firstOrcreate([
                'email' => $this->email,
            ]);

            $address =  UserAddress::where('user_id',$user->id)->where('is_default',true)->first();
            if(!$address){
                UserAddress::create([
                    'address' => $this->address,
                    'city' => $this->city,
                    'divission_id' => $this->divission_id,
                    'user_id' => $user->id,
                    'is_default' => true,
                ]);
            }
            Auth::login($user);
            foreach ($carts as $ct) {
                $ct->update(['user_id', $user->id]);
            }
        }

        //update user
        $user->name = $this->name;
        $user->l_name = $this->l_name;
        $user->phone = $this->phone;
        $user->address = $this->address;
        $user->city = $this->city;
        $user->divission_id = $this->divission_id;
        $user->save();

        //cart check
        if (count($carts) < 1) {
            request()->session()->flash('error', 'Cart is Empty !');
            $this->err_msg = 'Your cart is empty';
            return back();
        }

        $order = new Order();
        $order_data = $this->all();
        $order_data['order_number'] = 'ORD-' . strtoupper(Str::random(10));
        $order_data['user_id'] = $user->id;

        if ($c_id = Session::get('coupon_id')) {
            $coupon = Coupon::find($c_id);
            $order_data['sub_total'] = Helper::cartTotal($carts) - $coupon->discount(Helper::cartSubTotal($carts));
        } else {
            $order_data['sub_total'] = Helper::cartTotal($carts);
        }

        $shipngs = Shipping::find($this->shipping_id);
        $installment1 = $order_data['sub_total'] + $shipngs->price;
        $order_data['amount'] = $installment1;
        $order_data['payable'] = $installment1;
        $order_data['installment_count'] = 1;
        $order_data['inventory_cost'] = Helper::TotalInventoryCostFromCart($carts);
        $order_data['quantity'] = $carts->sum('quantity');
        $order_data['status'] = "Pending";
        $order_data['payment_status'] = 'Unpaid';
        $order->fill($order_data);
        $status = $order->save();
        if ($order)
            $users = User::role('Admin')->get();
        $details = [
            'title' => 'New order created',
            'actionURL' => route('order.show', $order->id),
            'fas' => 'fa-file-alt'
        ];
        Notification::send($users, new StatusNotification($details));

        //Mail content
        $mail_content = [
            'order' => $order,
            'sub' => "A new order has been created",
            'view' => 'mail.order-mail-to-admin',
        ];
        // send mail to admin
        foreach($users as $us){
            Mail::to($us->email)->send(new OrderMailToAdmin($mail_content));
        }

        // send mail to user
        $mail_content['view'] = 'mail.order-mail-to-user';
        Mail::to($user->email)->send(new OrderMail($mail_content));

        foreach ($carts as $cart) {
            $cart->update([
                'order_id' => $order->id,
                'price' => $cart->product->final_price,
                'amount' => $cart->product->final_price * $cart->quantity,
                'inventory_cost' => $cart->product->inventory_cost,
            ]);
        }
        request()->session()->flash('success', 'Your Order successfully placed in order');
        return $this->redirect(route('order.receive', [$order->order_number]));
    }

    public function render()
    {
        if ($coupon_id = Session::get('coupon_id')) {
            $n['coupon'] = Coupon::find($coupon_id);
        } else {
            $n['coupon'] = new Coupon();
        }
        if ($user = Auth()->user()) {
            $n['carts'] = Cart::with(['product'])->where('user_id', $user->id)->where('order_id', null)->latest()->get();
            $address = UserAddress::where('user_id',$user->id)->where('is_default',true)->first();
            $this->name = $user->name;
            $this->l_name = $user->l_name;
            $this->email = $user->email;
            $this->phone = $user->phone;
            $this->address = $address?->address;
            $this->city = $address?->city;
            $this->divission_id = $user?->divission_id;
        } else {
            $n['carts'] = Cart::with(['product'])->where('ip', request()->ip())->where('order_id', null)->latest()->get();
        }

        $n['divissions'] = Divission::get();
        $n['shippings'] = Shipping::where('status', 'active')->get();
        return view('livewire.checkout', $n);
    }
}
