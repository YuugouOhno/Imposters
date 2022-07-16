@extends('layouts.common')
@section('content')
<!DOCTYPE html>
<html lang="ja">
　<head>
　　　<meta charset="utf-8">
　　　<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--==============レイアウトを制御する独自のCSSを読み込み===============-->
　　　<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
　　　<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
　　　<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-6/css/6-1-6.css">
　　　<link rel="stylesheet" href="{{ asset('/CSS/homes.css') }}">
　</head>

　　<body>
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg"><path id="wave" d=""/></svg>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85188/jquery.wavify.js"></script>
 　　
 　    　<script>
    　　　 $('#wave').wavify({
 　　　　　　 height: 60,
 　　　　　　 bones: 3,
  　        amplitude: 40,
         　color: '#fff',
 　　　　　　 speed: .25
           });
        </script>     
    
        <h2>夏休みの宿題を計画的に終わらせよう</h2>

      <ul class="slider">
      <li><img src="https://www.jalan.net/news/img/2018/06/20180531_natsuyasumi_17.jpg" alt=""></li>
      <li><img src="https://www.housing-messe.com/yell/wp-content/uploads/2022/06/8cff4770f3bbcd0a6236e0b7f4506e9f-scaled-e1655954276340.jpg" alt=""></li>
      <li><img src="https://www.kokugakuin.ac.jp/assets/uploads/2017/01/img_01-26.jpg" alt=""></li>
      <li><img src="https://www.jalan.net/news/img/2019/07/TP0721h-pool-1-32-01-670x443.jpg" alt=""></li>
      <li><img src="https://blog.studionoah.jp/wp-content/uploads/2018/07/bbq01.jpg" alt=""></li>
      <li><img src="https://thumb.photo-ac.com/9d/9ddc3200fba75a7e8ac1cd90cb4afe11_t.jpeg" alt=""></li>
      <!--/slider--></ul>


         <div class="btn-container">
           <a href="/diary/create" class="btn bgleft  box1"><span>一日日記</span></a>
           <a href="/math" class="btn bgleft box2"><span>電卓</span></a>
           <a href="/translator" class="btn bgleft box3"><span>翻訳</span></a>
         </div>
 
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-6/js/6-1-6.js"></script>
    </body>
</html>
@endsection