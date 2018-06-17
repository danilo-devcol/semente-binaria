<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categorias', 'CategoriaController@index');
Route::get('/teste', ['middleware' => 'cors', function(){
    return 'ok';
}]);
Route::get('/produtos', 'ProdutoController@index');
Route::get('/custos', 'CustoController@index');
Route::get('/produtoscustos', 'ProdutoCustoController@index');

Route::get('/entradas', 'EntradaController@index');
Route::post('/entradas', 'EntradaController@insere');

Route::get('/saidas', 'SaidaController@index');
Route::post('/saidas', 'SaidaController@insere');

Route::get('/usuarios', 'UsuarioController@index');
