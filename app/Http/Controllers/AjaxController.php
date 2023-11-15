<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
   public function cartStore(Request $request){
        return response($request->all());
   }
   public function addToCart(Request $request){
        $id = $request->pid;
        $product = Product::find($id);
        if($product){
            $user_id = Auth::user()->id;
            try{
                $cart =  Cart::create(['product_id' => $id, 'user_id' => $user_id,'price'=>$product->price, 'quantity'=>1, 'amount'=> $product->price]);
                $cart_fetch = Cart::with('product')->find($cart->id);
            }catch(\Exception $e){
                return 2;
            }
            return response()->json($cart_fetch);
        }else{
            return 3;
        }
   }

}
