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
            
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
            
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Yuji+Boku&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('/css/diaries/create.css') }}">
            <script src="{{asset('js/diaries.js')}}" defer></script>
    </head>
    <body>
         <div id="particles-js"></div>
        <h1 class="YujiBoku">一言日記を一日で終わらせよう</h1>
        <img style="width:auto; height:15%;" src="https://1.bp.blogspot.com/-SD2SLEBhKbs/Wm1y1HxnzXI/AAAAAAABJ7w/2wWMAg_JodMxomuStn9QuVMD3OCuUapfwCLcBGAs/s800/snowman_yukidaruma_sandan.png" />
        <h2 class="ZenKurenaido">1日分の日記を埋めると夏休み中の一言日記が完成するよ</h2>
        <form action='{{ route("diary.store") }}' method="POST">
            @csrf
            <div class="title">
                <h2 class="ZenKurenaido" style="color:#a99e93;">日記</h2>
                <!--<input type="text" name="diary[text]" placeholder="内容"/>-->
                <textarea class="ZenKurenaido" style="border-radius: 12px; width:30%;" type="text" name="diary[text]" placeholder="内容"></textarea>
                <p class="text__error" style="color:red">{{ $errors->first('diary.text') }}</p>
            </div>
            <input class="ZenKurenaido" style="border-radius: 8px; padding:7px 12px; font-size:medium;" type="submit" value="保存"/>
        </form>
        <a class="ZenKurenaido" style="color:#dccb18; font-size:x-large; text-decoration:none;" href='{{ route("diaries") }}'>日記を表示する</a>
        @foreach($diaries as $diary)
            <div class='diary'>
                <p class="ZenKurenaido">{{$diary->text}}</p>
            </div>
        @endforeach
    </body>
</html>
@endsection