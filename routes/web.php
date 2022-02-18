<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
// Route::get('/view-catalogue', function () {
//     return view('view-catalogue');
// });

Route::get('/add-books', function () {
    return view('add-books');
});
// Route::get('/edit-catalogue', function () {
//     return view('edit-catalogue');
// });

Route::POST('/add', [BookController::class, 'createBook'])->name('createBook');
Route::get('/view-catalogue', [BookController::class, 'readBook'])->name('readBook');
Route::get('/edit-catalogue', [BookController::class, 'editBook'])->name('editBook');
Route::get('/update-book/{id}', [BookController::class, 'updateBook'])->name('updateBook');
Route::patch('/updating/{id}', [BookController::class, 'updatingBook'])->name('updatingBook');
Route::delete('/delete/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');