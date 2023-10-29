<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{
    public $button;
    public $id;
    public function addToCart($id){
        $user_id = Auth::user()->id;
        Cart::create(['product_id' => $id, 'user_id' => $user_id]);

    }
    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
