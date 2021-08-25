<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', 'App\Http\Controllers\AtoresController@index');
