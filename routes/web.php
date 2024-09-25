<?php

use App\Http\Controllers\BookController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/book',[BookController::class], 'create');
// // ->name('book.index')

Route::get('/books', [BookController::class, 'index'])->name('book.index');

Route::get('/books/add', [BookController::class, 'create'])->name('book.create');

Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('book.edit');

Route::post('/books', [BookController::class, 'store'])->name('book.store');

Route::put('/books/{book}', [BookController::class, 'update'])->name('book.update');

Route::get('/books/{book}/show', [BookController::class, 'show'])->name('book.show');

Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('book.destroy');

