<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'age',
        'img',
        'username',
        'country',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function likedPost(){
        return $this->belongsToMany(Post::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function reported(){
        return $this->hasMany(Post::class);
    }
    public function replies(){
        return $this->hasMany(Commentreply::class);
    }
    
}