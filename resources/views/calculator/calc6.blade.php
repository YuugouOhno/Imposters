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
    <h1>電卓6</h1>
    <div class="probability">
        <br>
        正答率:
        <input class="input_num" type="number" id="probability" name="probability" placeholder="何点とりたい？" style="text-align:center;"/>
    </div>
    <br>
    
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
  </body>
</html>
@endsection