<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\model\Wt;
use App\model\Wts;
use App\Http\Controllers\UserController;

Route::any('/', function () {
    // return view('welcome');
    return 'hello laravel';
});
Route::get('login', 'UserController@index')->name('index');
// Route::any('/wt', [Wt::class, 'index']);
// Route::any('/wts', [Wts::class, 'index']);


// Route::any('/user/index', [UserController::class, 'index']);


// Route::any('/user/test/{id}', [UserController::class, 'test']);
// Route::any('/user/index1', [UserController::class, 'index1']);


