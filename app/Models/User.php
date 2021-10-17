<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $attributes = [
        'avatar' => 'avatars/placeholder.png',
        'header' => 'headers/placeholder.png'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class, 'author_id', 'id');
    }

    public function subscribers()
    {
        return $this->hasMany(Subscribe::class, 'channel_id', 'id');
    }

}
