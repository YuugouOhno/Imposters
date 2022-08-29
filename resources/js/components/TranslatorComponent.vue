<template>
    <div>
        <h1>てきとう翻訳</h1>
        <input type='number' v-model='translate_level'>
        <div>
            <select v-model="original_language">
                <option value="ja">日本語</option>
                <option value="en">英語</option>
            </select>
	    </div>
        <div>
            <input @input="change" type='text' v-model="original_text" placeholder="翻訳したい文章を入力してください">
        </div>
        <!--<div v-for='text in results.previous_text'>-->
        <!--   <p>{{text}}</p>-->
        <!--</div>-->

    </div>
</template>

<script>
    export default {
        props: {
            language: [], 
        },
        data() {
            return {
                original_language: 'ja',
                original_text: '',
                translate_level: 5,
                results: {
                    previous_text: [],
                    language_label: [],
                    language_name: []
                },
            }
        },
        mounted () {
            console.log('翻訳するぞ')
        },
        methods: {
            change(e) {
                console.log('change');
                this.translate();
            },
            translator:async function(original_text, original_language, result_language) { //翻訳用の関数の設定
                const result = await fetch('https://script.google.com/macros/s/AKfycbw_nTaoeQWgAsiMXkAjciTpcaqWOzFnpAkQlrQ1NKo1UqE11u4raJtBIqiaRZlavTS0/exec?text=' + original_text + '&source=' + original_language + '&target=' + result_language);
                const data = await result.json();
                return data.text;
            },
            next_translate:async function(translate_count){
                while(true){
                    const rand = Math.floor(Math.random()*this.language.length);
                    console.log(this.language[rand].name, this.language[rand].label);
                    
                    this.results.language_name.splice(translate_count, 1, this.language[rand].name);
                    this.results.language_label.splice(translate_count, 1, this.language[rand].label);
                    
                    if(translate_count === 0){
                        if(this.original_text===''){
                            console.log('null?????????')
                            this.original_text=' '
                        }
                        this.results.previous_text.splice(translate_count, 1, this.original_text);
                        break;
                    }else{
                        if(this.results.language_label[translate_count] != this.results.language_label[translate_count-1]){
                            break;
                        }
                    }
                    
                }
                const midway_result = await this.translator(this.results.previous_text[translate_count], (translate_count === 0?this.original_language:this.results.language_label[translate_count-1]), this.results.language_label[translate_count]);
                await this.results.previous_text.splice(translate_count+1, 1, midway_result);
                console.log(midway_result);
            },
            translate: async function(){
                var i = 0
                while(i<this.translate_level){
                    await this.next_translate(i);
                    i += 1;
                }
                await console.log(this.results);
            }
        }
    }
</script>
