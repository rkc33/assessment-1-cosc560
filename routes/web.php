<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\PostController;

Route::get('/all', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::post('/save', [PostController::class, 'store']);
Route::get('/delete/{id}', [PostController::class, 'destroy']);
