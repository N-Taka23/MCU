<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Review</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>

        <body>
            <div class='reviews'>
                @foreach ($reviews as $review)
                    <div class='review_post'>
                        <p class='movie'>{{$review->movie->name}}</p>
                        <p class='movie_evaluation'>{{$review->movie_evaluation}}</p>
                        <p class='comment'>{{ $review->comment }}</p>
                        <p class='review_evaluation'>{{$review->review_evaluation}}</p>
                    </div>
                @endforeach
            </div>
        </body>
    </x-app-layout>
    
</html>