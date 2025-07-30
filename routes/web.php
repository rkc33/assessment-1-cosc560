<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Home page showing list of posts
Route::get('/', [PostController::class, 'index'])->name('home');

// Standard RESTful CRUD routes (index, create, store, show, edit, update, destroy)
Route::resource('posts', PostController::class);

// Optional: Alias for '/all' to show all posts
Route::get('/all', [PostController::class, 'index'])->name('posts.all');
