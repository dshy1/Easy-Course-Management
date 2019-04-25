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
Route::get('/portal/cursos/add', ['as' => 'curso.add', 'uses' => 'portalController@CadastrarCurso'])->middleware('auth');


Route::get('/portal/alunos/add', ['as' => 'aluno.add', 'uses' => 'portalController@CadastrarAluno'])->middleware('auth');
Route::get('/portal/alunos/novo', ['as' => 'aluno.registrar', 'uses' => 'Auth\RegisterController@showRegistrationForm'])->middleware('auth');


Route::get('/portal/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


Route::get('/portal/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/portal/login', 'Auth\LoginController@login');


/*
Auth::routes();

|        | GET|HEAD | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST     | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | POST     | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | POST     | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest    |
|        | GET|HEAD | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest    |
|        | POST     | password/reset         | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest    |
|        | GET|HEAD | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest    |
|        | GET|HEAD | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
|        | POST     | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |

*/