<?php

use App\Models\Books;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/knjige', [App\Http\Controllers\BooksController::class, 'index'])->name('kniga.lista');
Route::get('/avtori', [App\Http\Controllers\AuthorsController::class, 'index'])->name('avtor.lista');
Route::get('/knjige/{bookId}', [App\Http\Controllers\BooksController::class, 'show'])->name('kniga.prikazi');
Route::get('/avtori/{authorId}', [App\Http\Controllers\AuthorsController::class, 'show'])->name('avtor.prikazi');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);

Route::get('/', function(){return view('welcome');});
