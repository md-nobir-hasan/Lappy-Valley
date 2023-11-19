<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function cartStore(Request $request)
    {
        return response($request->all());
    }
    public function addToCart(Request $request)
    {
        // if (empty($request->pid)) {
        $id = $request->pid;
        //     return response()->json(['msg' => "Invalid Product"]);
        // }
        $product = Product::find($id);
        // return $product;
        if (empty($product)) {
            return response()->json(['msg' => "Invalid Product"]);
        }
        if (auth()->user()) {
            $already_cart = Cart::where('user_id', auth()->user()->id)->where('order_id', null)->where('product_id', $product->id)->first();
        } else {
            $already_cart = Cart::where('ip', request()->ip())->where('order_id', null)->where('product_id', $product->id)->first();
        }
        // return $already_cart;
        if ($already_cart) {
            // dd($already_cart);
            // $already_cart->quantity = $already_cart->quantity + 1;
            // $already_cart->amount = $product->price + $already_cart->amount;
            // return $already_cart->quantity;
            // if ($already_cart->product->stock < $already_cart->quantity || $already_cart->product->stock <= 0) return back()->with('error', 'Stock not sufficient!.');
            // $already_cart->save();
            return response()->json(['msg' => "This product is already in your cart"]);
        } else {

            $cart = new Cart;
            if (auth()->user()) {
                $cart->user_id = auth()->user()->id;
            }
            $cart->ip = request()->ip();
            $cart->product_id = $product->id;
            $cart->price = ($product->price - (($product->price * $product->discount) / 100));
            $cart->quantity = 1;
            $cart->amount = $cart->price;
            if ($product->stock != null) {
                if ($product->stock < $cart->quantity || $product->stock <= 0) {
                    return response()->json(['msg' => "Stock not sufficient"]);
                }
            }
            $cart->save();
            $fetch_cart = Cart::with('product')->find($cart->id);
            if (auth()->user()) {
                $wishlist = Wishlist::where('user_id', auth()->user()->id)->where('cart_id', null)->update(['cart_id' => $cart->id]);
            }else{
                $wishlist = Wishlist::where('ip', request()->ip())->where('cart_id', null)->update(['cart_id' => $cart->id]);
            }
            return response()->json($fetch_cart);
        }
    }

    public function plus(Request $req){
       $cart = Cart::with('product')->find($req->id);
        $qty = $cart->quantity + 1;
        $amount = $cart->price * $qty;
        if ($cart->product->stock != null) {
            if ($cart->product->stock < $cart->quantity || $cart->product->stock <= 0) return response()->json(['msg' => "No sufficient stock"]);;
        }

        $cart->update([
            'quantity' => $qty,
            'amount' => $amount,
        ]);
        return response()->json($cart);
    }
    public function minus(Request $req){
       $cart = Cart::with('product')->find($req->id);
        $qty = $cart->quantity - 1;
        $amount = $cart->price * $qty;
        if ($qty < 1) {
            return response()->json(['msg' => "You can't less quantity then 1"]);
        }

        $cart->update([
            'quantity' => $qty,
            'amount' => $amount,
        ]);
        return response()->json($cart);
    }

    public function delete(Request $req){
        $model = "App\\Models\\".$req->mt;
        $delete = $model::find($req->id);
        if($delete){
            $delete->delete();
            return response()->json($delete);
        }else{
            return response()->json(['msg'=> 'Product Not found']);
        }


    }
}
