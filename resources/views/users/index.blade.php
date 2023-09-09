<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{$user->name}}のプロフィール</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
       <body>
            <h1>{{ $user->name }}のプロフィール</h1>
    
                <div class='favorite character'>
                    <h2>Favorite Character</h2>
                    <p>{{$user->favorite_character}}</p>
                </div>
                <div class='favorite movie'>
                    <h2>Favorite Movie</h2>
                    <p>{{$user->movie_id}}</p>
                </div>
                <div class='comment'>
                    <h2>Comment</h2>
                    <p>{{$user->comment}}</p>
                </div>
                <div class='evaluation list'>
                    <h2>Evaluation List</h2>
                    <p>{{$user->evaluation_list}}</p>
                </div>
                
            
        </body>
    </x-app-layout>
    
</html>