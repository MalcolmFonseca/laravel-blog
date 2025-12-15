<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blog', [PostController::class, 'index'])->name('blog');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');


Route::get('users/{user:username}', function (User $user) {
    return view('posts', [
        'posts' => $user->posts->load(['category', 'user'])
    ]);
})->name('user');
