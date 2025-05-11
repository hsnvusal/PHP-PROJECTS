<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected  $table = 'kategoriler';
    protected  $guarded = [];


    public function yazilar()
    {
        return $this->hasMany('App\Models\Yazi','kategori');
    }
}
