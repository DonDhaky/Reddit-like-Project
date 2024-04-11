<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubreppitController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DataController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data', [DataController::class, 'index']);
Route::get('/addusertest', [UserController::class, 'addUserTest']);
Route::get('/addsubreppittest', [SubreppitController::class, 'addSubreppitTest']);
Route::get('/addposttest', [PostController::class, 'addPostTest']);