<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>レバテックチーム開発</h1>
        <h2>投稿一覧ページ</h2>
        <form action='{{ route("diaries") }}' method="GET">
            @csrf
            <div class="days">
                <h2>日数</h2>
                <input type="text" name="num_of_days" placeholder="日数"/>
                <p class="text__error" style="color:red">{{ $errors->first('diary.text') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class='diaries'>
            @foreach($diaries as $diary)
                <div class='post'>
                    <p class='text'>{{ $diary}}</p>
                </div>
            @endforeach
        </div>
        <div>
            <a href='{{ route("diary.create") }}'>日記を投稿する</a>
        </div>
    </body>
</html>