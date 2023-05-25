<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('welcome');
    }   
    public function about(){
        return view('about');
    }   
    public function movies(){
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }   
}
