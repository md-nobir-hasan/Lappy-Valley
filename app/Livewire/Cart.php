<?php

namespace App\Livewire;

use App\Models\Cart as ModelsCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public $carts;
    public function mount(){
        $user = Auth::user();
        if($user){
            $this->carts = ModelsCart::with(['product'])->where('user_id',$user->id)->get();
        }
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
