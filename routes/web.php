<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('posts', [
        'posts' => POST::all()
    ]);
});

Route::get('/posts/{post}', function ($id) {
    return view('post', [
        'post' => POST::find($id)
    ]);
});
