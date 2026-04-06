<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebController::class, 'index'])->name('main');
// Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/reg', [UserController::class, 'reg'])->name('register');
Route::get('/auth', [UserController::class, 'auth'])->name('auth');
Route::get("/post", [PostController::class, 'index']);
Route::get("/movie", [ContentController::class, 'movie']);


Route::get("/about",[IndexController::class, 'about'])->name('about');
Route::get("/contact", [IndexController::class, 'contact'])->name('contact');
// Route::get("/portfolio", [ContentController::class, 'portfolio'])->name('portfolio');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
