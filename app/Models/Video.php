<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes = [
        'private' => false,
        'disabled_comments' => false
    ];

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'video_id', 'id');
    }

    public function dislikes()
    {
        return $this->hasMany(Dislike::class, 'video_id', 'id');
    }

}
