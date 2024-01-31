<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Order Confirm')]

class OrderConfirm extends Component
{
    public function render()
    {
        $n['orders'] = Order::with(['cart_info', 'cart_info.product'])
                    ->where('user_id',auth()->user()->id)
                    ->orderBy('id','desc')
                    ->get();
        return view('livewire.order-confirm',$n);
    }
}
