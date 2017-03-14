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

Route::get('/','HomeController@exibe');
Route::get('/gestor', 'GestorController@home');
	Route::get('/cadastra', 'GestorController@cadastra');
	Route::post('/cadastra/novo', 'GestorController@novo');
	Route::get('/lista', 'GestorController@exibe');

Route::get('/aluno', 'AlunoController@home');
