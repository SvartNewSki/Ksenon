<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', [WebController::class, 'index']);

Route::get('/register', function(){
    return view('register');
});

Route::get('/auth', function(){
   return view('movies');
});

Route::get('/movies/movie_page',function (){
    return view('movie_page');
});
