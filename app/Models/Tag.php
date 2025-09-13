<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    // Relasi many-to-many ke Post
    public function posts()
    {
        return $this->belongsToMany(
            Post::class,    // model tujuan
            'post_tag',     // nama pivot tabel
            'tag_id',       // FK dari tabel tags (model saat ini)
            'post_id'       // FK dari tabel posts
        );
    }
}
