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
        if($user = auth()->user()){
            $this->carts = Cart::with('product')->where('user_id',$user->id)->get();
        }else{
            $this->carts = Cart::with('product')->where('ip',request()->ip())->get();
        }
        return view('livewire.view-cart');
    }
}
