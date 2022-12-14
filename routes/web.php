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


/* cria rotas para o site */
Route::get('/', function () {
    return view('index');
});
Route::get('/Contato', function () {
    return view('contato'); //nome da view
});

Route::get('/pedido', function () {
    return view('pedido'); //nome da view
});

Route::get('/cliente', function () {
    return view('cliente'); //nome da view
});

Route::get('/produto', function () {
    return view('produto'); //nome da view
});

Route::get('/categoria', function () {
    return view('categoria'); //nome da view
});

Route::get('/categoria', 'CategoriaController@index');
Route::get('/pedido', 'PedidoController@index');
Route::get('/produto', 'ProdutoController@index');
Route::get('/cliente', 'ClienteController@index');


Route::post('/categoria/inserir','CategoriaController@store');
Route::post('/pedido/inserir','PedidoController@store');
Route::post('/produto/inserir','ProdutoController@store');
Route::post('/cliente/inserir','ClienteController@store');

Route::get('/categoria/{id}','CategoriaController@destroy');
Route::get('/pedido/{id}','PedidoController@destroy');
Route::get('/produto/{id}','ProdutoController@destroy');
Route::get('/cliente/{id}','ClienteController@destroy');

