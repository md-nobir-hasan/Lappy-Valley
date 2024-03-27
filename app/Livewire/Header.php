<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Str;

class Header extends Component
{
    public $cart_count = 0;
    public $products = [];
    public $cats;
    public $cat;

    // #[Rule("required", message: "Please,Enter any search text")]
    public $search;

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->cart_count = Cart::where('user_id', $user->id)->where('order_id', null)->get()->count();
        } else {
            $this->cart_count = Cart::where('ip', request()->ip())->where('order_id', null)->get()->count();
        }

        $this->cats = DB::table('categories')->select('title', 'id', 'slug')->where('is_parent', 1)->orderBy('serial', 'asc')->get();
    }

    public function searchTo()
    {
// dd('search to');
        if (($slug = $this->cat) && !($s = $this->search)) {
            $this->redirect(route('cat.search.product', [$this->cat]), navigate: true);
            // dd($this->cat,$this->search);
        }else {
            $this->redirect(route('searching_product', [$this->search, $this->cat]), navigate: true);
        }
        return false;
    }
    // public function prdouctFetch()
    // {
    //     dd($this->cat);
    //     if (($id = $this->cat) && ($s = $this->search)) {
    //         $cat = Category::where('slug', $this->cat)->first();
    //         $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'final_price', 'discount')
    //             ->where('cat_id', $cat->id)
    //             ->where('title', 'like', '%' . $this->search . '%')
    //             ->get();
    //     } elseif (($id = $this->cat)) {
    //         $cat = Category::where('slug', $this->cat)->first();
    //         $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'final_price', 'discount')
    //             ->where('cat_id', $cat->id)
    //             ->get();
    //     } elseif (($s = $this->search)) {
    //         $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'final_price', 'discount')
    //             ->where('title', 'like', '%' . $this->search . '%')
    //             ->get();
    //     } else {
    //         $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'final_price', 'discount')
    //             ->get();
    //     }
    // }
    public function searchFuc()
    {
        // dd('search func');
        if (($slug = $this->cat) && ($s = $this->search)) {
            $cat = Category::where('slug', $slug)->first();
            $this->products = Product::serachByTitleOrNothing($s)->where('cat_id', $cat->id)->get();
        } elseif (($slug = $this->cat)) {
            $cat = Category::where('slug', $slug)->first();
            $this->products = Product::serachByTitleOrNothing()->where('cat_id', $cat->id)->get();
        } elseif (($s = $this->search)) {
            $this->products = Product::serachByTitleOrNothing($s)->where('is_showable_to_user',1)->get();
        } else {
            $this->products = Product::serachByTitleOrNothing()->where('is_showable_to_user',1)->get();
        }
    }

    public function render()
    {
        $n['menus'] = Category::with(['child_cat', 'products', 'child_cat.sub_products'])->where('status', 'active')->where('is_parent', 1)->orderBy('serial', 'ASC')->get();
        return view('livewire.header', $n);
    }
}
