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
Route::get('/animes', 'AnimeController@index')
    ->name('listar_animes');
Route::get('/animes/create', 'AnimeController@create')
    ->name('form_create_anime');
Route::post('/animes/create', 'AnimeController@store');
Route::delete('/animes/{id}', 'AnimeController@destroy');