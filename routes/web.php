<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'produtos','where'=>['id'=>'[0-9]+']],function () {

    Route::get('',                 ['as' => 'produtos',            'uses'=>'App\Http\Controllers\ProdutosController@index']);
    Route::get('create',           ['as' => 'produtos.create',     'uses'=> 'App\Http\Controllers\ProdutosController@create']);
    Route::post('store',           ['as' => 'produtos.store',      'uses'=> 'App\Http\Controllers\ProdutosController@store']);
    Route::get('{id}/destroy',     ['as' => 'produtos.destroy',    'uses'=> 'App\Http\Controllers\ProdutosController@destroy']);
    Route::get('{id}/edit',        ['as' => 'produtos.edit',       'uses'=>'App\Http\Controllers\ProdutosController@edit']);
    Route::put('{id}/update',      ['as' => 'produtos.update',     'uses'=> 'App\Http\Controllers\ProdutosController@update']);
});

Route::group(['prefix'=>'skus','where'=>['id'=>'[0-9]+']],function () {

    Route::get('',                 ['as' => 'skus',            'uses'=>'App\Http\Controllers\SkuController@index']);
    Route::get('create',           ['as' => 'skus.create',     'uses'=> 'App\Http\Controllers\SkuController@create']);
    Route::post('store',           ['as' => 'skus.store',      'uses'=> 'App\Http\Controllers\SkuController@store']);
    Route::get('{id}/destroy',     ['as' => 'skus.destroy',    'uses'=> 'App\Http\Controllers\SkuController@destroy']);
    Route::get('{id}/edit',        ['as' => 'skus.edit',       'uses'=>'App\Http\Controllers\SkuController@edit']);
    Route::put('{id}/update',      ['as' => 'skus.update',     'uses'=> 'App\Http\Controllers\SkuController@update']);
});

Route::group(['prefix'=>'categorias','where'=>['id'=>'[0-9]+']],function () {

    Route::get('',                 ['as' => 'categorias',            'uses'=>'App\Http\Controllers\CategoriasController@index']);
    Route::get('create',           ['as' => 'categorias.create',     'uses'=> 'App\Http\Controllers\CategoriasController@create']);
    Route::post('store',           ['as' => 'categorias.store',      'uses'=> 'App\Http\Controllers\CategoriasController@store']);
    Route::get('{id}/destroy',     ['as' => 'categorias.destroy',    'uses'=> 'App\Http\Controllers\CategoriasController@destroy']);
    Route::get('{id}/edit',        ['as' => 'categorias.edit',       'uses'=>'App\Http\Controllers\CategoriasController@edit']);
    Route::put('{id}/update',      ['as' => 'categorias.update',     'uses'=> 'App\Http\Controllers\CategoriasController@update']);
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
