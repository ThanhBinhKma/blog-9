<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/posts', [HomeController::class, 'posts'])->name('posts.index');
Route::get('/author', [HomeController::class, 'author'])->name('author.index');
require __DIR__ . '/auth.php';


Route::get('/admin/{any}', function () {
  return view('admin');
});
