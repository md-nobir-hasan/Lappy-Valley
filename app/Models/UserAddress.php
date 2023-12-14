<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillabel = ['address', 'address2', 'city', 'post_code','divission_id'];

    public function divission(){
        return $this->belongsTo(Divission::class);
    }
}
