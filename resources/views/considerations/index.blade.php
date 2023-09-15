<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Consideration</title>
        <!-- Fonts -->
        <link href="{{ asset('css/post_evaluation_reply.css') }}"rel="stylesheet">
    </head>
    <x-app-layout>
            <body>
                <div class="create lg:px-8" style= "text-decoration:underline; color:blue;">
                    <a href="/considerations/create">考察を投稿する</a>
                </div>
                <div class='considerations'>
                    @foreach ($considerations as $consideration)
                        <div class="py-6">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-black-200">
                                        <div class='consideration_post'>
                                            <div style="background: gray; border: 1px solid silver; padding-left: 10px;"> 
                                                <span style="color: black; font-size:24px">
                                                    <a href="/considerations/{{ $consideration->id }}">{{ $consideration->title }}</a>
                                                </span>
                                            </div> 
                                            <div style="border: 1px solid silver; font-size: 100%; padding: 20px;">
                                                <p class='body'>{{ $consideration->comment }}</p>
                                                <p style="text-align:right">by : {{$consideration->user->name}}</p>
                                            </div>
                                            <div style="border: 1px solid silver; font-size: 100%; padding: 5px;">
                                                <p class = 'evaluation'>いいね : {{$consideration->consideration_evaluation}} ｜コメント : {{$consideration->child}}</span>
                                                <div class='reply_bottun' style= "text-decoration:underline; color:blue;">
                                                    <a href="considerations/{{$consideration->id}}">返信する</a>
                                                </div>
                                                
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