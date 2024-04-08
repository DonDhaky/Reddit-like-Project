<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
}
