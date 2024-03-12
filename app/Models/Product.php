<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;
use Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug', 'title', 'model', 'mpn', 'price', 'discount', 'final_price', 'inventory_cost', 'summary', 'description', 'photo', 'stock', 'brand_id',
        'cat_id', 'child_cat_id', 'upcomming', 'is_featured', 'status', 'special_feature', 'average_rating', 'views', 'product_offer_id',
        //processor Attributes
        'processor_model_id', 'processor_generation_id', 'p_brand', 'c_speed', 'l1_cache', 'l2_cache', 'l3_cache', 'p_core', 'p_thread', 'p_other',
        //Display attributes
        'display_size_id', 'display_type_id', 'd_resolution', 'touch_screen', 'd_other',
        //Memory Attributes (Ram)
        'ram_id', 'm_type', 'bus_speed', 'm_slot', 'm_removal', 'm_other',
        //Storage Attributes (SSD/HDD)
        'ssd_id', 'hdd_id', 's_extra_m2_slot', 's_support_type', 's_upgrade', 's_slot', 'stor_other',
        //Graphics Attributes
        'g_model', 'graphic_id', 'g_other',
        //Keyboard & Touchpad Attributes
        'k_type', 'touchpad', 'k_other', 'k_backlight',
        //Camera & Audio Attributes
        'webcam', 'microphone', 'speaker', 'ca_other',
        //Port & Slots Attributes
        'optical_drive', 'card_reader', 'hdmi_p', 'usb2_p', 'usb3_p', 'type_c_tb_p', 'headphone_p', 'microphone_p', 'ps_other',
        //Network & Connectivity Attributes
        'wifi', 'bluetooth', 'nc_other',
        //Security Attributes
        'finger_print', 'facelock', 's_other',
        //Software Attributes
        'operating_system', 'soft_other',
        //Power Attributes
        'battery_type', 'battery_capacity', 'adapter_type', 'power_other',
        //Physical Specification Attributes
        'color', 'dimension', 'weight', 'physi_other',
        //Warranty Attributes
        'w_details', 'replacement_warranty', 'motherboard_warranty', 'service_warranty','disclaimer','note',
    ];

    static public function orderByFinalpriceAsc()
    {
        return self::select(
            'id',
            'price',
            'final_price',
            'title',
            'slug',
            'cat_id',
            'photo',
            DB::raw('CAST(REPLACE(final_price, ",", "") AS UNSIGNED) AS nfinal_price'),
        )->orderBy('nfinal_price', 'desc');
    }
    static public function orderByFinalpriceDesc()
    {
        return self::select(
            'id',
            'price',
            'final_price',
            'title',
            'slug',
            'cat_id',
            'photo',
            DB::raw('CAST(REPLACE(price, ",", "") AS UNSIGNED) AS nprice'),
            DB::raw('CAST(REPLACE(final_price, ",", "") AS UNSIGNED) AS nfinal_price'),
            DB::raw('CAST(REPLACE(inventory_cost, ",", "") AS UNSIGNED) AS ninventory_cost')
        )->orderBy('nfinal_price', 'desc');
    }
    static public function stringToNumber()
    {
        return self::with(['ProcessorModel', 'ram', 'ssd', 'hdd', 'DisplaySize', 'DisplayType'])
            ->select(
                '*',
                DB::raw('CAST(REPLACE(price, ",", "") AS UNSIGNED) AS nprice'),
                DB::raw('CAST(REPLACE(final_price, ",", "") AS UNSIGNED) AS nfinal_price'),
                DB::raw('CAST(REPLACE(inventory_cost, ",", "") AS UNSIGNED) AS ninventory_cost')
            );
    }

    static protected function serachByTitleOrNothing($search_text = null)
    {
        $seraching_products = self::orderByFinalpriceAsc()->where('status', 'active');

        if ($search_text) {
            $remove_white_space = Str::of($search_text)->squish();
            $searching_words =  explode(' ', $remove_white_space);

            foreach ($searching_words as $word) {
                $seraching_products->where('title', 'like', "%$word%");
            }
            return $seraching_products->get();
        }

        return $seraching_products->get();
    }
    public function cat_info()
    {
        return $this->hasOne('App\Models\Category', 'id', 'cat_id');
    }
    public function sub_cat_info()
    {
        return $this->hasOne('App\Models\Category', 'id', 'child_cat_id');
    }
    public static function getAllProduct()
    {
        return Product::with(['cat_info', 'sub_cat_info'])->orderBy('id', 'desc')->paginate(10);
    }
    public function rel_prods()
    {
        return $this->hasMany('App\Models\Product', 'cat_id', 'cat_id')->where('status', 'active')->orderBy('id', 'DESC')->limit(8);
    }
    public function getReview()
    {
        return $this->hasMany('App\Models\ProductReview', 'product_id', 'id')->with('user_info')->where('status', 'active')->orderBy('id', 'DESC');
    }
    public static function getProductBySlug($slug)
    {
        return Product::with(['cat_info', 'rel_prods', 'getReview'])->where('slug', $slug)->first();
    }
    public static function countActiveProduct()
    {
        $data = Product::where('status', 'active')->count();
        if ($data) {
            return $data;
        }
        return 0;
    }

    public function carts()
    {
        return $this->hasMany(Cart::class)->whereNotNull('order_id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class)->whereNotNull('cart_id');
    }

    public function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function ProcessorGeneration()
    {
        return $this->belongsTo(ProcessorGeneration::class);
    }

    public function ProcessorModel()
    {
        return $this->belongsTo(ProcessorModel::class);
    }

    public function DisplayType()
    {
        return $this->belongsTo(DisplayType::class);
    }

    public function DisplaySize()
    {
        return $this->belongsTo(DisplaySize::class);
    }

    public function Ram()
    {
        return $this->belongsTo(Ram::class);
    }

    public function ssd()
    {
        return $this->belongsTo(ssd::class);
    }

    public function hdd()
    {
        return $this->belongsTo(hdd::class);
    }

    public function Graphic()
    {
        return $this->belongsTo(Graphic::class);
    }

    public function SpecialFeature()
    {
        return $this->belongsTo(SpecialFeature::class);
    }
    public function ProductOffer()
    {
        return $this->belongsTo(ProductOffer::class);
    }

    public function img()
    {
        return explode(',', $this->photo);
    }

    public function installment(): BelongsTo
    {
        return $this->belongsTo(Installment::class);
    }

    public function storage()
    {
        $strage = '';
        if ($this->ssd) {
            $strage = $strage . $this->ssd->name . ' SSD';
        }
        if ($this->hdd) {
            $strage = $strage . ', ' . $this->hdd->name . ' HDD';
        }
        return $strage;
    }

    public function totalOrder()
    {
        return count($this->carts);
    }

    public function statusWiseOrderCount($status)
    {
        if (count($this->carts) > 0) {
            $count = 0;
            foreach ($this->carts as $cart) {
                if ($cart->order->status == $status) {
                    $count++;
                }
            }
            return $count;
        } else {
            return 0;
        }
    }
}
