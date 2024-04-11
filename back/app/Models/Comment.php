<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primarykey = 'id';
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'post_id',

        'childrencomments_ids',

        'parentcomment_id',
    ];
}
