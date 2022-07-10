<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-6/css/reset.css">
        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-6/css/5-6.css">
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-6/js/5-6.js"></script>
        <link rel="stylesheet" href="{{ asset('/CSS/diaris/index.css') }}">
        <script src="{{asset('JS/diaries.js')}}" defer></script>
    </head>
    <body>
      <div id="particles-js"></div>
        <h1>投稿一覧ページ</h1>
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