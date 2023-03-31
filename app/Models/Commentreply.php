<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentreply extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_id',
        'user_id',
        'message'
    ];

    public function comment(){
        return $this->belongsTo(Comment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(Commentreply::class);
    }
}
