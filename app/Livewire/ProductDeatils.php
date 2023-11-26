<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Product Details')]

class ProductDeatils extends Component
{
    public $slug;
    public $product;
    public $maxPrice;
    public $minPrice;

    public function mount(){
        $this->product = Product::where('slug',$this->slug)->first();
    }
    public function render()
    {
        return view('livewire.product-deatils');
    }
}
