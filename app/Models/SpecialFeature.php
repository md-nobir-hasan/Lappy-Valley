<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialFeature extends Model
{
    use HasFactory;
    protected $fillable= ['name'];
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
