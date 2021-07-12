<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel-model-controler')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            
        </style>
    </head>
    <body>
        <header id="site_header">
            <nav>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('movies') }}">Movies</a></li>
            </nav>
        </header>
        <main id="site_main">
            @yield('content')
           
        </main>
        <footer id="site_footer"></footer>
    </body>
</html>
