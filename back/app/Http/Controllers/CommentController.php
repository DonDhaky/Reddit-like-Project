<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;

class CommentController extends Controller
{
    public function createPost(Request $rq) {
        $comment = new Comment();
        $comment->title = $rq->title;
        $comment->content = $rq->content;
        $comment->user_id = $rq->user_id;
        $comment->post_id = $rq->post_id;

        $comment->childrencomments_ids = $rq->childrencomments_ids;

        $comment->parentcomment_id = $rq->parentcomment_id;
        $comment->save();

        return redirect('/')->with('status', 'Comment created');
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

        $comment = Comment::find($rq->id_to_update);
        $comment->title = $rq->title;
        $comment->content = $rq->content;
        $comment->user_id = $rq->user_id;
        $comment->post_id = $rq->post_id;

        $comment->childrencomments_ids = $rq->childrencomments_ids;

        $comment->parentcomment_id = $rq->parentcomment_id;
        $comment->update();

        return redirect('/')->with('status', 'Comment updated');
    }

    public function deletePost(Request $rq) {
        $rq->validate([
            'id_to_delete' => 'required',
        ]);
        $comment_to_delete = Comment::find($rq->id_to_delete);
        $comment_to_delete->delete();

        return redirect('/')->with('status', 'Comment deleted');
    }
}
