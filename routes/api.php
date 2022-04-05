<?php

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

Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the jungle !']);
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/me', 'API\AuthController@me');
    Route::post('/register', 'API\AuthController@register');
    Route::post('/login', 'API\AuthController@login');
    Route::post('/logout', 'API\AuthController@logout');
    Route::post('/refresh', 'API\AuthController@refresh');
});