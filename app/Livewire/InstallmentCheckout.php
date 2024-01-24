<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Divission;
use App\Models\Order;
use App\Models\Product;
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

class InstallmentCheckout extends Component
{
    public $pslug;

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

    public $product;
    public $month;

    public function mount()
    {
        $product = Product::where('slug', $this->pslug)->first();
        $this->product = $product;
        $month = 0;
        if ($ins = $product->installment) {
            if ($ins->duration->year) {
                $month += $ins->duration->year * 12;
            }
            if ($ins->duration->month) {
                $month += $ins->duration->month;
            }
        }
        $this->month = $month;
    }

    public function orderSubmit()
    {
        $this->validate();

        if (auth()->user()) {
            $user = auth()->user();
        } else {
            $user = User::create([
                'email' => $this->email,
                'name' => $this->name,
                'l_name' => $this->l_name,
            ]);
            Auth::login($user);
        }

        $order = new Order();
        $order_data = $this->all();
        $order_data['order_number'] = 'ORD-' . strtoupper(Str::random(10));
        $order_data['user_id'] = $user->id;
        $order_data['status'] = 'New';
        $order_data['sub_total'] = $this->product->final_price;
        $order_data['amount'] = $this->product->price/$this->month;
        $order_data['payable'] = $this->product->price;
        $order_data['installment_count'] = $this->month;
        $order_data['inventory_cost'] = $this->product->inventory_cost;
        $order_data['quantity'] = 1;
        $order_data['status'] = "Pending";
        $order_data['payment_status'] = 'Unpaid';
        $order->fill($order_data);
        $status = $order->save();
        $users = User::role('Admin')->get();

        $details = [
            'title' => 'New order created',
            'actionURL' => route('order.show', $order->id),
            'fas' => 'fa-file-alt'
        ];

        Notification::send($users, new StatusNotification($details));

        $product = $this->product;
        $product->stock -= 1;
        $product->save();
        Cart::create([
            'product_id' => $product->id,
            'order_id' => $order->id,
            'user_id' => $user->id,
            'ip' => request()->ip(),
            'price' => $order->sub_total,
            'quantity' => 1,
            'amount' => $order->sub_total,
        ]);
        request()->session()->flash('success', 'Your Order successfully placed in order');
        return $this->redirect(route('order.receive', [$order->order_number]));
    }
    public function render()
    {
        $n['divissions'] = Divission::get();
        $n['shipping'] = Shipping::where('status', 'active')->first();
        return view('livewire.installment-checkout', $n);
    }
}
