<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', 'App\Http\Controllers\BookController@index');

Route::get('/books/create', 'App\Http\Controllers\BookController@create');

Route::get('/books/edit/{id}', 'App\Http\Controllers\BookController@edit');

Route::get('/books/destroy/{id}', 'App\Http\Controllers\BookController@destroy');

Route::get('/books/{id}', 'App\Http\Controllers\BookController@show');


