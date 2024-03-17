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
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Products of Certain Category')]

class CatWiseShop extends Component
{
    public $cat;
    public $subcat;
    public $prds=null;
    // public $slug_wise_product;
    // public function mount(){
    //     $this->slug_wise_product = Product::where('cat_id',$cat->id)->where('status','active')->orderBy('id','desc')->paginate(20);
    // }
    public function render()
    {
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
        if($this->subcat){
            $subcat = Category::where('slug', $this->subcat)->first();
            $n['products'] = Product::with(['ProcessorModel','ram','ssd','hdd','DisplaySize','DisplayType'])
                                    ->where('child_cat_id', $subcat->id)->where('status', 'active')->orderBy('id','desc')->paginate(20);
        }else{
            $cat = Category::where('slug', $this->cat)->first();
            $n['products'] = Product::with(['ProcessorModel','ram','ssd','hdd','DisplaySize','DisplayType'])
                                    ->where('cat_id', $cat->id)->where('status', 'active')->orderBy('id','desc')->paginate(20);
        }

        return view('livewire.shop', $n);
    }
}
