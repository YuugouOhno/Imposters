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
    <link rel="stylesheet" href="{{asset('/css/calculator.css')}}">
    <script src="{{asset('js/calculator.js')}}" defer></script>
  </head>
  <body>
      <a>音声テスト</a>
    <h1>電卓3</h1>
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
    
     <script>
  function speech_num(){
    if ('speechSynthesis' in window) {

    const uttr = new SpeechSynthesisUtterance() // 発言を設定
    
    const number = new Array("いち","に","さん","よん","ご","ろく","なな","はち","きゅう","え？");
    uttr.text = number[Math.floor( Math.random()*10)]; // 読み上げる内容を設定

    uttr.lang = "ja-JP" // 言語
    uttr.rate = 1.5  // 速度
    uttr.pitch = 1.2 // 高さ
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
    uttr.pitch = 0.3 // 高さ
    uttr.volume = 1 // 音量

    window.speechSynthesis.speak(uttr)  // 発言を再生 (必須)

    }
 }
  </script>
  </body>
</html>
@endsection