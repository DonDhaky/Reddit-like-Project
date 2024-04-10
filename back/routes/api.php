<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\SubreppitController;
use App\Http\Controllers\CommentController;
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

// ROUTES pour les POSTS
Route::get('/post/{id}', [DataController::class, 'getDataFromPostId']); // AFFICHER UN POST 
Route::post('/post', [PostController::class, 'addPost']); // CREER UN POST
Route::delete('/post/{id}', [PostController::class, 'deletePost']); // SUPPRIMER UN POST


// ROUTES pour les USERS
Route::get('/user/{id}', [DataController::class, 'getDataFromUserId']); // AFFICHE LE USER
Route::post('/user', [DataController::class, 'addUser']); // CREE UN USER
Route::put('/user/{id}', [DataController::class, 'updateUser']); // UPDATE UN USER
Route::delete('/user/{id}', [DataController::class, 'deleteUser']); // SUPPRIMER UN USER


// ROUTES pour les SUBREPPITS
Route::get('/subreppit/{id}', [DataController::class, 'getDataFromSubreppitId']); // AFFICHER UN SUBREPPIT
Route::post('/subreppit', [DataController::class, 'addSubreppit']); // CREER UN SUBREPPIT
Route::delete('/subreppit/{id}', [DataController::class, 'deleteSubreppit']); // SUPPRIMER UN SUBREPPIT


// ROUTES pour les COMMENTS
Route::get('/comment/{id}', [DataController::class, 'getDataFromCommentId']); // AFFICHER UN COMMENT
Route::post('/comment', [DataController::class, 'addComment']); // CREER UN COMMENTAIRE
Route::delete('/comment/{id}', [DataController::class, 'deleteComment']); // SUPPRIMER UN COMMENTAIRE


// AFFICHER TOUTES LES DONNEES DE CHAQUE MODEL :
Route::get('/users', [DataController::class, 'getDataFromUsers']); // TOUS LES USERS
Route::get('/subreppits', [DataController::class, 'getDataFromSubreppits']); // TOUS LES SUBREPPITS
Route::get('/posts', [DataController::class, 'getDataFromPosts']); // TOUS LES POSTS
Route::get('/comments', [DataController::class, 'getDataFromComments']); // TOUS LES COMMENTS


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});