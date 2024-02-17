<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyReview extends Model
{
    use HasFactory;

    protected $fillable=['name','email', 'subject','msg', 'user_id'];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
