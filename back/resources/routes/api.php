<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Une route permet d'ajouter à un URL (dans notre cas, celui de notre projet VueJs, par exemple "http://localhost")...
// ...une terminaison (par exemple "/users") et lui attribuer une action (ici "[UserController::class, 'index']") !!


// ROUTE pour les USERS
// use App\Http\Controllers\UserController; 

// Route::get('/users', [UserController::class, 'index']); // AFFICHER TOUS LES USERS
// Route::get('/users/{id}', [UserController::class, 'show']); // AFFICHE LE USER
// Route::post('/users', [UserController::class, 'create']); // CREE UN USER
// Route::put('/users/{id}', [UserController::class, 'update']); // UPDATE UN USER
// Route::delete('/users/{id}', [UserController::class, 'destroy']); // SUPPRIMER UN USER


// ROUTES pour les SUBREPPITS
// use App\Http\Controllers\SubreppitController;

// Route::get('/subreppits', [SubreppitController::class, 'index']); // AFFICHER ALL
// Route::get('/subreppits/{id}', [SubreppitController::class, 'show']); // AFFICHER UN SUBREPPIT
// Route::post('/subreppits', [SubreppitController::class, 'create']); // CREER UN SUBREPPIT
// Route::put('/subreppits/{id}', [SubreppitController::class, 'update']); // UPDATE UN SUBREPPIT
// Route::delete('/subreppits/{id}', [SubreppitController::class, 'destroy']); // SUPPRIMER UN SUBREPPIT


// ROUTES pour les POSTS
// use App\Http\Controllers\PostController::class;

// Route::get('/posts', [PostController::class, 'index']); // AFFICHER ALL
// Route::get('/posts/{id}', [PostController::class, 'show']); // AFFICHER UN POST  
// Route::post('/posts', [PostController::class, 'create']); // CREER UN POST
// Route::put('/posts/{id}', [PostController::class, 'update']); // UPDATE UN POST
// Route::delete('/posts/{id}', [PostController::class, 'destroy']); // SUPPRIMER UN POST


//ROUTE pour les COMMENTS
// use App\Http\Controllers\CommentController::class;

// Route::get('/comments', [CommentController::class, 'index']); // AFFICHER ALL COMMENTS
// Route::get('/comments/{id}', [CommentController::class, 'show']); // AFFICHER UN COMMENT
// Route::post('/comments', [CommentController::class, 'create']); // CREER UN COMMENTAIRE
// Route::delete('/comments/{id}', [CommentController::class, 'destroy']); // SUPPRIMER UN COMMENTAIRE