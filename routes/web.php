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

Route::get('/Pedido', function () {
    return view('pedido'); //nome da view
});

Route::get('/Cliente', function () {
    return view('cliente'); //nome da view
});

Route::get('/Produto', function () {
    return view('produto'); //nome da view
});

Route::get('/categoria', function () {
    return view('categoria'); //nome da view
});

Route::get('/categoria', 'CategoriaController@index');
