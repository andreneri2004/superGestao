<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'PrincipalController@index')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@index')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@index')->name('site.contato');
Route::get('/login', 'LoginController@index')->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', 'ClientesController@index')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedoresController@index')->name('app.fornecedores');
    Route::get('/produtos', 'ProdutosController@index')->name('app.produtos');
});

Route::fallback(function(){
    echo 'Página não encontrada, click <a href="'.route('site.principal').'" />aqui</a> para retornar a home'; 
});



