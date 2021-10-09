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

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
