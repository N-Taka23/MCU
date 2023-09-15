<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Consideration</title>
    </head>
    <x-app-layout>
    <body>
        <h1></h1>
        <form action="/considerations" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="consideration[title]" placeholder="タイトル"/>
            </div>
            <div class="comment">
                <h2>Comment</h2>
                <textarea name="consideration[comment]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type='hidden' name='parent_id' value='0'>
            <input type="submit" value="store"/>
        </form>
        <div class="footer" style= "text-decoration:underline; color:blue;">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>