<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;
    protected $fillable = ['capacity'];
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
