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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('movies', 'MovieController@index');
Route::get('movies/{movie}', 'MovieController@show');
Route::post('movies', 'MovieController@store');
Route::put('movies/{movie}', 'MovieController@update');
Route::delete('movies/{movie}', 'MovieController@delete');

Route::get('genders', 'GenderController@index');
Route::get('genders/{gender}', 'GenderController@show');
Route::post('genders', 'GenderleController@store');
Route::put('genders/{gender}', 'GenderController@update');
Route::delete('genders/{gender}', 'GenderController@delete');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@delete');
