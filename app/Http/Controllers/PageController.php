<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function movies()
    {
         ddd(Movie::all());
        return view('movies');
    }
}
