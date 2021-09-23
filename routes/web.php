<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', 'App\Http\Controllers\ProdutosController@index');
Route::get('produtos/create', 'App\Http\Controllers\ProdutosController@create');
Route::post('produtos/store', 'App\Http\Controllers\ProdutosController@store');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
