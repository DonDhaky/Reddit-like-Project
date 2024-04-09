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

// TEST
Route::get('/data', [DataController::class, 'getData']);


// EXEMPLES DE ROUTES POUR L'API EXPLOITEE PAR VUEJS // CES EXEMPLES SONT DESTINES A ETRE MODIFIES SELON NOS BESOINS, NOS CONTROLLEURS, MODELS ET DB

// use App\Http\Controllers\ApiControllers\****NOM DU CONTROLLEUR****; // remplacer ****NOM DU CONTROLLEUR**** par le(s) controller(s) nécessaires !! 

// Une route permet d'ajouter à un URL (dans notre cas, celui de notre projet VueJs, par exemple "http://localhost")...
// ...une terminaison (par exemple "/users") et lui attribuer une action (ici "[****NOM DU CONTROLLEUR****::class, 'index']") !!

// Route::get('/items', [****NOM DU CONTROLLEUR****::class, 'index']); 
// Route::get('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'show']);
// Route::post('/items', [****NOM DU CONTROLLEUR****::class, 'store']);
// Route::put('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'update']);
// Route::delete('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'destroy']);

// use App\Http\Controllers\ApiControllers\****NOM DU CONTROLLEUR****; // remplacer ****NOM DU CONTROLLEUR**** par le(s) controller(s) nécessaires


// Route::get('/items', [****NOM DU CONTROLLEUR****::class, 'index']);
// Route::get('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'show']);
// Route::post('/items', [****NOM DU CONTROLLEUR****::class, 'store']);
// Route::put('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'update']);
// Route::delete('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'destroy']);

// use App\Http\Controllers\ApiControllers\****NOM DU CONTROLLEUR****; // remplacer ****NOM DU CONTROLLEUR**** par le(s) controller(s) nécessaires


// Route::get('/items', [****NOM DU CONTROLLEUR****::class, 'index']);
// Route::get('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'show']);
// Route::post('/items', [****NOM DU CONTROLLEUR****::class, 'store']);
// Route::put('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'update']);
// Route::delete('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'destroy']);

// use App\Http\Controllers\ApiControllers\****NOM DU CONTROLLEUR****; // remplacer ****NOM DU CONTROLLEUR**** par le(s) controller(s) nécessaires


// Route::get('/items', [****NOM DU CONTROLLEUR****::class, 'index']);
// Route::get('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'show']);
// Route::post('/items', [****NOM DU CONTROLLEUR****::class, 'store']);
// Route::put('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'update']);
// Route::delete('/items/{id}', [****NOM DU CONTROLLEUR****::class, 'destroy']);