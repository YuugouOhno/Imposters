<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>翻訳するよ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form method="GET">
            @csrf
            <h>まちがいレベル</h></h2>
            <select id='error_level'>
                <option value=0>レベル0</option>
                <option value=1>レベル1</option>
                <option value=2>レベル2</option>
                <option value=3>レベル3</option>
            </select>
            <select id='translation'>
                <option value="ja_to_en">日本語から英語</option>
                <option value="en_to_ja">英語から日本語</option>
            </select>
            <h2>本文</h2>
            <input type="text" id="original_text" placeholder="翻訳したい文章を入力してください"/>
            <button type='button' class='btn' onclick="buttonClick()">保存</button>
        </form>
        <div class='translator'>
            
        </div>
    </table>
    <script>
        async function taranslator(original_text, original_language, result_language) {
            const result = await fetch(`https://script.google.com/macros/s/AKfycbw_nTaoeQWgAsiMXkAjciTpcaqWOzFnpAkQlrQ1NKo1UqE11u4raJtBIqiaRZlavTS0/exec?text=${original_text}&source=${original_language}&target=${result_language}`);
            const data = await result.json();
            await console.log(data);
            return data.text;
        }
        async function buttonClick(){
            const original_text = document.getElementById('original_text').value;
            const error_level = document.getElementById('error_level').value;
            
            if (document.getElementById('translation').value=='ja_to_en'){
                var original_language = 'ja';
                var result_language = 'en';
            }else if (document.getElementById('translation').value=='en_to_ja'){
                var original_language = 'en';
                var result_language = 'ja';
            }
            
            if (document.getElementById('error_level').value == 1){
                var middle_language1 = result_language;
                var middle_language2 = original_language;
            }else if (document.getElementById('error_level').value == 2){
                var middle_language1 = result_language;
                var middle_language2 = 'ko';
            }else if (document.getElementById('error_level').value == 3){
                var middle_language1 = 'ko';
                var middle_language2 = 'tt';
            }
            
            if (document.getElementById('error_level').value == 0){
                var result = await taranslator(original_text, original_language, result_language);
                console.log(result);
            }else if (document.getElementById('error_level').value >= 1){
                var result1 = await taranslator(original_text, original_language, middle_language1);
                console.log(result1);
                var result2 = await taranslator(result1, middle_language1, middle_language2);
                console.log(result2);
                var result3 = await taranslator(result2, middle_language2, result_language);
                console.log(result3);
            }
        }
    </script>
</html>