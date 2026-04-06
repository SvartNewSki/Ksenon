<?php
namespace App\Http\Controllers;

class UserController extends Controller{
    public function index(){

    }

    public function auth(){
        return view('auth');
    }

    public function reg(){
        return view ('reg');
    }
}