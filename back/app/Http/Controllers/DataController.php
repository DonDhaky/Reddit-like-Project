<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subreppit;
use App\Models\Post;
use App\Models\Comment;

class DataController extends Controller
{

// USER
    public function getDataFromUsers() {
        $users = User::all();
        return response()->json($users);
    }

    public function getDataFromUserId($user_id) {
        $user = User::find($user_id);
        return response()->json($user);
    }

    public function addUser(Request $rq) {
        $newData = new User();
        $newData->name = $rq->name;
        $newData->login = $rq->login;
        $newData->email = $rq->email;
        $newData->password = $rq->password;
        $newData->age = $rq->age;
        $newData->is_admin = $rq->is_admin;
        $newData->save();

        return response()->json(['message' => 'Form submitted']);
    }

    public function deleteUser($user_id) {
        $user = User::findOrFail($user_id);
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }


// SUBREPPIT
    public function getDataFromSubreppits() {
        $subreppits = Subreppit::all();
        return response()->json($subreppits);
    }

    public function getDataFromSubreppitId($subreppit_id) {
        $subreppit = Subreppit::find($subreppit_id);
        return response()->json($subreppit);
    }

    public function addSubreppit(Request $rq) {
        $newData = new Subreppit();
        $newData->title = $rq->title;
        $newData->description = $rq->description;
        $newData->media_path = $rq->media_path;
        $newData->save();

        return response()->json(['message' => 'Form submitted']);
    }

    public function deleteSubreppit($subreppit_id) {
        $subreppit = Subreppit::findOrFail($subreppit_id);
        $subreppit->delete();
        return response()->json(['message' => 'Subreppit deleted']);
    }


// POSTS
    public function getDataFromPosts() {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function getDataFromPostId($post_id) {
        $post = Post::find($post_id);
        return response()->json($post);
    }

    public function addPost(Request $rq) {
        $newData = new Post();
        $newData->title = $rq->title;
        $newData->content = $rq->content;
        $newData->media_path = $rq->media_path;
        $newData->user_id = $rq->user_id;
        $newData->subreppit_id = $rq->subreppit_id;
        $newData->likes = $rq->content;
        $newData->save();

        return response()->json(['message' => 'Form submitted']);
    }

    public function deletePost($post_id) {
        $post = Post::findOrFail($post_id);
        $post->delete();
        return response()->json(['message' => 'Post deleted']);
    }

    
// COMMENTS
    public function getDataFromComments() {
        $comments = Comment::all();
        return response()->json($comments);
    }

    public function getDataFromCommentId($comment_id) {
        $comment = Comment::find($comment_id);
        return response()->json($comment);
    }

    public function addComment(Request $rq) {
        $newData = new Comment();
        $newData->title = $rq->title;
        $newData->content = $rq->content;
        $newData->user_id = $rq->user_id;
        $newData->post_id = $rq->post_id;
        $newData->save();

        return response()->json(['message' => 'Form submitted']);
    }

    public function deleteComment($comment_id) {
        $comment = Comment::findOrFail($comment_id);
        $comment->delete();
        return response()->json(['message' => 'Comment deleted']);
    }

}