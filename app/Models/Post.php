<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body_text',
        'image',
        'user_id'
    ];

    // Relasi ke User (satu postingan milik satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi many-to-many ke Tag
    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,     // model tujuan
            'post_tag',     // nama pivot table
            'post_id',      // FK dari tabel posts (model saat ini)
            'tag_id'        // FK dari tabel tags
        );
    }
}
