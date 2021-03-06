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


Route::resource('images', 'ImagesController');
Route::resource('crud', 'CrudController', ['except' => 'show', 'create', 'edit']);
//Route::get('/crud', 'CrudController@delete')->name('delete');
Route::get('/dashboard', 'CrudController@dashboard')->name('dashboard');
Route::get('/codigo-postal', 'CrudController@codigoPostal')->name('codigo-postal');
Route::post('/codigo-postal/buscar', 'CrudController@buscaCodigoPostal')->name('busca-codigo-postal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
