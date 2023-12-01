<?php

namespace App\Livewire;

// use Livewire\WithPagination;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;

use Livewire\Attributes\Title;
#[Title('Shop')]
class Shop extends Component
{

    public function render()
    {
        $n['products'] = Product::where('status', 'active')->paginate(20);
        $n['brands'] = Brand::get();

        return view('livewire.shop',$n);
    }
}
