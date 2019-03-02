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

Route::get('/teste/{id}', function($id) {
    echo '<h1>HELLLLLO WORD</h1>';
    echo "<h2>{$id}</h2>";
});

Route::get('/professor', 'ProfessorController@index');
Route::get('/professor/novo', 'ProfessorController@addProfessor');
Route::post('/professor/novo', 'ProfessorController@salveProfessor');

Route::get('/aluno/novo', 'AlunoController@addAluno');
Route::post('/aluno/novo', 'AlunoController@salveAluno');
Route::get('/aluno', 'AlunoController@index');
