<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Subreppit;
use App\Models\Post;
use App\Models\Comment;


class DataController extends Controller
{
    public function getDataFromUsers() {
        $users = User::all();
        //var_dump($users);
        //echo ' // ';
        //$obj = ['users' => [['id' => 1, 'name' => 'John Doe'],['id' => 2, 'name' => 'Jane Doe'],]];
        return response()->json($users);
    }

    public function getDataFromUserId($user_id) {
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

    // User POST Method
    public function addUser(Request $rq) {

        $newData = new User();
        $newData->name = $rq->name;
        $newData->login = $rq->login;
        $newData->email = $rq->email;
        $newData->password = $rq->password;
        //$newData->pasword_confirmation = $rq->password_confirmation;
        $newData->age = $rq->age;
        $newData->is_admin = $rq->is_admin;
        $newData->save();

        return response()->json(['message' => 'User submitted']);

    }
    // User PUT Method
    public function updateUser(Request $rq, $id) {

        $newData = User::find($id);
        $newData->name = $rq->name;
        $newData->login = $rq->login;
        $newData->email = $rq->email;
        $newData->password = $rq->password;
        //$newData->pasword_confirmation = $rq->password_confirmation;
        $newData->age = $rq->age;
        $newData->is_admin = $rq->is_admin;
        $newData->save();

        return response()->json(['message' => 'User updated']);

    }
    // User DELETE Method
    public function deleteUser($user_id) {
        $user = User::findOrFail($user_id);
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }


    // Subreppit POST Method
    public function addSubreppit(Request $rq) {

        $newData = new Subreppit();
        $newData->title = $rq->title;
        $newData->description = $rq->description;
        $newData->media_path = $rq->media_path;
        $newData->save();

        return response()->json(['message' => 'Subreppit submitted']);

    }
    // Subreppit UPDATE method
    public function updateSubreppit(Request $rq, $id) {

        $newData = Subreppit::find($id);
        $newData->title = $rq->title;
        $newData->description = $rq->description;
        $newData->media_path = $rq->media_path;
        $newData->save();

        return response()->json(['message' => 'Subreppit updated']);

    }
    // Subreppit DELETE Method
    public function deleteSubreppit($subreppit_id) {
        $subreppit = Subreppit::findOrFail($subreppit_id);
        $subreppit->delete();
        return response()->json(['message' => 'Subreppit deleted']);
    }


    // Post POST Method
    public function addPost(Request $rq) {

        $newData = new Post();
        $newData->title = $rq->title;
        $newData->content = $rq->content;
        $newData->media_path = $rq->media_path;
        $newData->user_id = $rq->user_id;
        $newData->subreppit_id = $rq->subreppit_id;
        $newData->likes = $rq->likes;
        $newData->save();

        return response()->json(['message' => 'Post submitted']);

    }
    // Post UPDATE method
    public function updatePost(Request $rq, $id) {

        $newData = Post::find($id);
        $newData->title = $rq->title;
        $newData->content = $rq->content;
        $newData->media_path = $rq->media_path;
        $newData->user_id = $rq->user_id;
        $newData->subreppit_id = $rq->subreppit_id;
        $newData->likes = $rq->likes;
        $newData->save();

        return response()->json(['message' => 'Post updated']);

    }
    // Post DELETE Method
    public function deletePost($post_id) {
        $post = Post::findOrFail($post_id);
        $post->delete();
        return response()->json(['message' => 'Post deleted']);
    }

    // Comment POST Method
    public function addComment(Request $rq) {

        $newData = new Comment();
        $newData->title = $rq->title;
        $newData->content = $rq->content;
        $newData->user_id = $rq->user_id;
        $newData->post_id = $rq->post_id;
        $newData->save();

        return response()->json(['message' => 'Form submitted']);

    }

    // PUT Method
    /*
    public function update(Request $request, $id)
    {
        $data = Comment::findOrFail($id);
        $data->update($request->all());
        return response()->json($data);
    }
  
    // DELETE Method
    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return response()->json('Deleted Successfully', 204);
    }*/

    public function deleteComment($comment_id) {
        $comment = Comment::findOrFail($comment_id);
        $comment->delete();
        return response()->json(['message' => 'Comment deleted']);
    }

    public function getCurrentUserData() {
        $user = Auth::user();
        return response()->json($user);
    }

}