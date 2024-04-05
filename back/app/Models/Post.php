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
        'likes',
    ];

    public function subreppit()
    {
        return $this->belongsTo(Subreppit::class, 'subrep_id');
    }
}