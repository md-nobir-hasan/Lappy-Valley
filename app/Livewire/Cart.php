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


    public function delete($id){
        $cart = ModelsCart::find($id);
        $cart->delete();
        $this->msg = "$id this product is deleted";
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
