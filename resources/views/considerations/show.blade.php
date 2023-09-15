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
                        <p style="text-align:right">by : {{$consideration->user->name}}</p>
                    </div>
                    <div style="border: 1px solid silver; font-size: 100%; padding: 5px;">
                        <p class='evaluation'>いいね : {{$consideration->consideration_evaluation}} ｜コメント : {{$consideration->child}}</p>
                    </div>
                </div>   
                
                @foreach($replies as $reply)
                    <div class = "max-w-6xl mx-auto sm:px-6 lg:px-8">
                        <div style="border: 1px solid silver; font-size: 80%; padding: 20px;">
                            <p>{{$reply->comment}}</p>
                            <p style="text-align:right">by : {{$consideration->user->name}}</p>
                        </div>
                        <div style="border: 1px solid silver; font-size: 80%; padding: 5px;">
                            <p class='evaluation'>いいね : {{$consideration->consideration_evaluation}} ｜コメント : {{$consideration->child}}</p>
                            
                        </div>
                    </div>
                @endforeach
                
                <div class="lg:px-8">
                    <form method="POST" action="/considerations">
                        @csrf
                        <div class="comment">
                            <h2>コメント</h2>
                            <textarea name="consideration[comment]" placeholder="返信内容"></textarea>
                        </div>
                        <input type="hidden" name="consideration[title]" value='リプライ'>
                        <input type="hidden" name="parent_id" value="{{$consideration->id}}">
                        <button type="submit">返信する</button>
                    </form>
                </div>
            </div>
            
            <div class="footer" style= "text-decoration:underline; color:blue;">
                    <a href="/considerations">戻る</a>
            </div>
                

        </body>
    </x-app-layout>
</html>