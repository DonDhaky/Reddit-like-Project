<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title', 
        'content', 
        'userid', 
        'postid', 
        'parentcomment_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'postid');
    }

    public function parentComment()
    {
        return $this->belongsTo(Comment::class, 'parentcomment_id');
    }
}