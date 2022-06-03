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

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@salvar')->name('site.contato');

Route::get('/login/{erro?}', 'App\Http\Controllers\LoginController@index')->name('site.login');
Route::post('/login', 'App\Http\Controllers\LoginController@autenticar')->name('site.login');

Route::middleware('autenticacao')->prefix('/app')->group(function() {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('app.home');
    Route::get('/sair', 'App\Http\Controllers\LoginController@sair')->name('app.sair');

    Route::get('/fornecedor', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedor');
    Route::post('/fornecedor/listar', 'App\Http\Controllers\FornecedorController@listar')->name('app.fornecedor.listar');
    Route::get('/fornecedor/listar', 'App\Http\Controllers\FornecedorController@listar')->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', 'App\Http\Controllers\FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', 'App\Http\Controllers\FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/editar/{id}/{msg?}', 'App\Http\Controllers\FornecedorController@editar')->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}', 'App\Http\Controllers\FornecedorController@excluir')->name('app.fornecedor.excluir');


    Route::resource('produto', 'App\Http\Controllers\ProdutoController');
    Route::resource('produto-detalhe', 'App\Http\Controllers\ProdutoDetalheController');

    Route::resource('cliente', 'App\Http\Controllers\ClienteController');
    Route::resource('pedido', 'App\Http\Controllers\PedidoController');
    Route::resource('pedido-produto', 'App\Http\Controllers\PedidoProdutoController');

});
