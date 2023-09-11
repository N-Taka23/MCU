<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reviews</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/star_rate.css') }}">
    </head>
    <x-app-layout>
        <body>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div style="background: gray; border: 1px solid silver; padding-left: 10px;"> 
                        <span style="color: black; font-size:24px">
                            {{ $review->movie->name }}
                            <p>
                            <span class="star-rating" data-rate={{$review->movie_evaluation}}></span>
                            {{$review->movie_evaluation}}
                            </p>
                        </span>
                    </div> 
                    <div style="border: 1px solid silver; font-size: 100%; padding: 20px;">
                        <p class='body'>{{ $review->comment }}</p>
                        <p style="text-align:right">by : {{$review->user->name}}</p>
                    </div>
                    <div style="border: 1px solid silver; font-size: 100%; padding: 5px;">
                        <p class='evaluation'>good : {{$review->review_evaluation}}</p>
                    </div>
                    
                    
                    <div class="footer" style= "text-decoration:underline; color:blue;">
                        <a href="/reviews">back</a>
                    </div>
                </div>
            </div>

        </body>
    </x-app-layout>
</html>