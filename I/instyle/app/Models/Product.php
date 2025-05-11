<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'old_price',
        'image',
        'discount_percent',
        'is_active',
    ];
}
