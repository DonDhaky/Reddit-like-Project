<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DataController extends Controller
{
    public function getDataFromPosts()
    {
        $posts = Post::all();
        //var_dump($posts);
        //echo ' // ';
        //$obj = ['posts' => [['id' => 1, 'name' => 'John Doe'],['id' => 2, 'name' => 'Jane Doe'],]];
        return response()->json($posts);
    }
}
