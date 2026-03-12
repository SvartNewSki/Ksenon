<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index(){
        $post = Movie::all();
        return view('auth', compact('post'));
    }
}
