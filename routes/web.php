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

Route::get('/', ['as' => 'site.home', 'uses' => 'portalController@HomeSite']);



Route::get('/portal', ['as' => 'portal.dashboard', 'uses' => 'portalController@portalIndex'])->middleware('auth');

/* ROTA DO CRIAR CURSO (ONLY ADMIN) */
Route::get('/portal/cursos', ['as' => 'curso.lista', 'uses' => 'CursosController@ListaCursos'])->middleware('auth');
Route::get('/portal/cursos/adicionar', ['as' => 'curso.add', 'uses' => 'CursosController@CadastrarCurso'])->middleware('auth');
Route::post('/portal/cursos/adicionar/salvar', ['as' => 'curso.save', 'uses' => 'CursosController@SalvarCurso'])->middleware('auth');
Route::get('/portal/cursos/{id}/editar', ['as' => 'curso.edit', 'uses' => 'CursosController@EditarCursoForm'])->middleware('auth');
Route::post('/portal/cursos/{id}/editar/salvar', ['as' => 'curso.edit.save', 'uses' => 'CursosController@SalvarEditarCurso'])->middleware('auth');
Route::get('/portal/cursos/{id}/deletar', ['as' => 'curso.delete', 'uses' => 'CursosController@DeletarCurso'])->middleware('auth');
Route::get('/portal/cursos/pesquisa', ['as' => 'curso.buscar', 'uses' => 'CursosController@PesquisarCurso'])->middleware('auth');


/* ROTA DO CRIAR TURMA (ONLY ADMIN) */
Route::get('/portal/turmas', ['as' => 'turma.lista', 'uses' => 'CursosController@TurmaLista'])->middleware('auth');
Route::get('/portal/turmas/adicionar', ['as' => 'turma.add', 'uses' => 'CursosController@CadastrarTurmaForm'])->middleware('auth');
Route::post('/portal/turmas/adicionar/salvar', ['as' => 'turma.save', 'uses' => 'CursosController@SalvarCadastrarTurma'])->middleware('auth');
Route::get('/portal/turmas/{id}/editar', ['as' => 'turma.edit', 'uses' => 'CursosController@EditarTurma'])->middleware('auth');
Route::post('/portal/turmas/{id}/editar/salvar', ['as' => 'turma.edit.save', 'uses' => 'CursosController@SalvarEditarTurma'])->middleware('auth');
Route::get('/portal/turmas/{id}/deletar', ['as' => 'turma.delete', 'uses' => 'CursosController@DeletarTruma'])->middleware('auth');
Route::get('/portal/turmas/pesquisa', ['as' => 'turma.buscar', 'uses' => 'CursosController@PesquisarTurma'])->middleware('auth');




/* ROTA DO CADASTRO DE ALUNOS (ONLY ADMIN) */
Route::get('/portal/alunos', ['as' => 'aluno.lista', 'uses' => 'portalController@ListaAlunos'])->middleware('auth');
Route::get('/portal/alunos/adicionar', ['as' => 'aluno.add', 'uses' => 'portalController@CadastrarAlunoForm'])->middleware('auth');
Route::post('/portal/alunos/adicionar/salvar', ['as' => 'aluno.salvar', 'uses' => 'portalController@CadastrarAlunoSalvar'])->middleware('auth');
Route::get('/portal/alunos/pesquisa', ['as' => 'aluno.buscar', 'uses' => 'portalController@PesquisarAluno'])->middleware('auth');
Route::get('/portal/alunos/{id}/editar', ['as' => 'aluno.edit', 'uses' => 'portalController@EditarAlunoForm'])->middleware('auth');
Route::post('/portal/alunos/{id}/editar/salvar', ['as' => 'aluno.edit.save', 'uses' => 'portalController@EditarAlunoSalvar'])->middleware('auth');
Route::get('/portal/alunos/{id}/deletar', ['as' => 'aluno.delete', 'uses' => 'portalController@DeletarAluno'])->middleware('auth');



Route::get('/portal/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/portal/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/portal/login', 'Auth\LoginController@login');


Auth::routes();
