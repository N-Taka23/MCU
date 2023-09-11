<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Review</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/star_rate.css') }}">
    </head>
    <x-app-layout>
        <body>
            <div class="create" style= "text-decoration:underline; color:blue;">
                <a href="/reviews/create">create</a>
            </div>
            <div class='reviews'>
                @foreach ($reviews as $review)
                    <div class="py-6">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-black-200">
                                    <div class='review_post'>
                                        <div style="background: gray; border: 1px solid silver; padding-left: 10px;"> 
                                            <span style="color: black; font-size:24px">
                                                
                                                <a href="/reviews/{{ $review->id }}">{{ $review->movie->name }}</a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </body>
            
    </x-app-layout>
    
</html>