<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siparis extends Model
{
    use SoftDeletes;

    protected $table = 'siparis';
    protected $fillable = [
      'sebet_id',
      'siparis_tutari',
        'adsoyad',
        'adres',
        'telefon',
      'banka',
      'taksit_sayisi',
      'durum'
    ];

    protected $guarded = [];

    public function sebet()
    {
        return $this->belongsTo('App\Models\Sebet');
    }
}
