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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function(){
    return 'Hello World';
});

Route::any('/login/dologin', 'LoginController@dologin');

Route::get('/gamemodify/list', 'GameModifyController@list');

Route::get('/sourceconfig/list', 'SourceConfigController@list');
Route::get('/sourceconfig/get_sources', 'SourceConfigController@get_sources');

Route::get('/game/{$field}', 'SourceConfigController@$field');
Route::prefix('game')->group(function () {
    Route::get('get_list', 'GameController@get_list');
    Route::get('get_field', 'GameController@get_field');
});