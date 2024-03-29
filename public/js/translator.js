async function taranslator(original_text, original_language, result_language) { //翻訳用の関数の設定
    const result = await fetch(`https://script.google.com/macros/s/AKfycbw_nTaoeQWgAsiMXkAjciTpcaqWOzFnpAkQlrQ1NKo1UqE11u4raJtBIqiaRZlavTS0/exec?text=${original_text}&source=${original_language}&target=${result_language}`);
    const data = await result.json();
    // await console.log(data);
    return data.text;
}
async function buttonClick(){　// 原文とうっかりレベルを取得
    const original_text = document.getElementById('original_text').value;
    const error_level = document.getElementById('error_level').value;
    
    if (document.getElementById('translation').value=='ja_to_en'){ // 「日本語から英語」か「英語から日本語」の選択
        var original_language = 'ja';
        var result_language = 'en';
    }else if (document.getElementById('translation').value=='en_to_ja'){
        var original_language = 'en';
        var result_language = 'ja';
    }
    
    if (error_level== 1){
        var middle_language1 = result_language;
        var middle_language2 = original_language;
    }else if (error_level == 2){
        var middle_language1 = result_language;
        var middle_language2 = 'ko';
    }else if (error_level == 3){
        var middle_language1 = 'ko';
        var middle_language2 = 'tt';
    }
    
    var result = await taranslator(original_text, original_language, middle_language1);
    console.log(result);
    result = await taranslator(result, middle_language1, middle_language2);
    console.log(result);
    result = await taranslator(result, middle_language2, result_language);
    console.log(result);
    
    var result_correct = await taranslator(original_text, original_language, result_language);
    console.log(result_correct);
    
    document.getElementById('result').innerText =result_correct;
    document.getElementById('result2').innerText =result;
}