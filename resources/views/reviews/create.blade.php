<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Consideration</title>
    </head>
    <body>
        <h1></h1>
        <form action="/reviews" method="POST">
            @csrf
            <div class="movie">
                <h2>Movie Name</h2>
                <select name="review[movie_id]">
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="comment">
                <h2>Comment</h2>
                <textarea name="review[comment]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <div class="spoiler">
              
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>