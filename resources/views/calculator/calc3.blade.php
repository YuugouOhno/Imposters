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
    <link rel="stylesheet" href="{{asset('/css/calc3.css')}}">
    <script src="{{asset('js/calculator.js')}}" defer></script>
  </head>
  <body>
      <a onclick="speech()">音声テスト</a>
    <h1>電卓3</h1>
    <div class="calculator">
      <div class="input" id="input"></div>
      <div class="buttons">
        <div class="operators">
          <div>+</div>
          <div>-</div>
          <div>×</div>
          <div>÷</div>
        </div>
        
        <div class="leftPanel">
          <div class="numbers">
            <div>7</div>
            <div>8</div>
            <div>9</div>
          </div>
          
          <div class="numbers">
            <div>4</div>
            <div>5</div>
            <div>6</div>
          </div>
          
          <div class="numbers">
            <div>1</div>
            <div>2</div>
            <div>3</div>
          </div>
          
          <div class="numbers">
            <div>0</div>
            <div>.</div>
            <div id="clear">C</div>
          </div>
        </div>
        
        <div class="equal" id="result">=</div>
      </div>
    </div>
    <div class="comment">
      <p id="neko"></p>
    </div>
    
     <script>
  function speech(){
    if ('speechSynthesis' in window) {
      console.log("クリックされました");

    // 発言を設定 (必須)
    const uttr = new SpeechSynthesisUtterance()
    
    const number = new Array("いち","に","さん","よん","ご","ろく","なな","はち","きゅう","こんにちは");

    // テキストを設定 (必須)
    uttr.text =  number[ Math.floor( Math.random()*11)-1 ];
    console.log(uttr.text);

    // 言語を設定
    uttr.lang = "ja-JP"

    // 速度を設定
    uttr.rate = 1

    // 高さを設定
    uttr.pitch = 1

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