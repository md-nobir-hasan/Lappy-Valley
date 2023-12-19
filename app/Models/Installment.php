<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;
    protected $fillable = ['duration_id', 'product_id'];

    public function duration(){
        return $this->belongsTo(Duration::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
