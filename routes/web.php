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

use Illuminate\Database\Eloquent\Collection;

Route::get('/', 'CadastroController@index')->name('cadastro.cadastro')->middleware('auth');
Route::get('/cadastro', 'CadastroController@create')->name('cadastro.create')->middleware('auth');
Route::post('/cadastro/salvar', 'CadastroController@store')->name('cadastro.store')->middleware('auth');
Route::get('/show', 'CadastroController@show')->name('cadastro.show')->middleware('auth');
Route::get('/edit/{id}', 'CadastroController@edit')->name('cadastro.edit')->middleware('auth');
Route::put('/update', 'CadastroController@update')->name('cadastro.update')->middleware('auth');
Route::get('/gerenciador/cadastro/destroy/{id}','CadastroController@destroy')->name('cadastro.destroy');



Route::get('/gerenciador', 'CadastroController@menu')->name('cadastro.menu')->middleware('auth');



Auth::routes();


