<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');
Route::post('/posts/{post:slug}/comments', [PostCommentsController::class, 'store'])->middleware('auth');
Route::delete('/posts/{post:slug}/comments/{comment}', [PostCommentsController::class, 'destroy'])->middleware(['currentuser' . ':Comment', 'auth']);

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('/newsletter', NewsletterController::class);

Route::middleware(['currentuser', 'auth'])->group(function () {
    Route::get('/profile/{user}', [UserController::class, 'show']);
    Route::get('/profile/edit/{user}', [UserController::class, 'edit']);
    Route::patch('/profile/edit/{user}', [UserController::class, 'update']);
    Route::get('/profile/{user}/password', [UserController::class, 'showpassword']);
    Route::delete('/profile/{user}', [UserController::class, 'destroy']);
});

Route::middleware('can:admin')->group(function () {
    Route::get('admin/posts', [AdminPostController::class, 'index']);
    Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    Route::post('admin/posts', [AdminPostController::class, 'store']);
    Route::get('admin/posts/{post}', [AdminPostController::class, 'edit']);
    Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
    Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);

    Route::get('admin/projects', [AdminProjectController::class, 'index']);
    Route::get('admin/projects/create', [AdminProjectController::class, 'create']);
    Route::post('admin/projects', [AdminProjectController::class, 'store']);
    Route::get('admin/projects/{project}', [AdminProjectController::class, 'edit']);
    Route::patch('admin/projects/{project}', [AdminProjectController::class, 'update']);
    Route::delete('admin/projects/{project}', [AdminProjectController::class, 'destroy']);

    Route::get('admin/categories', [AdminCategoryController::class, 'index']);
    Route::get('admin/categories/create', [AdminCategoryController::class, 'create']);
    Route::post('admin/categories', [AdminCategoryController::class, 'store']);
    Route::get('admin/categories/{category}', [AdminCategoryController::class, 'edit']);
    Route::patch('admin/categories/{category}', [AdminCategoryController::class, 'update']);
    Route::delete('admin/categories/{category}', [AdminCategoryController::class, 'destroy']);
});
