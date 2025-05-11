<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /** @use HasFactory<\Database\Factories\PostsFactory> */
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori','kategori_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

}
