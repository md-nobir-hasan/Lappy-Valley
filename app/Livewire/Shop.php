<?php

namespace App\Livewire;

// use Livewire\WithPagination;
use App\Models\Product;
use Livewire\Component;

use Livewire\Attributes\Title;
#[Title('Shop')]
class Shop extends Component
{
    // public $products;
    // public function mount(){
    //     $this->products = Product::where('status','active')->paginate(20);
    // }
    public $minPrice= 0;
    public $maxPrice= 500000;

    public function ProductFetch(){
    //    dd($this->minPrice);
    }
    public function render()
    {
        return view('livewire.shop',['products'=> Product::where('status', 'active')->paginate(20)]);
    }
}
