<?php

namespace App\Livewire;

use Livewire\Component;

class AddToCart extends Component
{
    public $button;
    public $id;
    public function addToCart($id){
    
    }
    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
