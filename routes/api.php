<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Created user login and password
// billy@email.com
// billy1234

// to access an API the url has to have /api added
// http://127.0.0.1:8000/api/test
// Route::get('/test', function (Request $request) {
//     return "Authenticated";
// });

Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // http://127.0.0.1:8000/api/v1/authors (make sure user is authenticated so use Insomnia)
    // Route::get('/authors', [AuthorsController::class, 'index']);
    // Route::get('/authors/{author}', [AuthorsController::class, 'show']);

    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BooksController::class);
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
