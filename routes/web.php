<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FriendsController;

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
    return view('dashboard');
});

Route::get('/home', function() {
    return view('pages/home');
})->name('homepage');


Route::get('/blog', [PostsController::class, 'index'])->name('blog');
Route::get('/blog/post/{post}', [PostsController::class, 'show'])->name('blogpost');

// Will need to limit these to admin view only. 
Route::post('/blog', [PostsController::class, 'store']);
Route::get('/blog/new', [PostsController::class, 'create']);
Route::get('/blog/post/{post}/edit', [PostsController::class, 'edit'])->name('blogpost.edit');
Route::patch('/blog/post/{post}', [PostsController::class, 'update'])->name('blogpost.update');


Route::get('/myfriends', [FriendsController::class, 'index'])->name('myfriends');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
