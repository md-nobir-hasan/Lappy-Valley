<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Rule;
use Livewire\Component;

use function Termwind\render;

class Header extends Component
{
    public $cart_count = 0;
    public $products=[];
    public $cats;
    public $cat;

    #[Rule("required", message: "Please,Enter a email")]
    public $search;

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->cart_count = Cart::where('user_id', $user->id)->where('order_id', null)->get()->count();
        }else{
            $this->cart_count = Cart::where('ip', request()->ip())->where('order_id', null)->get()->count();
        }
        // $this->products = DB::table('products')->select('id','photo','title', 'slug','price', 'discount')->get();
        $this->cats = DB::table('categories')->select('title','id')->orderBy('serial','asc')->get();
    }

    public function searchTo(){
        $this->redirect(route('searching_product',[$this->search, $this->cat]),navigate:true);
    }
    public function prdouctFetch(){
        if(($id = $this->cat) && ($s= $this->search)){
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price','final_price', 'discount')
                                ->where('cat_id',$id)
                                ->where('title', 'like', '%' . $this->search . '%')
                                ->get();
        }
        elseif(($id = $this->cat)){
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price','final_price', 'discount')
                                ->where('cat_id',$id)
                                ->get();
        }
        elseif(($s= $this->search)){
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price','final_price', 'discount')
                                ->where('title', 'like', '%' . $this->search . '%')
                                ->get();
        }
        else{
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price','final_price', 'discount')
                                ->get();
        }
    }

    public function searchFuc(){
        if (($id = $this->cat) && ($s = $this->search)) {
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price','final_price', 'discount')
                ->where('cat_id', $id)
                ->where('title', 'like', '%' . $this->search . '%')
                ->get();
        } elseif (($id = $this->cat)) {
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price','final_price', 'discount')
                ->where('cat_id', $id)
                ->get();
        } elseif (($s = $this->search)) {
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price','final_price', 'discount')
                ->where('title', 'like', '%' . $this->search . '%')
                ->get();
        } else {
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price','final_price', 'discount')
                ->get();
        }
    }


    public function render()
    {
        $n['menus'] = Category::with('child_cat')->where('status', 'active')->where('is_parent', 1)->orderBy('serial', 'ASC')->get();
        return view('livewire.header',$n);
    }
}
