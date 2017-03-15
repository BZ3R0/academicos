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

Route::get('/gestor', 'GestorController@home');
Route::get('/aluno', 'AlunoController@home');
  Route::get('/aluno', 'AlunoController@alunoInformation');
  Route::get('/disciplina', 'AlunoController@alunoDisciplina');
  Route::get('/grade', 'AlunoController@alunoNota');
Route::get('/','HomeController@exibe');
