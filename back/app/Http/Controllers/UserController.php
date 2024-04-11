<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /*public function addUserTest() {
        $user = new User();
        $user->name = "Wolfy";
        $user->login = "Wolf";
        $user->email = "wolf@wolf.com";
        $user->password = "wolf";
        $user->age = "478";
        $user->is_admin = 0;
        $user->save();
    }*/

    public function createUser(Request $rq) {
        $rq->validate([
            'name' => 'required',
            'login' => 'required',
            'email' => 'required',
            'password' => 'required|min:6|confirmed',
            'age' => 'required',
        ]);

        $user = new User();
        $user->name = $rq->name;min:
        $user->login = $rq->login;
        $user->email = $rq->email;
        $user->password = $rq->password;
        $user->age = $rq->age;
        if (isset($rq->is_admin)) {
            $user->is_admin = 1;
        } else {
            $user->is_admin = 0;
        }
        $user->save();

        return redirect('/')->with('status', 'Added');
    }

    public function getUserForAdmin(Request $rq) {
        return view('update', ['user_data' => User::where('id', $rq->id_to_update)->first()]); // ... to fill update form
    }

    public function updateUser(Request $rq) {
        /*
        $rq->validate([
            'name' => 'required',
            'login' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'age' => 'required',
        ]);
        */

        //Error messages
        $messages = [
            "email.required" => "Email is required",
            "email.email" => "Email is not valid",
            "password.required" => "Password is required",
            "password.confirmed" => "Password field and confirmation field mismatch",
            "password.min" => "Password must be at least 6 characters"
        ];

        // validate the form data
        $validator = Validator::make($rq->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed'
        ], $messages);

        if ($validator->fails()) {
            return redirect('/updateuser/mismatch')->withErrors($validator)->withInput();
        }

        $user = User::find($rq->id_to_update);
        $user->name = $rq->name;
        $user->login = $rq->login;
        $user->email = $rq->email;
        $user->password = $rq->password;
        $user->age = $rq->age;
        if (isset($rq->is_admin)) {
            $user->is_admin = 1;
        } else {
            $user->is_admin = 0;
        }
        $user->update();

        return redirect('/')->with('status', 'User updated');
    }

    public function deleteUser(Request $rq) {
        $rq->validate([
            'id_to_delete' => 'required',
        ]);
        $user_to_delete = User::find($rq->id_to_delete);
        $user_to_delete->delete();

        return redirect('/listusers')->with('status', 'Deleted');
    }

    /*public function getUserForUser($my_id) { 
        return view('my_account', ['user_data' => User::where('id', 1)->first()]);
    }

    public function getUserForUpdateByUser($my_id) {
        return view('my_account/update', ['my_data' => User::where('id', $my_id)->first()]);
    }*/

    /*public function updateUserByUser(Request $rq, $my_id) {

        $rq->validate([
            'name' => 'required',
            'login' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'age' => 'required',
        ]);

        $user = User::find($my_id);
        $user->name = $rq->name;
        $user->login = $rq->login;
        $user->email = $rq->email;
        $user->password = $rq->password;
        $user->age = $rq->age;
        $user->update();

        return redirect('/my_account/{$my_id}')->with('status', 'Modified');
    }

    public function listUsers() {
        $users = User::all();
        return view('listusers', compact('users'));
    }*/

    //public function index()
    //{
    //   $posts = Post::all();
    //    return view('posts.index', compact('posts'));
    //}

    /**
     * Show the form for creating a new resource.
     */
    //public function create()
    //{
    //    return view('posts.create');
    //}

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('posts.index')
        ->with('success','Post created successfully.');
    }*/

    /**
     * Display the specified resource.
     */
    /*public function show(string $id)
    {
        $post = User::find($id);
        return view('posts.show', compact('post'));
    }*/

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id)
    {
        $post = User::find($id);
        return view('posts.edit', compact('post'));
    }*/

    /**
     * Update the specified resource in storage.
     */
    /*public function userUpdate(Request $request, string $id)
    {*/
        /*$request->validate([
            'name' => 'required|max:255',
            'phone number' => 'required',
          ]);
          $post = User::find($id);
          $post->update($request->all());
          return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
        */
        /*$user = User::find($id);
        $user->name = $request->input('name');
        $user->login = $request->input('login');
        $user->email = $request->input('email');
        
        $user->save();
        return redirect('/my_account')->with('success', 'Item updated successfully');
    }*/

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy(string $id)
    {
        $post = User::find($id);
        $post->delete();
        return redirect()->route('posts.index')
        ->with('success', 'Post deleted successfully');
    }*/
}