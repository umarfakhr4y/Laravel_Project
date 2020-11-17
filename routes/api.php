<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// $url = "App\Http\Controllers";


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/login', 'App\Http\Controllers\UsersController@login')->name('login');
// Route::post('/register', 'App\Http\Controllers\UsersController@register');

Route::group(['prefix' => 'v1'], function () {
    Route::post('/login', 'App\Http\Controllers\UsersController@login')->name('login');
    Route::post('/register', 'App\Http\Controllers\UsersController@register');
    Route::post('/absenmasuk', 'App\Http\Controllers\UsersController@absenMasuk');
    Route::get('/logout', 'App\Http\Controllers\UsersController@logout')->middleware('auth:api');
    // Route::get('/user', 'App\Http\Controllers\UsersController@index')->middleware('auth:api');
    Route::get('/user/{id}', 'App\Http\Controllers\UsersController@details')->middleware('auth:api');
});
