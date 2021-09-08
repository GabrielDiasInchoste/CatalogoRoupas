<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', 'App\Http\Controllers\AtoresController@index');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
