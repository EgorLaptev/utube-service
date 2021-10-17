<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentDislike extends Model
{
    use HasFactory;

    protected $table = 'comments_dislikes';

    protected $fillable = [
        'user_id',
        'comment_id'
    ];

}
