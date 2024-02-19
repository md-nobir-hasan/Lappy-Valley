<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{
    public $button;
    public $id;
    public $msg;
    public $err_msg;

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
