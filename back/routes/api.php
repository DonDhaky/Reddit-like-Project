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
Route::get('/subreppits', [DataController::class, 'getDataFromSubreppits']);
Route::get('/posts', [DataController::class, 'getDataFromPosts']);
Route::get('/comments', [DataController::class, 'getDataFromComments']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
