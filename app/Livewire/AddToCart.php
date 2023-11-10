<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{
    public $button;
    public $id;
    public $msg;
    public $err_msg;
    public function addToCart($id){
        $product = Product::find($id);
        if($product){
            $user_id = Auth::user()->id;
            Cart::create(['product_id' => $id, 'user_id' => $user_id]);
            $this->err_msg = "";
            $this->msg = "Added to your cart successfully";
        }else{
            $this->msg = '';
            // $this->err_msg = "<script>toastr.success('Can't added')</script>";
            $this->err_msg = "Can't add";
            return 2;
        }


    }
    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
