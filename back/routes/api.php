<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/users', [DataController::class, 'getDataFromUsers']);
Route::get('/user/{id}', [DataController::class, 'getDataFromUserId']);
Route::post('/adduser', [DataController::class, 'addUser']);
Route::delete('/deleteuser/{id}', [DataController::class, 'deleteUser']);
Route::get('/subreppits', [DataController::class, 'getDataFromSubreppits']);
Route::get('/subreppit/{id}', [DataController::class, 'getDataFromSubreppitId']);
Route::post('/addsubreppit', [DataController::class, 'addSubreppit']);
Route::delete('/deletesubreppit/{id}', [DataController::class, 'deleteSubreppit']);
Route::get('/posts', [DataController::class, 'getDataFromPosts']);
Route::get('/post/{id}', [DataController::class, 'getDataFromPostId']);
Route::post('/addpost', [DataController::class, 'addPost']);
Route::delete('/deletepost/{id}', [DataController::class, 'deletePost']);
Route::get('/comments', [DataController::class, 'getDataFromComments']);
Route::get('/comment/{id}', [DataController::class, 'getDataFromCommentId']);
Route::post('/addcomment', [DataController::class, 'addComment']);
Route::delete('/deletecomment/{id}', [DataController::class, 'deleteComment']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
