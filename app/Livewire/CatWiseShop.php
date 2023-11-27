<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Products of Certain Category')]

class CatWiseShop extends Component
{
    public $slug;
    // public $slug_wise_product;
    // public function mount(){
    //     $this->slug_wise_product = Product::where('cat_id',$cat->id)->where('status','active')->paginate(20);
    // }
    public function render()
    {
        $cat = Category::where('slug', $this->slug)->first();
        return view('livewire.cat-wise-shop',['slug_wise_product'=> Product::where('cat_id', $cat->id)->where('status', 'active')->paginate(2)]);
    }
}
