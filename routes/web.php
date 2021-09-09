<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', 'App\Http\Controllers\AtoresController@index');
Route::get('atores/create', 'App\Http\Controllers\AtoresController@create');
Route::post('atores/store', 'App\Http\Controllers\AtoresController@store');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
