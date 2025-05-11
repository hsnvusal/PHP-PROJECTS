<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kitap extends Model
{
    protected  $fillable = [
        'isim',
        'yazarid'
    ];
    public $timestamp = false;

    public function yazar()
    {
        return $this->hasOne('\App\Models\Yazarlar','id','yazarid');
    }

    public function getIsimAttribte($value)
    {
        return ucfirst($value);
    }

    public function setIsimAttribute($value)
    {
        $this->attributes['isim'] = strtolower($value);
    }
}
