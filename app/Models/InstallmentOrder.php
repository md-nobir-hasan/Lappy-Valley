<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InstallmentOrder extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'user_id','amount'];

    public function order():BelongsTo{
        return $this->belongsTo(Order::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

}
