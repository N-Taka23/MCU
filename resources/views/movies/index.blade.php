<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{$movie->name}}の詳細ページ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
        <h1>{{ $movie->name }}</h1>
            <div class='content'>
                <h2>Comment</h2>
                <p>{{$movie->content}}</p>
            </div>
            <div class='evaluation'>
                <h2>Evaluation</h2>
                <p>{{$movie->evaluation}}</p>
            </div>
            
        
    </body>
    </x-app-layout>
    
</html>