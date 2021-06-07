<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

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

Route::get('/login', [UserController::class, 'index'] );
Route::middleware('auth:api')->any('/a', [UserController::class, 'index'] );
Route::middleware('auth:api')->any('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->any('/user/index', [UserController::class, 'index']);
// Route::any('/user/index1', [UserController::class, 'index1']);
// Route::any('/user/test/{id}', [UserController::class, 'test']);


// Route::get('/user/index', [UserController::class, 'index']);



