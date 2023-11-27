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

    public function mount()
    {
    }

    public function render()
    {
        if (($id = $this->cat) && ($s = $this->stext)) {
            $slug_wise_product = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')
                ->where('cat_id', $id)
                ->where('title', 'like', '%' . $this->stext . '%')
                ->paginate(2);
        } elseif (($id = $this->cat)) {
            $slug_wise_product = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')
                ->where('cat_id', $id)
                ->paginate(2);
        } elseif (($s = $this->stext)) {
            $slug_wise_product = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')
                ->where('title', 'like', '%' . $this->stext . '%')
                ->paginate(2);
        } else {
            $slug_wise_product = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')
                ->paginate(2);
        }
        return view('livewire.cat-wise-shop', ['slug_wise_product' => $slug_wise_product]);
        // return view('livewire.searching-product');
    }
}
