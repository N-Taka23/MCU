<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Considerations</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div style="background: gray; border: 1px solid silver; padding-left: 10px;"> 
                        <span style="color: black; font-size:24px">
                            {{ $consideration->title }}
                        </span>
                    </div> 
                    <div style="border: 1px solid silver; font-size: 100%; padding: 20px;">
                        <p class='body'>{{ $consideration->comment }}</p>
                    </div>
                    <p class='evaluation'>good : {{$consideration->consideration_evaluation}}</p>
                    
                    <div class="footer" style= "text-decoration:underline; color:blue;">
                        <a href="/considerations">back</a>
                    </div>
                </div>
            </div>

        </body>
    </x-app-layout>
</html>