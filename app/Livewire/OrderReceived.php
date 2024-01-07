<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Order Received')]

class OrderReceived extends Component
{
    public $order_number;
    public function render()
    {
        $n['order'] = Order::where('order_number',$this->order_number)->first();
        return view('livewire.order-received',$n);
    }
}
