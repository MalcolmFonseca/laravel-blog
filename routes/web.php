<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blog', function () {
    return view('posts', [
        'posts' => POST::latest()->with('category', 'user')->get(),
        'categories' => Category::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
})->name('blog');

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts->load(['category', 'user']),
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('users/{user:username}', function (User $user) {
    return view('posts', [
        'posts' => $user->posts->load(['category', 'user']),
        'categories' => Category::all()
    ]);
})->name('user');
