<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subreppit;
use Illuminate\Support\Facades\Validator;

class SubreppitController extends Controller
{
    /*public function addSubreppitTest() {
        $subreppit = new Subreppit();
        $subreppit->title = "ChatGPT";
        $subreppit->description = "The 5 mass extinction events that shaped the history of Earth — and the 6th that's happening now";
        $subreppit->media_path = "https://cdn.mos.cms.futurecdn.net/eJ2xtFeoPaqUYoWJL62Zt5-650-80.jpg.webp";
        $subreppit->save();
    }*/

    public function createPost(Request $rq) {
        $subreppit = new Subreppit();
        $subreppit->title = $rq->title;
        $subreppit->description = $rq->description;
        $subreppit->media_path = $rq->media_path;
        $subreppit->save();

        return redirect('/')->with('status', 'Subreppit created');
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

        $subreppit = Subreppit::find($rq->id_to_update);
        $subreppit->title = $rq->title;
        $subreppit->description = $rq->description;
        $subreppit->media_path = $rq->media_path;
        $subreppit->update();

        return redirect('/')->with('status', 'Subreppit updated');
    }

    public function deletePost(Request $rq) {
        $rq->validate([
            'id_to_delete' => 'required',
        ]);
        $subreppit_to_delete = Subreppit::find($rq->id_to_delete);
        $subreppit_to_delete->delete();

        return redirect('/')->with('status', 'Subreppit deleted');
    }
}