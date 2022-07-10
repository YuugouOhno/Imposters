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
    
    if (error_level== 0){
        var middle_language1 = result_language;
    }else if (error_level== 1){
        var middle_language1 = result_language;
        var middle_language2 = original_language;
    }else if (error_level == 2){
        var middle_language1 = result_language;
        var middle_language2 = 'ko';
    }else if (error_level == 3){
        var middle_language1 = 'ko';
        var middle_language2 = 'tt';
    }
    
    if (error_level >= 0){
        var result = await taranslator(original_text, original_language, middle_language1);
        console.log(result);
    }
    if (error_level >= 1){
        result = await taranslator(result, middle_language1, middle_language2);
        console.log(result);
        result = await taranslator(result, middle_language2, result_language);
        console.log(result);
    }
    
    document.getElementById('result').innerText =result;
}