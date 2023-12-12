<?php

namespace App\Livewire;

// use Livewire\WithPagination;

use App\Models\Brand;
use App\Models\DisplaySize;
use App\Models\DisplayType;
use App\Models\Graphic;
use App\Models\hdd;
use App\Models\OtherSetting;
use App\Models\ProcessorGeneration;
use App\Models\ProcessorModel;
use App\Models\Product;
use App\Models\Ram;
use App\Models\SpecialFeature;
use App\Models\ssd;
use Carbon\Carbon;
use Livewire\Component;

use Livewire\Attributes\Title;

#[Title('Shop')]
class NewProduct extends Component
{
    public $prds;
    public $product_type;
    public $shop_title = 'New Product';
    // public function mount()
    // {
    //     $this->prds = Product::where('status', 'active')->get();
    // }
    public function render()
    {
      $os =  OtherSetting::first();
        if($this->product_type == 'new_product'){
            $n['products'] = Product::where('status', 'active')->whereBetween('created_at', [Carbon::now()->subDays($os->new_product), Carbon::now()])->paginate(20);
        }else{
            $n['products'] = Product::where('status', 'active')->paginate(20);
        }
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

        return view('livewire.shop', $n);
    }
}
