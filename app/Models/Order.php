<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['user_id','order_number','sub_total','quantity','delivery_charge',
     'amount','name','l_name','country','post_code','address','address2','phone','email','payment_method',
     'payment_status','shipping_id','coupon', 'order_status_id','divission_id', 'status', 'transaction_id',
        'currency', 'city','user_id'];

    public function cart_info(){
        return $this->hasMany('App\Models\Cart','order_id','id');
    }
    public static function getAllOrder($id){
        return Order::with('cart_info')->find($id);
    }
    public static function countActiveOrder(){
        $data=Order::count();
        if($data){
            return $data;
        }
        return 0;
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function shipping(){
        return $this->belongsTo(Shipping::class,'shipping_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function order_status()
    {
        return $this->belongsTo(OrderStatus::class);
    }
    public function divission()
    {
        return $this->belongsTo(Divission::class);
    }

}
