<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Pay with SSL')]

class RedirectToPay extends Component
{
    public $order_number;
    public function render()
    {
        $n['order'] = Order::where('order_number',$this->order_number)->first();
        return view('livewire.redirect-to-pay',$n);
    }
}
