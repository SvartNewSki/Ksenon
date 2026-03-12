<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', [WebController::class, 'index'])->name('main');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/auth', [UserController::class, 'auth'])->name('auth');
Route::get("/post", [PostController::class, 'index']);
Route::get("/movie", [ContentController::class, 'movie']);

