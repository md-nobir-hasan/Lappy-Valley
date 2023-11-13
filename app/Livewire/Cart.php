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
        }
    }

    public function addQty($id){
        $cart = ModelsCart::with('product')->find($id);
        $qty = $cart->quantity + 1;
        $price = $cart->product->price * $qty;
        $cart->update([
            'quantity' => $qty,
            'amount' => $price,
        ]);
        $this->msg = 'quantity updated (increased)';
        return true;

    }
    public function removeQty($id){
        $cart = ModelsCart::with('product')->find($id);
        $qty = $cart->quantity - 1;
        $price = $cart->product->price * $qty;
        $cart->update([
            'quantity' => $qty,
            'amount' => $price,
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
