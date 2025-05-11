<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sehir extends Model
{
    //

    protected $table = "sehirler";

    public $timestamps =false;

    public function makaleler()
    {
        return $this->hasManyThrough('App\Models\Makale','App\Models\User');
    }
}
