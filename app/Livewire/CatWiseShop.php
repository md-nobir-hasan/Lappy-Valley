<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\DisplaySize;
use App\Models\DisplayType;
use App\Models\Graphic;
use App\Models\hdd;
use App\Models\ProcessorGeneration;
use App\Models\ProcessorModel;
use App\Models\Product;
use App\Models\Ram;
use App\Models\SpecialFeature;
use App\Models\ssd;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Products of Certain Category')]

class CatWiseShop extends Component
{
    public $slug;
    public $prds=null;
    // public $slug_wise_product;
    // public function mount(){
    //     $this->slug_wise_product = Product::where('cat_id',$cat->id)->where('status','active')->paginate(20);
    // }
    public function render()
    {
        $cat = Category::where('slug', $this->slug)->first();
        // $n['products'] = Product::where('status', 'active')->paginate(20);
        $n['brands'] = Brand::get();
        $n['p_models'] = ProcessorModel::get();
        $n['p_generations'] = ProcessorGeneration::get();
        $n['d_sizes'] = DisplaySize::get();
        $n['d_types'] = DisplayType::get();
        $n['rams'] = Ram::get();
        $n['ssds'] = ssd::get();
        $n['hdds'] = hdd::get();
        $n['graphics'] = Graphic::get();
        $n['s_features'] = SpecialFeature::get();
        $n['products'] = Product::where('cat_id', $cat->id)->where('status', 'active')->paginate(20);
        return view('livewire.shop', $n);
    }
}
