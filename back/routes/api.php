<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

// USERS
Route::get('/users', [DataController::class, 'getDataFromUsers']);
Route::get('/user/{id}', [DataController::class, 'getDataFromUserId']);
Route::post('/adduser', [DataController::class, 'addUser']);
Route::middleware('auth:api')->delete('/deleteuser/{id}', [DataController::class, 'deleteUser']);

// SUBREPPITS
Route::get('/subreppits', [DataController::class, 'getDataFromSubreppits']);
Route::get('/subreppit/{id}', [DataController::class, 'getDataFromSubreppitId']);
Route::middleware('auth:api')->post('/addsubreppit', [DataController::class, 'addSubreppit']);
Route::middleware('auth:api')->delete('/deletesubreppit/{id}', [DataController::class, 'deleteSubreppit']);

// POSTS
Route::get('/posts', [DataController::class, 'getDataFromPosts']);
Route::get('/post/{id}', [DataController::class, 'getDataFromPostId']);
Route::middleware('auth:api')->post('/addpost', [DataController::class, 'addPost']);
Route::middleware('auth:api')->delete('/deletepost/{id}', [DataController::class, 'deletePost']);

// COMMENTS
Route::get('/comments', [DataController::class, 'getDataFromComments']);
Route::get('/comment/{id}', [DataController::class, 'getDataFromCommentId']);
Route::middleware('auth:api')->post('/addcomment', [DataController::class, 'addComment']);
Route::middleware('auth:api')->delete('/deletecomment/{id}', [DataController::class, 'deleteComment']);

// LOGIN
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/register', [RegisteredUserController::class, 'store']);

// LIEN RESET MDP
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store']);

// TOKEN RESET MDP
Route::post('/reset-password', [NewPasswordController::class, 'store']);

// NOTIF VERIF EMAIL
Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});