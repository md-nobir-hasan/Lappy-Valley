<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;
    protected $fillable = ['ram','type','bus_speed'];
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
