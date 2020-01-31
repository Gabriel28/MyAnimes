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
<<<<<<< HEAD
Route::get('/games', 'GamesController@index')
    ->name('listar_games');
Route::get('/games/criar', 'GamesController@create')
    ->name('form_criar_serie');
Route::post('/games/criar', 'GamesController@store');
Route::delete('/games/{id}', 'GamesController@destroy');
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 4d89d62429711cdd12568f3fdcd1b90729a41781
