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

Route::get('/', 'SearchController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/search/{categoria}', 'SearchController@search') -> name('search');
Route::get('/restaurante/{id}', 'RestauranteController@cardapio');
Route::get('/adicionar-produto/{id}', 'CarrinhoController@adicionar_produto');

Route::get('/carrinho', function () {
	return view('carrinho');
}) -> name('carrinho');

Route::get('/apagar-produto/{id}', 'CarrinhoController@apagar_produto');
