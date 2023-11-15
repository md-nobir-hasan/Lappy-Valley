<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('View Cart')]

class ViewCart extends Component
{
    public $carts;

    public function render()
    {
        $this->carts = Cart::with('product')->where('user_id',auth()->user()->id)->get();
        return view('livewire.view-cart');
    }
}
