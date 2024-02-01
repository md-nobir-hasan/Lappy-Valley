<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\CompanyReview;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\ProductReviewImag;
use App\Models\Wishlist;
use Exception;
use Hamcrest\Type\IsBoolean;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        //Stock checking
        if ($product->stock = null || $product->stock < 1) {
            return response()->json(['msg' => "Stock not sufficient"]);
        }

        if (auth()->user()) {
            $already_cart = Cart::where('user_id', auth()->user()->id)->where('order_id', null)->where('product_id', $product->id)->first();
        } else {
            $already_cart = Cart::where('ip', request()->ip())->where('order_id', null)->where('product_id', $product->id)->first();
        }
        // return $already_cart;
        if ($already_cart) {
            return response()->json(['msg' => "This product is already in your cart"]);
        } else {

            $cart = new Cart;
            if (auth()->user()) {
                $cart->user_id = auth()->user()->id;
            }
            $cart->ip = request()->ip();
            $cart->product_id = $product->id;
            $cart->price = $product->final_price;
            $cart->quantity = 1;
            $cart->amount = $product->final_price;
            $cart->inventory_cost = $product->inventory_cost;
            $cart->save();
            $fetch_cart = Cart::with('product')->find($cart->id);
            if (auth()->user()) {
                $wishlist = Wishlist::where('user_id', auth()->user()->id)->where('cart_id', null)->update(['cart_id' => $cart->id]);
            } else {
                $wishlist = Wishlist::where('ip', request()->ip())->where('cart_id', null)->update(['cart_id' => $cart->id]);
            }

            return response()->json($fetch_cart);
        }
    }

    public function plus(Request $req)
    {
        $cart = Cart::with('product')->find($req->id);
        $qty = $cart->quantity + 1;
        $amount = $cart->price * $qty;
        $inventory_cost = $cart->inventory_cost * $qty;
        if ($cart->product->stock != null) {
            if ($cart->product->stock < $cart->quantity || $cart->product->stock <= 0) return response()->json(['msg' => "No sufficient stock"]);;
        }

        $cart->update([
            'quantity' => $qty,
            'amount' => $amount,
            'inventory_cost' => $inventory_cost,
        ]);
        return response()->json($cart);
    }

    public function minus(Request $req)
    {
        $cart = Cart::with('product')->find($req->id);
        $qty = $cart->quantity - 1;
        $amount = $cart->price * $qty;
        $inventory_cost = $cart->inventory_cost * $qty;
        if ($qty < 1) {
            return response()->json(['msg' => "You can't less quantity then 1"]);
        }

        $cart->update([
            'quantity' => $qty,
            'amount' => $amount,
            'inventory_cost' => $inventory_cost,
        ]);
        return response()->json($cart);
    }

    public function delete(Request $req)
    {
        $model = "App\\Models\\" . $req->mt;
        $delete = $model::find($req->id);
        if ($delete) {
            $delete->delete();
            if ($user = auth()->user()) {
                $n['carts'] = Cart::with('product')->where('user_id', $user->id)->where('order_id', null)->latest()->get();
            } else {
                $n['carts'] = Cart::with('product')->where('ip', request()->ip())->where('order_id', null)->latest()->get();
            }
            return response()->json($n);
        } else {
            return response()->json(['msg' => 'Product Not found']);
        }
    }

    public function sync(){
        if ($user = auth()->user()) {
            $n['carts'] = Cart::with('product')->where('user_id', $user->id)->where('order_id', null)->latest()->get();
        } else {
            $n['carts'] = Cart::with('product')->where('ip', request()->ip())->where('order_id', null)->latest()->get();
        }
        return response()->json($n);
    }

    public function shopSorting(Request $req)
    {

        if ($srt = $req->sorting) {
            switch ($srt) {
                case 'sbp': //short by popularity
                    $product = Product::whereBetween('price', [$req->minPrice, $req->maxPrice])->orderBy('views', 'desc')->get();
                    break;
                case 'sbar': //sort by average rating
                    $product = Product::whereBetween('price', [$req->minPrice, $req->maxPrice])->orderBy('average_rating', 'desc')->get();
                    break;
                case 'sbl': //sort by latest
                    $product = Product::whereBetween('price', [$req->minPrice, $req->maxPrice])->latest()->get();
                    break;
                case 'lth': //low to high price
                    $product = Product::whereBetween('price', [$req->minPrice, $req->maxPrice])->orderBy('final_price', 'asc')->get();
                    break;
                case 'htl': // high to low price
                    $product = Product::whereBetween('price', [$req->minPrice, $req->maxPrice])->orderBy('final_price', 'desc')->get();
                    break;
            }
        } else {
            $product = Product::whereBetween('price', [$req->minPrice, $req->maxPrice])->get();
        }



        if ($subcat = $req->subcat) {
            $subcat = Category::where('slug', $subcat)->first();

            $product = $product->where('child_cat_id', $subcat->id);

        }else{
            if ($cat = $req->cat) {
                dd($cat);
                $cat = Category::where('slug', $cat)->first();
                $product = $product->where('cat_id', $cat->id);
            }
        }
        // dd($product);
        if ($req->in_stock) {
            $product = $product->where('stock', '>', 0);
        }

        if ($req->upcomming) {
            $product = $product->where('upcomming', '!=', null);
        }
        if ($req->brands) {
            $product = $product->whereIn('brand_id', $req->brands);
        }
        if ($req->d_sizes) {
            $product = $product->whereIn('display_size_id', $req->d_sizes);
        }
        if ($req->d_types) {
            $product = $product->whereIn('display_type_id', $req->d_types);
        }
        if ($req->graphics) {
            $product = $product->whereIn('graphic_id', $req->graphics);
        }
        if ($req->hdds) {
            $product = $product->whereIn('hdd_id', $req->hdds);
        }
        if ($req->pgenerations) {
            $product = $product->whereIn('processor_generation_id', $req->pgenerations);
        }
        if ($req->pmodels) {
            $product = $product->whereIn('processor_model_id', $req->pmodels);
        }
        if ($req->rams) {
            $product = $product->whereIn('ram_id', $req->rams);
        }
        if ($req->s_features) {
            $product = $product->whereIn('special_feature', $req->s_features);
        }
        if ($req->ssds) {
            $product = $product->whereIn('ssd_id', $req->ssds);
        }
        $n['product'] = $product;

        return response()->json($n);
    }
    public function couponFetch(Request $req){
        $coupon = Coupon::where('code', $req->code)->first();
        // dd($coupon,$discode);
        if($coupon){
            Session::put('coupon_id',$coupon->id);
            return response()->json($coupon);
        }else{
            return 'invalid';
        }
    }
    public function productReview(Request $req)
    {
        $data['f_name'] = $req->f_name;
        $data['l_name'] = $req->l_name;
        $data['review'] = $req->msg;
        $data['product_id'] = $req->product_id;
        if(auth()->user()){
            $data['user_id'] = auth()->user()->id;
        }else{
            $data['ip'] = $req->ip();
        }

        $data['rate'] = (collect($req->review_stars))->max();
        $save = ProductReview::create($data);
        if ($save) {
            if ($req->file('imgs')) {
                // dd($req->file('imgs')->store('review', 'public'));
                foreach ($req->file('imgs') as $img) {
                    $path =  $img->store('review', 'public');
                    ProductReviewImag::create([
                        'img' => $path,
                        'product_review_id' => $save->id,
                    ]);
                }
            }
            // $n['reviews'] = ProductReview::where('product_id', $req->product_id)->where('status', 'active')->orderBy('id', 'desc')->get();
            return true;
        } else {
            return false;
        }
    }

    public function post(Request $req){
        if(!$req->name){
            return response()->json(['msg' => 'Please, Enter a name']);
        }
        if(!$req->email){
            return response()->json(['msg' => 'Please, Enter an email']);
        }
        if(!$req->msg){
            return response()->json(['msg' => 'Please, Write something as message']);
        }

        $insert = CompanyReview::create([
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'msg' => $req->msg,
            'user_id' => auth()->user() ? auth()->user()->id : null,
        ]);
        return response()->json($insert);
    }
}
