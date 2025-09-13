<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'no_hp',
        'address',
        'user_id',
    ];

    // Relasi ke User (satu profile milik satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
