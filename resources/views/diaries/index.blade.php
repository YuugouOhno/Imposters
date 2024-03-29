@extends('layouts.common')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>一言日記</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-6/css/reset.css">
        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-6/css/5-6.css">
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-6/js/5-6.js"></script>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/diaries/index.css') }}">
        <script src="{{asset('js/diaries.js')}}" defer></script>
    </head>
    <body>
      <div id="particles-js"></div>
      <h1 class="ZenKurenaido">一言日記を1日で終わらせよう</h1>
        <h2 class="ZenKurenaido">投稿一覧</h2>

        <form action='{{ route("diaries") }}' method="GET">
            @csrf
            <div class="days">
                <input style="border-radius: 5px; width:45px; height:22px;" type="text" name="num_of_days" placeholder="日数"/>
                <input class="ZenKurenaido" type="submit" value="決定"/>
                <p class="text__error" style="color:red">{{ $errors->first('diary.text') }}</p>
                <p class="ZenKurenaido" style="font-size:x-large; color:#d14040;">日記を書かなければいけない日数を入力するとランダムにその日の日記が表示されます</p>
            </div>
        </form>
        <div class='diaries'>
            @foreach($diaries as $diary)
                <div class='diary'>
                    <p class="ZenKurenaido">{{$loop->iteration}}日目</p>
                    <p class="ZenKurenaido"='text'>{{ $diary }}</p>
                </div>
            @endforeach
        </div>
            <div>
                <a class="ZenKurenaido" style="color:#dccb18; font-size:x-large; text-decoration:none;" href='{{ route("diary.create") }}'>日記を投稿する</a>
            </div>
    </body>
</html>
@endsection