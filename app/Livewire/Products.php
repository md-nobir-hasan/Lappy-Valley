<?php

namespace App\Livewire;

use Livewire\Component;

class Products extends Component
{
    public $product;
    public function render()
    {
       
        return view('livewire.products');
    }
}
