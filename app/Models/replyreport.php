<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class replyreport extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment_id',
        'reply_id',
        'ruser_id',
        'report_type'
    ];
}
