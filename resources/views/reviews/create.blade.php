<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Reviews</title>
    </head>
    <x-app-layout>
    <body>
        <h1></h1>
        <form action="/reviews" method="POST">
            @csrf
            <div class="movie">
                <h2>映画、ドラマ名</h2>
                <select name="review[movie_id]">
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="Evaluation">
                <h2>評価</h2>
                <select name="review[movie_evaluation]">
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                </select>
            </div>
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="review[comment]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <div class="spoiler">
                <h2>ネタバレ</h2>
                <select name="review[spoiler]">
                    <option value=0>なし</option>
                    <option value=1>あり</option>
                </select>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer" style= "text-decoration:underline; color:blue;">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>