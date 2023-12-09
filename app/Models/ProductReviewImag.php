<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReviewImag extends Model
{
    use HasFactory;
    protected $fillable = ['img','product_review_id'];
}
