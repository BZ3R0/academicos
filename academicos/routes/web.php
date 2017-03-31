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
	Route::get('/lista/edita/{id}', 'GestorController@edita');
	Route::post('/lista/update', 'GestorController@update');
	Route::get('/lista/remove/{id}', 'GestorController@remove');

Route::get('/aluno', 'AlunoController@alunoInformation');
  Route::get('/disciplina', 'AlunoController@alunoDisciplina');
  Route::get('/grade/{id}', 'AlunoController@alunoNota');

Route::get('/responsavel', 'ResponsavelController@home');
  Route::get('/disciplinas', 'ResponsavelController@responsavelDisciplinas');
  Route::get('/notas', 'ResponsavelController@responsavelNotas');
  Route::get('/feedbacks', 'ResponsavelController@responsavelFeedbacks');
  Route::get('/disciplina/{id}', 'ResponsavelController@disciplina');
  Route::get('/nota/{id}', 'ResponsavelController@nota');
  Route::get('/feedback/{id}', 'ResponsavelController@feedback');
