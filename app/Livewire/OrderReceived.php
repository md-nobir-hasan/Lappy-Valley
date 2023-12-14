<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Wishlist')]

class OrderReceived extends Component
{
    public $id;
    public function render()
    {
        $n['order'] = Order::find($this->id);
        return view('livewire.order-received',$n);
    }
}
