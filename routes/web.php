<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas |Web
|--------------------------------------------------------------------------
|
| 
|Aqui é onde você pode registrar rotas da web para a sua aplicação. 
|Essas rotas são carregadas pelo **RouteServiceProvider** dentro de um grupo que contém o middleware do tipo "web". 
| 
| 
|
*/

Route::get('/fornecedores', 'FornecedorController@create')->name('fornecedores');
Route::post('/fornecedores', 'FornecedorController@store')->name('fornecedores');

Route::get('/produtos', 'ProdutoController@create')->name('produtos');
Route::post('/produtos', 'ProdutoController@store')->name('produtos');


