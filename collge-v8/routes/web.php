<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
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
    // return view('welcome');
    return view('auth.login');
});


// Route::get('/books', function () {
//     return view('Books.books');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// profile->user
Route::get('/users/{id}', [ProfileController::class, 'index'])->name('profile');
Route::post('/updata_user/{id}', [ProfileController::class, 'updata_user'])->name('updata_user');

// Tables
Route::get('/tables_admin', [HomeController::class, 'tables_admin'])->name('tables_admin');
Route::get('/tables_students', [HomeController::class, 'tables_students'])->name('tables_students');

// go page view lecture Exm محضرات
Route::get('/lecture', [FilesController::class, 'index'])->name('lecture')->middleware('auth');
Route::post('/uploade_file', [FilesController::class, 'uploade_file'])->name('uploade_file');
// Edit file Books
Route::get('/edit_files/{id}', [FilesController::class, 'edit_files'])->name('edit_files');
// Route::post('/update_files/{id}', [FilesController::class, 'update_files'])->name('update_files');
Route::post('update_file/{id}', [FilesController::class, 'update_file'])->name('update_file');
// Delete lecture
Route::get('delete_lecture/{id}', [FilesController::class, 'delete_lecture'])->name('delete_lecture');


// books student
Route::get('/books_student', [BooksController::class, 'index'])->name('books_student')->middleware('auth');
Route::post('/uploade_books', [BooksController::class, 'uploade_books'])->name('uploade_books');
// Edit file Books
Route::get('/edit_books/{id}', [BooksController::class, 'edit_books'])->name('edit_books');
Route::post('/update_books/{id}', [BooksController::class, 'update_books'])->name('update_books');
// Delete Books
Route::get('delete_Books/{id}', [BooksController::class, 'delete_Books'])->name('delete_Books');

// create posts
Route::post('/create_posts', [PostsController::class, 'create'])->name('create_posts');



Route::get('/404', function () {
    return view('layouts.404');
});
