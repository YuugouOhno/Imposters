@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{asset('/css/test.css')}}">
@endsection

@section('content')
        <h1>てきとう翻訳</h1>
        <div>
            <select class='original_language'>
                <option>何語から</option>
            </select>
        </div>
        <div>
            <input type='number'>
        </div>
        <div>
            <button>翻訳</button>
        </div>
        <div>
            <select class='last_language'>
                <option>何語まで</option>
            </select>
        </div>
        <div>
            <textaria></textaria>
        </div>
        
        <div class='test_container'>
            <div class=""><p>xxxx語に訳すと</p></div>
            <div class=""><p>「私は天才だ」</p></div>
        </div>
        <div>
            <p>--------------------------------------この上を頼む----------------------------------------</p>
        </div>
        <translator-component :languages='{{ json_encode($language)}}'></translator-component>
@endsection