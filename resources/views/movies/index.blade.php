@extends('layout.app')

@section('title', 'Movies Page')


<!-- <h1>Movies Page</h1> -->

@section('content')




<div class="movies">
    
        @foreach($movies as $movie)
        <div class="movie">

            <h2>{{$movie['title']}}</h2>
            <h5><strong>Original Title: </strong> {{$movie['original_title']}}</h5>
            <span> <strong>Country: </strong> {{$movie['nationality']}}</span>
            <span><strong>Date: </strong>{{$movie['date']}}</span>
            <span><strong>Vote: </strong> {{$movie['vote']}}</span>

        </div>
        @endforeach
    
   
</div>
@endsection