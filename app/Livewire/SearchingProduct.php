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
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Products of Certain Category')]

class SearchingProduct extends Component
{
    public $stext;
    public $cat;
    public $subcat;
    public $prds=null;

    public function mount()
    {
        // dd($this->stext,$this->cat);
    }

    public function render()
    {
        if (($id = $this->cat) && ($s = $this->stext)) {
            $cat = Category::where('slug', $id)->first();
            $slug_wise_product = Product::serachByTitleOrNothing($s)
                                ->where('cat_id', $cat->id)
                                ->paginate(20);
        } elseif (($id = $this->cat)) {
            $cat = Category::where('slug', $id)->first();
            $slug_wise_product = Product::serachByTitleOrNothing()
                                ->where('cat_id', $cat->id)
                                ->paginate(20);
        } elseif (($s = $this->stext)) {
            $slug_wise_product = Product::serachByTitleOrNothing($s)
                                ->where('is_showable_to_user',1)
                                ->paginate(20);
        } else {
            $slug_wise_product = Product::serachByTitleOrNothing()
                                ->where('is_showable_to_user',1)
                                ->paginate(20);
        }
        $n['products'] = $slug_wise_product;
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
        // return view('livewire.searching-product');
    }
}
