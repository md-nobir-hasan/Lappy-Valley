<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductReview;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Product Details')]

class ProductDeatils extends Component
{
    public $slug;
    public $product;

    // #[Rule("required", message: "Please, enter a name")]
    // #[Rule("string", message: "Please, enter a valid name")]
    // public $f_name;

    // #[Rule("required", message: "Please, enter a name")]
    // #[Rule("string", message: "Please, enter a valid name")]
    // public $l_name;

    // #[Rule("required", message: "Please, write a message")]
    // #[Rule("string", message: "Please, write a valid message")]
    // public $msg;

    // #[Rule("required", message: "Please, upload a image")]
    // public $img;

    // #[Rule("required", message: "Please, give review")]
    // public $review_star;
    
    // public function review(){
    //     $this->validate();
    //     // dd($this);
    // }
    public function mount(){
        $this->product = Product::with('cat_info', 'sub_cat_info', 'brand', 'ProcessorGeneration', 'ProcessorModel', 'DisplayType', 'DisplaySize', 'Ram', 'ssd', 'hdd', 'Graphic', 'SpecialFeature')
                            ->where('slug',$this->slug)->first();
    }
    public function render()
    {

        $n['product_reviews'] = ProductReview::with('images')->where('status', 'active')->get();
        $n['related_products'] = Product::where('status', 'active')->where('cat_id', $this->product->cat_id)->get();
        return view('livewire.product-deatils',$n);
    }
}
