<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;

class CommentController extends Controller
{

// afficher 1 comment
    public function show($comment_id)
    {
        $comment = Comment::find($comment_id);
        return response()->json($comment);
    }
    
// créer comment
    public function create()
    {
        $comment = Comment::find($comment_id);
        return response()->json($comment);
    }

// supprimer comment
    public function delete($comment_id)
    {
        $comment = Comment::find($comment_id);
        return response()->json($comment);
    }
}
