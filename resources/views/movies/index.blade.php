@extends('layout.app')

@section('title', 'Movies Page')


<h1>Movies Page</h1>

@section('content')

@endsection


<div class="movies">
    
        @foreach($movies as $movie)
        <div class="movie">

            {{$movie[$movie->title]}}
            
        </div>
        @endforeach
    
   
</div>