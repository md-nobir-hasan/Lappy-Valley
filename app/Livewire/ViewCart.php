<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('View Cart')]

class ViewCart extends Component
{

    public function render()
    {
        if($user = auth()->user()){
            $n['carts'] = Cart::with('product')->where('user_id',$user->id)->where('order_id', null)->get();
        }else{
            $n['carts'] = Cart::with('product')->where('ip',request()->ip())->where('order_id', null)->get();
        }
        return view('livewire.view-cart',$n);
    }
}
