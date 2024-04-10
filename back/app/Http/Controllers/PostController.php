<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{

// afficher 1 post
    public function show($post_id)
    {
        $post = Post::find($post_id);
        return response()->json($post);
    }

// créer un post
    public function create()
    {
        $post = Post::find($post_id);
        return response()->json($post);
    }

// supprimer un post
    public function delete($post_id)
    {
        $post = Post::find($post_id);
        return response()->json($post);
    }

}