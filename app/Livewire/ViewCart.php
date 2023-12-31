<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('View Cart')]

class ViewCart extends Component
{

    public function toCheckout(){
        Session::put('discount',$this->discount);
        return $this->redirect(route('checkout'),navigate:true);
    }

    public function discountCal($discode){
       $coupon= Coupon::where('code',$discode)->first();
        // dd($coupon,$discode);
    return response()->json($coupon);
    }

    public function render()
    {
        if($user = auth()->user()){
            $n['carts'] = Cart::with('product')->where('user_id',$user->id)->where('order_id', null)->latest()->get();
        }else{
            $n['carts'] = Cart::with('product')->where('ip',request()->ip())->where('order_id', null)->latest()->get();
        }
        return view('livewire.view-cart',$n);
    }
}
