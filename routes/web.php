<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/login', 'pages.login.login')->name('login.login');
Route::post('/auth', 'UserController@auth')->name('login.auth');
Route::get('/login/create', 'UserController@create')->name('login.create');
Route::post('/login/register', 'UserController@register')->name('login.register');
Route::get('/logout', 'UserController@logout')->name('login.logout');
Route::view('/contato/edit', 'pages.login.edit')->name('login.edit');
Route::post('/contato/update/{id}', 'UserController@update')->name('login.update');

Route::get('/', 'HomeController@index')->name('index.home');

Route::get('/jogos', 'JogoController@index')->name('index.jogos');
Route::get('/jogos/create', 'JogoController@create')->name('create.jogos')->middleware('auth');
Route::post('/jogos/store', 'JogoController@store')->name('store.jogos')->middleware('auth');

Route::view('/contato', 'pages.contato.index')->name('index.contato');
Route::post('/contato', 'ContatoController@store')->name('store.contato');

Route::get('/fotos', 'FotoController@create')->name('create.foto');
Route::get('/fotos/show/{id}', 'FotoController@show')->name('show.foto');
Route::post('/fotos/store', 'FotoController@store')->name('store.foto');
Route::post('/fotos/update/{id}', 'FotoController@update')->name('update.foto');