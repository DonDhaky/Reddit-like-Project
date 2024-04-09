<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 
        'content', 
        'media_path', 
        'subrep_id', 
        'user_id',
        'likes',
    ];
}