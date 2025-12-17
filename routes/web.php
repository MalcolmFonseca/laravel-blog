<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blog', [PostController::class, 'index'])->name('blog');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');
