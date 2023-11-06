<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Order Confirm')]

class OrderConfirm extends Component
{
    public function render()
    {
        return view('livewire.order-confirm');
    }
}
