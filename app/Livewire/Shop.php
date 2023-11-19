<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

use Livewire\Attributes\Title;
#[Title('Shop')]
class Shop extends Component
{
    public $products;
    public function mount(){
        $this->products = Product::get();
    }
    public function render()
    {
        return view('livewire.shop');
    }
}
