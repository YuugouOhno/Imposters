@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{asset('/css/test.css')}}">
@endsection

@section('content')
        <h2>てきとう翻訳</h2>
        <div class= transition_form>
            <div class="box01">
                <select class='original_language'>
                    <option>何語から</option>
                </select>
            </div>
                <div class="box03">
                        <select class='last_language'>
                            <option>何語まで</option>
                        </select>
                </div>
                    <div class="box02">
                        <div align="center">
                            <div class='arrow'>
                                <input type='number' class="number">
                            </div>
                                <button>翻訳</button>
                        </div>
                    </div>
        </div>
        
        <div class="textaria">
            <div align="center">
                <textaria><input type="text" class="original_text"/></textaria>
            </div>
        </div>
        
        <div class='test_container'>
            <div align="center">
                <div class="search_arrow"><p>xxxx語に訳すと</p></div>
                <div class="result_text"><p>「私は天才だ」</p></div>
            </div>
        </div>
        
        <div>
            <p>--------------------------------------この上を頼む----------------------------------------</p>
        </div>
        <translator-component :languages='{{ json_encode($language)}}'></translator-component>
@endsection