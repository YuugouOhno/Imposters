@extends('layouts.common')
@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>一言日記</title>
        
             <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-6/css/reset.css">
            <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-6/css/5-6.css">
            <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
            <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-6/js/5-6.js"></script>
            <link rel="stylesheet" href="{{ asset('/css/diaries/create.css') }}">
            <script src="{{asset('js/diaries.js')}}" defer></script>
    </head>
    <body>
         <div id="particles-js"></div>
        <h1>一言日記を1日で終わらせよう</h1>
        <p>1日分の日記を埋めると夏休み中の一言日記が完成するよ</p>
        <form action='{{ route("diary.store") }}' method="POST">
            @csrf
            <div class="title">
                <h2>日記</h2>
                <!--<input type="text" name="diary[text]" placeholder="内容"/>-->
                <textarea  type="text" name="diary[text]" placeholder="内容"></textarea>
                <p class="text__error" style="color:red">{{ $errors->first('diary.text') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <a href='{{ route("diaries") }}'>日記を表示する</a>
        @foreach($diaries as $diary)
            <div class='diary'>
                <p>{{$diary->text}}</p>
            </div>
        @endforeach
    </body>
</html>
@endsection