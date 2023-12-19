<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Divission;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Shipping;
use App\Notifications\StatusNotification;
use App\User;
use Illuminate\Support\Facades\Auth;
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
    #[Rule("unique:users,email", message: "You have an account. Please, login.")]
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
        // dd($this->all());
        //Cart fetch
        if (auth()->user()) {
            $carts = Cart::with('product')->where('user_id', auth()->user()->id)->where('order_id', null)->get();
            $user = auth()->user();
        } else {
            $carts = Cart::with('product')->where('ip', request()->ip())->where('order_id', null)->get();
            $user = User::create([
                'email' => $this->email,
                'name' => $this->name,
                'l_name' => $this->l_name,
            ]);
            Auth::login($user);
            foreach ($carts as $ct) {
                $ct->update(['user_id', $user->id]);
            }
        }

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
        $order_data['order_status_id'] = OrderStatus::first()->id;


        // $order_data['shipping_id'] = $request->shipping;
        // $shipping = Shipping::where('id', $order_data['shipping_id'])->pluck('price');
        $order_data['sub_total'] = $carts->sum('price');
        $order_data['amount'] = $carts->sum('amount');
        $order_data['quantity'] = $carts->sum('quantity');


        // if (session('coupon')) {
        //     $order_data['coupon'] = session('coupon')['value'];
        // }
        // if ($request->shipping) {
        //     if (session('coupon')) {
        //         $order_data['total_amount'] = Helper::totalCartPrice() + $shipping[0] - session('coupon')['value'];
        //     } else {
        //         $order_data['total_amount'] = Helper::totalCartPrice() + $shipping[0];
        //     }
        // } else {
        //     if (session('coupon')) {
        //         $order_data['total_amount'] = Helper::totalCartPrice() - session('coupon')['value'];
        //     } else {
        //         $order_data['total_amount'] = Helper::totalCartPrice();
        //     }
        // }
        // return $order_data['total_amount'];
        $order_data['status'] = "Pending";
        $order_data['payment_status'] = 'Unpaid';
        // if (request('payment_method') == 'online') {
        //     $order_data['payment_method'] = 'online';
        //     $order_data['payment_status'] = 'Unpaid';
        // } else {
        //     $order_data['payment_method'] = 'cod';
        //     $order_data['payment_status'] = 'Unpaid';
        // }
        $order->fill($order_data);
        $status = $order->save();
        if ($order)
            // dd($order->id);
            $users = User::find(1);
        $details = [
            'title' => 'New order created',
            'actionURL' => route('order.show', $order->id),
            'fas' => 'fa-file-alt'
        ];
        Notification::send($users, new StatusNotification($details));
        // if (request('payment_method') == 'paypal') {
        //     return redirect()->route('payment')->with(['id' => $order->id]);
        // } else {
        //     session()->forget('cart');
        //     session()->forget('coupon');
        // }
        foreach ($carts as $cart) {
            $product = $cart->product;
            // return $product;
            $product->stock -= $cart->quantity;
            $product->save();
            $cart->update(['order_id' => $order->id]);
        }

        // dd($users);
        request()->session()->flash('success', 'Your Order successfully placed in order');
        // return $this->redirect(HomePage::class, navigate: true);
        return $this->redirect(route('order.receive', [$order->id]));
    }

    public function render()
    {


        if ($user = Auth()->user()) {
            $n['carts'] = Cart::with(['product'])->where('user_id', $user->id)->where('order_id', null)->latest()->get();
            $this->name = $user->name;
            $this->l_name = $user->l_name;
            $this->email = $user->email;
            $this->phone = $user->phone;
        } else {
            $n['carts'] = Cart::with(['product'])->where('ip', request()->ip())->where('order_id', null)->latest()->get();
        }
        $n['divissions'] = Divission::get();
        $n['shippings'] = Shipping::where('status', 'active')->get();
        return view('livewire.checkout', $n);
    }
}
