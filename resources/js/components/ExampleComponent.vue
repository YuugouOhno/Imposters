<template>
    <div>
        <h1>うっかり翻訳</h1>
        <div>
	        <select v-model="error_level">
                <option value=1>1うっかり</option>
                <option value=2>2うっかり</option>
                <option value=3>3うっかり</option>
            </select>
            <select v-model="original_language">
                <option value="ja">日本語</option>
                <option value="en">英語</option>
            </select>
            <select v-model="result_language">
                <option value="ja">日本語</option>
                <option value="en">英語</option>
            </select>
	    </div>
        <div>
            <input type='text' v-model="original_text" placeholder="翻訳したい文章を入力してください">
            <h2>誤った訳</h2>
            <p>{{error_result}}</p>
            <h2>正しい訳</h2>
            <p>{{correct_result}}</p>
        </div>
        <button v-on:click="translate()">翻訳</button>
    </div>
</template>

<script>
    export default {
        props: ['place'],
        data() {
            return {
                longitude: 0,
                error_level: 1,
                original_language: 'ja',
                result_language: 'en',
                original_text: '',
                error_result: '',
                correct_result: ''
            }
        },
        mounted () {
            this.translate();
        },
        methods: {
            translator:async function(original_text, original_language, result_language) { //翻訳用の関数の設定
                const result = await fetch('https://script.google.com/macros/s/AKfycbw_nTaoeQWgAsiMXkAjciTpcaqWOzFnpAkQlrQ1NKo1UqE11u4raJtBIqiaRZlavTS0/exec?text=' + original_text + '&source=' + original_language + '&target=' + result_language);
                const data = await result.json();
                return data.text;
            },
            translate: async function(){　// 原文とうっかりレベルを取得
                
                if (this.error_level== 1){
                    var middle_language1 = this.result_language;
                    var middle_language2 = this.original_language;
                }else if (this.error_level == 2){
                    var middle_language1 = this.result_language;
                    var middle_language2 = 'ko';
                }else if (this.error_level == 3){
                    var middle_language1 = 'ko';
                    var middle_language2 = 'tt';
                }
                
                this.error_result = await this.translator(this.original_text, this.original_language, middle_language1);
                console.log(this.error_result);
                this.error_result = await this.translator(this.error_result, middle_language1, middle_language2);
                console.log(this.error_result);
                this.error_result = await this.translator(this.error_result, middle_language2, this.result_language);
                console.log(this.error_result);
                
                var correct_result = await this.translator(this.original_text, this.original_language, this.result_language);
                this.correct_result =correct_result;
                console.log(this.correct_result);
            }
        }
    }
</script>
