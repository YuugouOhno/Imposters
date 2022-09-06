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
    <link rel="stylesheet" href="{{asset('/css/calc_index.css')}}">
    <script src="{{asset('js/calc_index.js')}}" defer></script>
  </head>
  
<body>
  <h1 style="text-align:center;">電卓一覧</h1>
  
  <div id="sakura_block">
    <div class="sakura_parts_box">
        <img src="img/snowflake_565.png" alt="" class="parts_01">
        <img src="img/snowflake_565.png" alt="" class="parts_02">
        <img src="img/snowflake_565.png" alt="" class="parts_03">
        <img src="img/snowflake_565.png" alt="" class="parts_04">
        <img src="img/snowflake_565.png" alt="" class="parts_05">
        <img src="img/snowflake_565.png" alt="" class="parts_06">
        <img src="img/snowflake_565.png" alt="" class="parts_07">
        <img src="img/snowflake_565.png" alt="" class="parts_08">
        <img src="img/snowflake_565.png" alt="" class="parts_09">
        <img src="img/snowflake_565.png" alt="" class="parts_10">
    </div>
</div>
　　　
   <div class="calculator" style="display: grid; width:80%; margin: 0 auto; grid-template-columns: 1fr 1fr 1fr;">
      <div style="margin: 15px 15px 30px 15px;  text-align:center;">
      <img src="https://2.bp.blogspot.com/--BYLyPduBgM/WaPvldUDt9I/AAAAAAABGNw/XTkwA_fBEC86bpvy2z7-1jZ9-dEc_6_jQCLcBGAs/s400/dentaku_syoumen_small.png" />
      <br />
       <a style="text-decoration: none;" href='/calculator/1'>ちょうどいい電卓</a>
      </div>
      
      <div style="margin: 15px 15px 30px 15px;  text-align:center;">
      <img src="https://2.bp.blogspot.com/--BYLyPduBgM/WaPvldUDt9I/AAAAAAABGNw/XTkwA_fBEC86bpvy2z7-1jZ9-dEc_6_jQCLcBGAs/s400/dentaku_syoumen_small.png" />
       <br />
       <a style="text-decoration: none;" href='/calculator/2'>ランダム電卓</a>
      </div>
      
      <div style="margin: 15px 15px 30px 15px; text-align:center;">
           <img src="https://2.bp.blogspot.com/--BYLyPduBgM/WaPvldUDt9I/AAAAAAABGNw/XTkwA_fBEC86bpvy2z7-1jZ9-dEc_6_jQCLcBGAs/s400/dentaku_syoumen_small.png" />
            <br />
            <a style="text-decoration: none;" href='/calculator/3'>電卓3</a>
      </div>
       
      <div style="margin: 15px;  text-align:center;">
            <img src="https://2.bp.blogspot.com/--BYLyPduBgM/WaPvldUDt9I/AAAAAAABGNw/XTkwA_fBEC86bpvy2z7-1jZ9-dEc_6_jQCLcBGAs/s400/dentaku_syoumen_small.png" />
            <br />
            <a style="text-decoration: none;" href='/calculator/4'>消えゆく電卓</a>
      </div>
      
      <div style="margin: 15px;  text-align:center;">
             <img src="https://2.bp.blogspot.com/--BYLyPduBgM/WaPvldUDt9I/AAAAAAABGNw/XTkwA_fBEC86bpvy2z7-1jZ9-dEc_6_jQCLcBGAs/s400/dentaku_syoumen_small.png" />
             <br />
             <a style="text-decoration: none;" href='/calculator/5'>暗算電卓</a>
      </div>
     
      <div style="margin: 15px;  text-align:center;">
             <img src="https://2.bp.blogspot.com/--BYLyPduBgM/WaPvldUDt9I/AAAAAAABGNw/XTkwA_fBEC86bpvy2z7-1jZ9-dEc_6_jQCLcBGAs/s400/dentaku_syoumen_small.png" />
             <br />
             <a style="text-decoration: none;" href='/calculator/6'>電卓6</a>
       </div>
   </div>
   
  <a onclick="speech()">音声テスト</a>
  
   <a href="/">ホームに戻る</a>
  
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