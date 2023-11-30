<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['title', 'model','slug','summary','description','cat_id','child_cat_id','price','brand_id','discount','status','photo','size','stock','is_featured','condition','processor_generation_id','processor_model_id','display_size_id','display_type_id','ram_id','ssd_id','hdd_id','graphic_id','special_feature', 'upcomming'];

    public function cat_info(){
        return $this->hasOne('App\Models\Category','id','cat_id');
    }
    public function sub_cat_info(){
        return $this->hasOne('App\Models\Category','id','child_cat_id');
    }
    public static function getAllProduct(){
        return Product::with(['cat_info','sub_cat_info'])->orderBy('id','desc')->paginate(10);
    }
    public function rel_prods(){
        return $this->hasMany('App\Models\Product','cat_id','cat_id')->where('status','active')->orderBy('id','DESC')->limit(8);
    }
    public function getReview(){
        return $this->hasMany('App\Models\ProductReview','product_id','id')->with('user_info')->where('status','active')->orderBy('id','DESC');
    }
    public static function getProductBySlug($slug){
        return Product::with(['cat_info','rel_prods','getReview'])->where('slug',$slug)->first();
    }
    public static function countActiveProduct(){
        $data=Product::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }

    public function carts(){
        return $this->hasMany(Cart::class)->whereNotNull('order_id');
    }

    public function wishlists(){
        return $this->hasMany(Wishlist::class)->whereNotNull('cart_id');
    }

    public function brand(){
        return $this->hasOne(Brand::class,'id','brand_id');
    }

    public function ProcessorGeneration(){
        return $this->belongsTo(ProcessorGeneration::class);
    }

    public function ProcessorModel(){
        return $this->belongsTo(ProcessorModel::class);
    }

    public function DisplayType(){
        return $this->belongsTo(DisplayType::class);
    }

    public function DisplaySize(){
        return $this->belongsTo(DisplaySize::class);
    }

    public function Ram(){
        return $this->belongsTo(Ram::class);
    }

    public function ssd(){
        return $this->belongsTo(ssd::class);
    }

    public function hdd(){
        return $this->belongsTo(hdd::class);
    }

    public function Graphic(){
        return $this->belongsTo(Graphic::class);
    }

    public function SpecialFeature(){
        return $this->belongsTo(SpecialFeature::class);
    }


}
