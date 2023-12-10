<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gtag extends Model
{
    use HasFactory;
    protected $fillable=['header','footer','status'];
}
