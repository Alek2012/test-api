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

Route::get('repos', 'RepoController@index');
Route::get('repos/{repo}', 'RepoController@show');
Route::post('repos', 'RepoController@store');
Route::put('repos/{repo}', 'RepoController@update');
Route::delete('repos/{repo}', 'RepoController@delete');

Route::post('register', 'Auth\RegisterController@register');