<?php

namespace App\Livewire;

use App\Models\Cart as ModelsCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public $carts;
    public $msg ;
    public function mount(){
        $user = Auth::user();
        if($user){
            $this->carts = ModelsCart::with(['product'])->where('user_id',$user->id)->get();
        }else{
            $this->carts = ModelsCart::with(['product'])->where('ip',request()->ip())->get();
        }
    }

    public function addQty( $cart){

        // $cart = ModelsCart::with('product')->find($id);
        $qty = $cart['quantity'] + 1;
        $amount = $cart['price'] * $qty;
        // $already_cart->quantity = $already_cart->quantity + 1;
            // $already_cart->amount = $product->price + $already_cart->amount;
            // return $already_cart->quantity;
            // if ($already_cart->product->stock < $already_cart->quantity || $already_cart->product->stock <= 0) return back()->with('error', 'Stock not sufficient!.');
            // $already_cart->save();// $already_cart->quantity = $already_cart->quantity + 1;
            // $already_cart->amount = $product->price + $already_cart->amount;
            // return $already_cart->quantity;
            if($cart['product']['stock'] != null){
                if ($cart['product']['stock'] < $cart['quantity'] || $cart['product']['stock'] <= 0) return $this->msg = 'Not sufficient stock';
            }
        // $already_cart->save();
       $ucart= ModelsCart::find($cart['id'])->update([
            'quantity' => $qty,
            'amount' => $amount,
        ]);
        $this->msg = 'quantity updated (increased)';
        return $ucart;

    }
    public function removeQty($cart){
        // $cart = ModelsCart::with('product')->find($id);
        $qty = $cart['quantity'] - 1;
        $amount = $cart['price'] * $qty;

        ModelsCart::find($cart['id'])->update([
            'quantity' => $qty,
            'amount' => $amount,
        ]);
        $this->msg = 'quantity updated (decreased)';
        return true;

    }
    public function delete($id){
        $cart = ModelsCart::with('product')->find($id);
        $cart->delete();
        $this->msg = "$id this product is deleted";
        return true;
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
