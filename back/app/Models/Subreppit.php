<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subreppit extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'media_path',
    ];
}