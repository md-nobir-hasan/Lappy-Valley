<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

use function Termwind\render;

class Header extends Component
{
    public $cart_count = 0;
    public $products=[];
    public $cats;
    public $cat;
    public $search;

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->cart_count = Cart::where('user_id', $user->id)->get()->count();
        }else{
            $this->cart_count = Cart::where('ip', request()->ip())->get()->count();
        }
        // $this->products = DB::table('products')->select('id','photo','title', 'slug','price', 'discount')->get();
        $this->cats = DB::table('categories')->select('title','id')->orderBy('serial','asc')->get();
    }

    public function searchTo(){
        $this->redirect(route('searching_product',[$this->search, $this->cat]),navigate:true);
    }
    public function prdouctFetch(){
        if($id = $this->cat){
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')->where('cat_id',$id)->get();
        }else{
            $this->products = DB::table('products')->select('id', 'photo', 'title', 'slug', 'price', 'discount')->get();
        }
    }

    public function searchFuc(){
        if($this->cat){
            $sp = DB::table('products')->where('cat_id',$this->cat)->where('title','like','%'.$this->search.'%')->select('id', 'photo', 'title', 'slug', 'price', 'discount')->get();
        }else{
            $sp = DB::table('products')->where('title','like','%'.$this->search.'%')->select('id', 'photo', 'title', 'slug', 'price', 'discount')->get();
        }
        $this->products = $sp;
    }


    public function render()
    {
        return view('livewire.header');
    }
}
