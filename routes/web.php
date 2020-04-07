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

//Acesso ao site
Route::get('/', function () {
    return view('welcome');
});

//Acesso ao painel administrativo atraves do /admin
Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rotas Sobre
Route::resource('/sobre', 'SobreController', ['except' => ['destroy']]);

//--------------------------------------------------------------------------------------------
