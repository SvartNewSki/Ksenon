<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
class ContentController extends Controller
{
    public function index(){
        
    }

    public function movie(){
        $movie = Movie::all();
        return view('film', compact('movie'));
    }
}
