@extends('layouts.common')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ちょうどいい電卓</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="{{asset('/css/calculator.css')}}">-->
    <!--<script src="{{asset('js/calculator.js')}}" defer></script>-->
  </head>
  
<body>
  <h1 className="text-align: center;">電卓一覧</h1>
  <a href='/calculator/1'>電卓1</a>
  <a href='/calculator/2'>電卓2</a>
  <a href='/calculator/3'>電卓3</a>
  <a href='/calculator/4'>電卓4</a>
  <a href='/calculator/5'>電卓5</a>
  <a href='/calculator/6'>電卓6</a>
  <a onclick="speech()">音声テスト</a>
  
  <script>
  function speech(){
    if ('speechSynthesis' in window) {
      console.log("オンクリック");

    // 発言を設定 (必須)
    const uttr = new SpeechSynthesisUtterance()

    // テキストを設定 (必須)
    uttr.text = 'いち、に、さん、よん、ご'

    // 言語を設定
    uttr.lang = "ja-JP"

    // 速度を設定
    uttr.rate = 1

    // 高さを設定
    uttr.pitch = 2

    // 音量を設定
    uttr.volume = 1

    // 発言を再生 (必須)
    window.speechSynthesis.speak(uttr)

 }
 }
  </script>
</body>
</html>
@endsection