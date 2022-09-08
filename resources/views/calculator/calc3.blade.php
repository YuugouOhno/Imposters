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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-9/css/reset.css">
　　<link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-9/css/5-9.css">
　　
    <link rel="stylesheet" href="{{asset('/css/calc3.css')}}">
    <script src="{{asset('js/calculator3.js')}}" defer></script>
  </head>
  <body>
    
  <div id="particles-js"></div>
  <div id="wrapper">
    
    <div style="display:flex;">
    <div class="bound-container">
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki_kaonasi.png" />
  <span class="shadow"></span>
</div>

 <div class="bound-container">
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki_kaonasi.png" />
  <span class="shadow"></span>
</div>

<div class="bound-container">
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki.png" />
  <span class="shadow"></span>
</div>

<div class="bound-container">
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki_kaonasi.png" />
  <span class="shadow"></span>
</div>

 <div class="bound-container">
  <p class="DotGothic16" style="font-size:11px; font-weight: bold; color:#b74600;">たまごをクリックすると...</p>
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki_kaonasi.png" />
  <span class="shadow"></span>
</div>
</div>

    <h1 class="DotGothic16" class="DotGothic16">しゃべる電卓</h1>
    <div class="calculator">
      <div class="input" id="input"></div>
      <div class="buttons">
        <div class="operators">
          <div onclick="speech_operator()">+</div>
          <div onclick="speech_operator()">-</div>
          <div onclick="speech_operator()">×</div>
          <div onclick="speech_operator()">÷</div>
        </div>
        
        <div class="leftPanel">
          <div class="numbers">
            <div onclick="speech_num()">7</div>
            <div onclick="speech_num()">8</div>
            <div onclick="speech_num()">9</div>
          </div>
          
          <div class="numbers">
            <div onclick="speech_num()">4</div>
            <div onclick="speech_num()">5</div>
            <div onclick="speech_num()">6</div>
          </div>
          
          <div class="numbers">
            <div onclick="speech_num()">1</div>
            <div onclick="speech_num()">2</div>
            <div onclick="speech_num()">3</div>
          </div>
          
          <div class="numbers">
            <div onclick="speech_num()">0</div>
            <div>.</div>
            <div onclick="speech_operator()" id="clear">C</div>
          </div>
        </div>
        
        <div onclick="speech_operator()" class="equal" id="result">=</div>
      </div>
    </div>
    <div class="comment">
      <p id="neko"></p>
    </div>
    
  <div style="display:flex;">
    <div class="bound-container">
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki.png" />
  <span class="shadow"></span>
</div>

 <div class="bound-container">
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki_kaonasi.png" />
  <span class="shadow"></span>
</div>

<div class="bound-container">
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki_kaonasi.png" />
  <span class="shadow"></span>
</div>

<div class="bound-container">
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki_kaonasi.png" />
  <span class="shadow"></span>
</div>

 <div class="bound-container">
  <img onclick="speech_img()" class="ball" src="https://miso33.com/wp-content/uploads/2021/10/medamayaki_kaonasi.png" />
  <span class="shadow"></span>
</div>
</div>
    
    <button id="goBack" class="Button-style" type="button">戻る</button>
    
        <!--/wrapper--></div>
    
     <script>
    document.getElementById("goBack").addEventListener("click", function () {
    location.replace("/calculator");
    }, false);
    </script>
    
     <script>
  function speech_num(){
    if ('speechSynthesis' in window) {

    const uttr = new SpeechSynthesisUtterance() // 発言を設定
    
    const number = new Array("いち","に","さん","よん","ご","ろく","なな","はち","きゅう","え？");
    uttr.text = number[Math.floor( Math.random()*10)]; // 読み上げる内容を設定

    uttr.lang = "ja-JP" // 言語
    uttr.rate = 1.5  // 速度
    uttr.pitch = 1.3 // 高さ
    uttr.volume = 1 // 音量

    window.speechSynthesis.speak(uttr)  // 発言を再生 (必須)

    }
 }
 
 function speech_operator(){
    if ('speechSynthesis' in window) {

    const uttr = new SpeechSynthesisUtterance() // 発言を設定
    
    const number = new Array("たす","ひく","かける","わる","てん","いこーる","くりあ");
    uttr.text = number[Math.floor( Math.random()*6)]; // 読み上げる内容を設定

    uttr.lang = "ja-JP" // 言語
    uttr.rate = 1.5  // 速度
    uttr.pitch = 0.9 // 高さ
    uttr.volume = 1 // 音量

    window.speechSynthesis.speak(uttr)  // 発言を再生 (必須)

    }
 }
 
 
  function speech_img(){
    if ('speechSynthesis' in window) {

    const uttr = new SpeechSynthesisUtterance() // 発言を設定
    
    const number = new Array("おい！","やぁ！","なんだよ！","ねむい！","おすな！","へい！","ん？","え？");
    uttr.text = number[Math.floor( Math.random()*8)]; // 読み上げる内容を設定

    uttr.lang = "ja-JP" // 言語
    uttr.rate = 1.8  // 速度
    uttr.pitch = 0 // 高さ
    uttr.volume = 1 // 音量

    window.speechSynthesis.speak(uttr)  // 発言を再生 (必須)

    }
 }
  </script>
  
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-9/js/5-9.js"></script>

  </body>
</html>
@endsection