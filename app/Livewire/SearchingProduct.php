<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Products of Certain Category')]

class SearchingProduct extends Component
{
    public $cat;
    public $stext;
    public $slug_wise_product;

    public function mount()
    {
         if ($this->cat) {
            $this->slug_wise_product = DB::table('products')->where('cat_id', $this->cat)->where('title', 'like', '%' . $this->stext . '%')->select('id', 'photo', 'title', 'slug', 'price', 'discount')->get();
        } else {
            $this->slug_wise_product = DB::table('products')->where('title', 'like', '%' . $this->stext . '%')->select('id', 'photo', 'title', 'slug', 'price', 'discount')->get();
        }
    }

    public function render()
    {
        return view('livewire.cat-wise-shop');
        // return view('livewire.searching-product');
    }
}
