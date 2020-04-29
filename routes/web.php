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

//-----SEGURANÇA
Auth::routes();
//--------------------------------------------------------------------------------------------

//-----PAINEL ADMINISTRATIVO

//Login
Route::get('/admin', function () {
    return view('auth.login');
});

// Painel
Route::get('/home', 'HomeController@index')->name('home');

//--------------------------------------------------------------------------------------------

//---SOBRE
Route::resource('/sobre', 'SobreController', ['except' => ['destroy']]);

//--------------------------------------------------------------------------------------------

//-----ESPECIALIDADES
Route::resource('/especialidade', 'EspecialidadeController', ['except' => ['destroy']]);

// Exlcuir Especialidade
Route::get('/especialidade/{especialidade}/delete', 'EspecialidadeController@destroy')->name('especialidade.destroy');

//--------------------------------------------------------------------------------------------

//-----PROFISSIONAIS
Route::resource('/profissional', 'ProfissionalController', ['except' => ['destroy']]);

// Excluir Profissional
Route::get('/profissional/{profissional}/delete', 'ProfissionalController@destroy')->name('profissional.destroy');

//--------------------------------------------------------------------------------------------

//-----CONTACTS
Route::resource('/contact', 'ContactController');

//--------------------------------------------------------------------------------------------

//-----IMAGES
Route::resource('/image', 'ImageController');

//--- Verifica tipo de Imagem, na view images/index
Route::post('/tipo', 'ImageController@tipo')->name('image.tipo');

//--------------------------------------------------------------------------------------------

//-----POST
Route::resource('/post', 'PostController', ['except' => ['destroy']]);

//--Excluir Post
Route::get('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');

//--------------------------------------------------------------------------------------------

//-----ESPAÇO (Galeria de Fotos)
Route::resource('/photo', 'PhotoController', ['except' => ['destroy']]);

//---Exclui foto
Route::get('/photo/{photo}/delete', 'PhotoController@destroy')->name('photo.destroy');

//--------------------------------------------------------------------------------------------

//-----ROTAS DO SITE
Route::get('/' , 'SiteController@index');

//--------------------------------------------------------------------------------------------

