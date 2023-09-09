<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Consideration</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
            <body>
                <div class="create" style= "text-decoration:underline; color:blue;">
                    <a href="/considerations/create">create</a>
                </div>
                <div class='considerations'>
                    @foreach ($considerations as $consideration)
                        <div class="py-6">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-black-200">
                                        <div class='post'>
                                            <div style="background: gray; border: 1px solid silver; padding-left: 10px;"> 
                                                <span style="color: black; font-size:24px">
                                                    <a href="/considerations/{{ $consideration->id }}">{{ $consideration->title }}</a>
                                                </span>
                                            </div> 
                                            <div style="border: 1px solid silver; font-size: 100%; padding: 20px;">
                                                <p class='body'>{{ $consideration->comment }}</p>
                                            </div>
                                            <p class='evaluation'>good : {{$consideration->consideration_evaluation}}</p>
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