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

//Route::get('/cadastro', 'CadastroController');

Route::get('vitrine', array('as' => 'cadastro.index', 'uses' => 'ProdutoController@index'));
Route::get('produto/create', array('as' => 'produto.create', 'uses' => 'ProdutoController@create'));
Route::post('produto/store', array('as' => 'produto.store', 'uses' => 'ProdutoController@store'));
Route::get('produto/{id}', array('as' => 'produto.show', 'uses' => 'ProdutoController@show') );

Route::get('usuario/create', array('as' => 'usuario.create', 'uses' => 'UsuarioController@create'));
Route::get('usuario/store', array('as' => 'usuario.store', 'uses' => 'UsuarioController@store'));