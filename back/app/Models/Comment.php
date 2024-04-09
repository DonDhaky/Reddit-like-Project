<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title', 
        'content', 
        'user_id', 
        'post_id', 
        'parentcomment_id',
    ];
}