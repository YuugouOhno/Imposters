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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/calc_index.css')}}">
    <script src="{{asset('js/calc_index.js')}}" defer></script>
  </head>
  
<body style="background-color:#9ee8ff;">

  <h1 style="text-align:center; font-size: 70px; color:#44617b;" class="DotGothic16">電卓一覧</h1>
　　　
   <div class="calculator" style="display: grid; width:80%; margin: 0 auto; grid-template-columns: 1fr 1fr 1fr;">
      <div style="margin: 15px 15px 30px 15px;  text-align:center;">
     
      <img style="width:600px; heigth:500px; border-radius:30px; border: 5px #dfdfdf solid;" src="{{asset('img/calc1.jpg')}}" />
       <p><a style="text-decoration: none; font-size: xx-large; color:#3399ff;" class="DotGothic16" href='/calculator/1'>ちょうどいい電卓</a></p>
      </div>
      
      <div style="margin: 15px 15px 30px 15px;  text-align:center;">
      <img style="width:600px; heigth:500px; border-radius:30px; border: 5px #dfdfdf solid;" src="{{asset('img/calc2.jpg')}}" />
       <br />
       <p><a style="text-decoration: none; font-size: xx-large; color:#cc0000;" class="DotGothic16" href='/calculator/2'>ランダム電卓</a></p>
      </div>
      
      <div style="margin: 15px 15px 30px 15px; text-align:center;">
            <img style="width:600px; heigth:500px; border-radius:30px; border: 5px #dfdfdf solid;" src="{{asset('img/calc3.jpg')}}" />
            <br />
            <p><a style="text-decoration: none; font-size: xx-large; color:#fcc800;" class="DotGothic16" href='/calculator/3'>しゃべる電卓</a></p>
      </div>
       
      <div style="margin: 15px;  text-align:center;">
             <img style="width:600px; heigth:500px; border-radius:30px; border: 5px #dfdfdf solid;" src="{{asset('img/calc4.jpg')}}" />
            <br />
            <a style="text-decoration: none; font-size: xx-large; color:#9900cc;" class="DotGothic16" href='/calculator/4'>消えゆく電卓</a>
      </div>
      
      <div style="margin: 15px;  text-align:center;">
              <img style="width:600px; heigth:500px; border-radius:30px; border: 5px #dfdfdf solid;" src="{{asset('img/calc5.jpg')}}" />
             <br />
             <a style="text-decoration: none; font-size: xx-large; color:#33cc00;" class="DotGothic16" href='/calculator/5'>暗算電卓</a>
      </div>
     
      <div style="margin: 15px;  text-align:center;">
             <img style="width:600px; heigth:500px; border-radius:30px; border: 5px #dfdfdf solid;" src="{{asset('img/calc6.jpg')}}" />
             <br />
             <a style="text-decoration: none; font-size: xx-large; color:#ff6600;" class="DotGothic16" href='/calculator/6'>Coming Soon...</a>
       </div>
  </div>
  <div style="text-align:center; margin:30px;">
  <button id="goBack" class="Button-style" type="button"><span class="DotGothic16">ホームに戻る</span></button>
  </div>
  <a style="font-size:30px; padding:3px; color:#e0ffff" onclick="speech()">？</a>
  
  <script>
    document.getElementById("goBack").addEventListener("click", function () {
    location.replace("/");
    }, false);
    </script>
  
  <script>
  function speech(){
    if ('speechSynthesis' in window) {
      console.log("オンクリック");

    // 発言を設定 (必須)
    const uttr = new SpeechSynthesisUtterance()

    // テキストを設定 (必須)
    uttr.text = 'こんにちは！'

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