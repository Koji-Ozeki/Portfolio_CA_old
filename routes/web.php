<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('posts.index');
// });


Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/documents', [PostController::class, 'documents'])->name('posts.documents');
Route::get('/posts/contact', [PostController::class, 'contact'])->name('posts.contact');