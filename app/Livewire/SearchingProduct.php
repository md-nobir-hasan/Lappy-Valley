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
        if (($id = $this->cat) && ($s = $this->stext)) {
            $this->slug_wise_product = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')
            ->where('cat_id', $id)
                ->where('title', 'like', '%' . $this->stext . '%')
                ->get();
        } elseif (($id = $this->cat)) {
            $this->slug_wise_product = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')
            ->where('cat_id', $id)
                ->get();
        } elseif (($s = $this->stext)) {
            $this->slug_wise_product = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')
            ->where('title', 'like', '%' . $this->stext . '%')
                ->get();
        } else {
            $this->slug_wise_product = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')
            ->get();
        }
    }

    public function render()
    {
        return view('livewire.cat-wise-shop');
        // return view('livewire.searching-product');
    }
}
