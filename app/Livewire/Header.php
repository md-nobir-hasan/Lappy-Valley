<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public $cart_count = 0;
    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->cart_count = Cart::where('user_id', $user->id)->get()->count();
        }
    }
    public function render()
    {
        return view('livewire.header');
    }
}
