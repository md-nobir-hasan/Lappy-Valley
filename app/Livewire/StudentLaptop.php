<?php

namespace App\Livewire;

use App\Models\Brand;
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
#[Title('Shop')]

class StudentLaptop extends Component
{
    public $prds;
    public $cat;
    public $subcat;
    public function mount(){
        $this->prds = Product::where('status', 'active')->get();
    }
    public function render()
    {
        $n['products'] = Product::with(['ProcessorModel','ram','ssd','hdd','DisplaySize','DisplayType'])
                                ->where('status', 'active')
                                ->where('is_student', 1)
                                ->paginate(20);
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
        return view('livewire.shop',$n);
}
}
