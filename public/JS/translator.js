async function taranslator(original_text, original_language, $result_language) {
    const result = await fetch(`https://script.google.com/macros/s/AKfycbw_nTaoeQWgAsiMXkAjciTpcaqWOzFnpAkQlrQ1NKo1UqE11u4raJtBIqiaRZlavTS0/exec?text=${original_text}&source=${original_language}&target=${$result_language}`);
    const data = await result.json();
    await console.log(data);
    return data.text;
}




function buttonClick(){
    const original_text = document.getElementById('original_text');
    if (document.getElementById('translation')=='en_to_ja'){
        const re1 = taranslator(original_text, 'en', 'ja');
        console.log(re1);
    }
}