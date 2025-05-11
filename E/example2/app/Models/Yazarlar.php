<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yazarlar extends Model
{
    public function kitap()
    {
        return $this->hasMany('\App\Models\Kitap','yazarid','id');
    }

    public function satinal()
    {
        return $this->belongsToMany('App\Models\Yazarlar','kitab_satin_als','id','yazarid ');
    }
}
