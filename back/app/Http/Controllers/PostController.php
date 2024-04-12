<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    /*
    public function addPostTest() {
        $post = new Post();
        $post->title = "WCGW Messing with a treadmill";
        $post->content = "";
        $post->media_path = "https://www.dropbox.com/scl/fi/q7mjy6vhlquabjgoivf8j/treadmill.mp4?rlkey=w348wqk7m6lheja22epxrxnz7&dl=1";
        $post->user_id = 2;
        $post->subreppit_id = 3;
        $post->likes = 41;
        $post->save();
    }
    */

    public function createPost(Request $rq) {
        $post = new Post();
        $post->title = $rq->title;
        $post->content = $rq->content;
        $post->media_path = $rq->media_path;
        $post->user_id = $rq->user_id;
        $post->subreppit_id = $rq->subreppit_id;
        $post->likes = $rq->likes;
        $post->save();

        return redirect('/')->with('status', 'Post created');
    }

    public function updatePost(Request $rq) {
    
        //Error messages
        $messages = [
            "title.required" => "Title is required",
        ];

        // validate the form data
        $validator = Validator::make($rq->all(), [
            'title' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/updatepost/mismatch')->withErrors($validator)->withInput();
        }

        $post = Post::find($rq->id_to_update);
        $post->title = $rq->title;
        $post->content = $rq->content;
        $post->media_path = $rq->media_path;
        $post->user_id = $rq->user_id;
        $post->subreppit_id = $rq->subreppit_id;
        $post->likes = $rq->likes;
        $post->update();

        return redirect('/')->with('status', 'Post updated');
    }

    public function deletePost(Request $rq) {
        $rq->validate([
            'id_to_delete' => 'required',
        ]);
        $post_to_delete = Post::find($rq->id_to_delete);
        $post_to_delete->delete();

        return redirect('/')->with('status', 'Post deleted');
    }

}