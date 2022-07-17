@extends('layouts.common')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>翻訳するよ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{asset('JS/translator.js')}}" defer></script>
        <link rel="stylesheet" href="{{ asset('/CSS/translator.css') }}">
    </head>
    <body>
            <div class="mein">
                <h1>うっかりほんやく</h1>
                <p>うっかり具合とほんやくしたい言語を選んでね</p>
            </div>
            
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="squiggly-0">
        <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="0"/>
        <feDisplacementMap id="displacement" in="SourceGraphic" in2="noise" scale="6" />
    </filter>
    
        <filter id="squiggly-1">
            <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="1"/>
            <feDisplacementMap in="SourceGraphic" in2="noise" scale="8" />
        </filter>
    
            <filter id="squiggly-2">
                <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="2"/>
                <feDisplacementMap in="SourceGraphic" in2="noise" scale="6" />
            </filter>
    
                <filter id="squiggly-3">
                    <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="3"/>
                    <feDisplacementMap in="SourceGraphic" in2="noise" scale="8" />
                </filter>
    
                    <filter id="squiggly-4">
                        <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="4"/>
                        <feDisplacementMap in="SourceGraphic" in2="noise" scale="6" />
                    </filter>
  </defs> 
</svg>
            <div class='settings'>
                <form method="GET">
                    @csrf
                    <select class='setting' id='error_level'>
                        <option value=0>0うっかり</option>
                        <option value=1>1うっかり</option>
                        <option value=2>2うっかり</option>
                        <option value=3>3うっかり</option>
                    </select>
                    <select class='setting' id='translation'>
                        <option value="ja_to_en">日本語から英語</option>
                        <option value="en_to_ja">英語から日本語</option>
                    </select>
                </form>
            </div>
                <div class="input">
                    <div class='style_01'>
                        <input class='original_text' type="text" id="original_text" placeholder="翻訳したい文章を入力してください"/>
                    </div>
                        <div class='style_02'>
                            <button type='button' class='text' onclick="buttonClick()">保存</button>
                        </div>
                            <div class='style_03'>
                                <p id='result' class='result_01'>翻訳</p>
                                <p id='result2' class='result_02'>翻訳</p>
                            </div>
                </div>
            <div class='img'>
                <img src='https://pics.prcm.jp/satomi0317/38190093/jpeg/38190093_480x345.jpeg'
            </div>
        </div>
    </body>
</html>
@endsection