<?php

use Illuminate\Http\Request;

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

Route::middleware('api.cors')->prefix('user')->group(function () {

    Route::post('/register', 'Api\UserController@postRegister');
    Route::post('/login', 'Api\UserController@postLogin');
    Route::post('/getFriend', 'Api\UserController@getFriend');
    Route::post('/addFriend', 'Api\UserController@addFriend');

});
