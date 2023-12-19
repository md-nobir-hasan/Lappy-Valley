<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    use HasFactory;
    protected $fillable=['year','month','status'];
    public function installments()
    {
        return $this->hasMany(Installment::class);
    }
}
