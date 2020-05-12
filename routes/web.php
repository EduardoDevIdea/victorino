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
Auth::routes(); // Rotas de autenticação (login, register, password/reset)

Auth::routes(['register' => false]); // Removendo rota de registro para novos usuario
                                     // Dessa forma, so acessa a rota register se o user estiver autenticado, caso contrario redireciona para tela de login
                                     // Novos usuarios sao cadastrados através da dashboard por um usuario com permissao
//--------------------------------------------------------------------------------------------

//-----(DASHBOARD) PAINEL ADMINISTRATIVO

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

//--Lista tipo da imagem
Route::get('/image/list/{image}', 'ImageController@list')->name('image.list');

//--Exclui Imagem
Route::get('/image/{image}/delete', 'ImageController@destroy')->name('image.destroy');

//-- Rotas resource
Route::resource('/image', 'ImageController', ['except' => ['destroy']]);

//--------------------------------------------------------------------------------------------

//-----POST
Route::resource('/post', 'PostController', ['except' => ['destroy']]);

//--Excluir Post
Route::get('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

//--------------------------------------------------------------------------------------------

//-----ESPAÇO (Galeria de Fotos)
Route::resource('/photo', 'PhotoController', ['except' => ['destroy']]);

//---Exclui foto
Route::get('/photo/{photo}/delete', 'PhotoController@destroy')->name('photo.destroy');

//--------------------------------------------------------------------------------------------

//-----USER

//--Lista usuários (foi acrescentada antes da rota resource para soluionar problema - nao retornava nada quando colocada embaixo da resource)
Route::get('/user/list', 'UserController@list')->name('user.list');

//--(Rotas resource)
Route::resource('/user', 'UserController', ['except' => ['destroy']]);

//--Exclui user
Route::get('/user/{user}/delete', 'UserController@destroy')->name('user.destroy');

//--LOGOUT
Route::get('/logout', 'UserController@logout')->name('logout');

//--------------------------------------------------------------------------------------------

//-----ROTAS DO SITE
Route::get('/' , 'SiteController@index');

//--------------------------------------------------------------------------------------------

