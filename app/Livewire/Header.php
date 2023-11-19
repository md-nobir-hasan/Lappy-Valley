<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Header extends Component
{
    public $cart_count = 0;
    public $products;
    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->cart_count = Cart::where('user_id', $user->id)->get()->count();
        }else{
            $this->cart_count = Cart::where('ip', request()->ip())->get()->count();
        }
        $this->products = DB::table('products')->select('id','photo','title', 'slug')->get();
    }
    public function render()
    {
        return view('livewire.header');
    }
}
