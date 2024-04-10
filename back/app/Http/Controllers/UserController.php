<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{

// afficher 1 user
    public function show($user_id)
    {
        $user = User::find($user_id);
        return response()->json($user);
    }
    
// créer user
    public function create()
    {
        $user = User::find($user_id);
        return response()->json($user);
    }

// supprimer user
    public function delete($user_id)
    {
        $user = User::find($user_id);
        return response()->json($user);
    }
}
