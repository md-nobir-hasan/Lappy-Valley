<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['title','slug','description','photo','status', 'serial'];
    public function img()
    {
        $photo = explode(',', $this->photo);
        return $photo;
    }
}
