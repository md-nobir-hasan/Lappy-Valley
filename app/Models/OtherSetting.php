<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherSetting extends Model
{
    use HasFactory;
    protected $fillable=['new_product', 'popular_product', 'most_viewed_product','fb','youtube','twitter','email', 'linkedin'];
}
