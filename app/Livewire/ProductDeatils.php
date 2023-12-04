<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductReview;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Product Details')]

class ProductDeatils extends Component
{
    public $slug;
    public $product;

    public function mount(){
        $this->product = Product::with('cat_info', 'sub_cat_info', 'brand', 'ProcessorGeneration', 'ProcessorModel', 'DisplayType', 'DisplaySize', 'Ram', 'ssd', 'hdd', 'Graphic', 'SpecialFeature')
                            ->where('slug',$this->slug)->first();
    }
    public function render()
    {

        $n['product_reviews'] = ProductReview::where('status', 'active')->get();
        return view('livewire.product-deatils',$n);
    }
}
