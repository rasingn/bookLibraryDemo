<?php

use App\Http\Controllers\Api\BookApiController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/book', [BookApiController::class,'index'] );
// Route::post('/book', [BookApiController::class,'store'] );
// Route::get('/book/{book}', [BookApiController::class,'show'] );
// Route::put('/book/{book}', [BookApiController::class,'update'] );
// Route::delete('/book/{book}', [BookApiController::class,'destroy'] );
Route::apiResource('book',BookApiController::class);