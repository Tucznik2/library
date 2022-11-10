<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\AuthorController;

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

Route::get('/books', [BookController::class, 'index']);

Route::get('/books/create', [BookController::class, 'create']);

Route::post('/books',  [BookController::class, 'store']);

Route::get('/books/edit/{id}', [BookController::class, 'edit']);

Route::get('/books/destroy/{id}', [BookController::class, 'destroy']);

Route::get('/books/cheapest', [BookController::class, 'cheapest']);

Route::get('/books/longest', [BookController::class, 'longest']);

Route::get('/books/search', [BookController::class, 'search']);

Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/loans', [LoanController::class, 'index']);

Route::get('/loans/create', [LoanController::class, 'create']);

Route::post('/loans', [LoanController::class, 'store']);

Route::get('/authors', [AuthorController::class, 'index']);

Route::get('/authors/create', [AuthorController::class, 'create']);

Route::post('/authors',  [AuthorController::class, 'store']);
