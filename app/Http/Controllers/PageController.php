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
        $movies = (Movie::all());

        foreach($movies as $movie){
            echo $movie->title . '<br>';
        }


        return view('movies');
    }
}
