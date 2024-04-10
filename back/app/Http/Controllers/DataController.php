<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subreppit;
use App\Models\Post;
use App\Models\Comment;

class DataController extends Controller
{
    public function getDataFromUsers()
    {
        $users = User::all();
        //var_dump($users);
        //echo ' // ';
        //$obj = ['users' => [['id' => 1, 'name' => 'John Doe'],['id' => 2, 'name' => 'Jane Doe'],]];
        return response()->json($users);
    }

    public function getDataFromUserId($user_id)
    {
        $user = User::find($user_id);
        return response()->json($user);
    }

    public function getDataFromSubreppits() {
        $subreppits = Subreppit::all();
        return response()->json($subreppits);
    }

    public function getDataFromSubreppitId($subreppit_id) {
        $subreppit = Subreppit::find($subreppit_id);
        return response()->json($subreppit);
    }

    public function getDataFromPosts() {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function getDataFromPostId($post_id) {
        $post = Post::find($post_id);
        return response()->json($post);
    }

    public function getDataFromComments() {
        $comments = Comment::all();
        return response()->json($comments);
    }

    public function getDataFromCommentId($comment_id) {
        $comment = Comment::find($comment_id);
        return response()->json($comment);
    }

}
