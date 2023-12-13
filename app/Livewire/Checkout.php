<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Divission;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Checkout')]

class Checkout extends Component
{
    public function render()
    {
        if($id = Auth()->user()){
            $n['carts'] = Cart::where('user_id',$id->id)->where('order_id',null)->get();
        }else{
            $n['carts'] = Cart::where('ip',request()->ip())->where('order_id',null)->get();
        }
        $n['divissions'] = Divission::get();
        return view('livewire.checkout',$n);
    }
}
