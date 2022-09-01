<template>
    <div>
        <h1>てきとう翻訳</h1>
        <input type='number' v-model='translate_level'>
        <div>
            <select v-model="original_language" placeholder="翻訳元の言語">
                <option v-for="language in languages" :key="language.id" :value="language.id">
                    {{ language.name }}
                </option>
            </select>
	    </div>
	    <h1>{{original_language}}</h1>
	    <div>
            <select v-model="last_language" placeholder="翻訳先の言語">
                <option v-for="language in languages" :key="language.id" :value="language.id">
                    {{ language.name }}
                </option>
            </select>
	    </div>
        <div>
            <!--<input @input="change" type='text' v-model="original_text">-->
            <input type='text' v-model="original_text" placeholder="翻訳したい文章を入力してください">
            <button v-on:click="translate()">翻訳</button>
        </div>
        <div v-for='name, index in results.language_name'>
            <div>
                
                <p>{{name}}語に訳すと</p>
                <p>{{results.previous_text[index+1] }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            languages: [], 
        },
        data() {
            return {
                original_language: 15,
                last_language: 6,
                original_text: '',
                translate_level: 2,
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
            next_translate:async function(translate_count, isLast){
                var i = 0;
                while(i < 100){
                    console.log(this.languages)
                    if(isLast){
                        var rand = this.last_language-1;
                    }else{
                        var rand = Math.floor(Math.random()*this.languages.length);
                    }
                    this.results.language_name.splice(translate_count, 1, this.languages[rand].name);
                    this.results.language_label.splice(translate_count, 1, this.languages[rand].label);
                    
                    console.log(this.results.language_name[translate_count], this.results.language_label[translate_count])
                    
                    if(translate_count === 0){
                        if(this.results.language_label[translate_count] != this.languages[this.original_language].label){
                            if(this.original_text===''){
                                console.log('null?????????')
                                this.original_text=' '
                            }
                            this.results.previous_text.splice(translate_count, 1, this.original_text);
                            break;
                        }
                    }else{
                        if(this.results.language_label[translate_count] != this.results.language_label[translate_count-1]){
                            break;
                        }
                    }
                    i += 1;
                }
                const midway_result = await this.translator(this.results.previous_text[translate_count], (translate_count === 0?this.languages[this.original_language].label:this.results.language_label[translate_count-1]), this.results.language_label[translate_count]);
                
                console.log(midway_result)
                await this.results.previous_text.splice(translate_count+1, 1, midway_result);
                console.log(this.results.previous_text[translate_count])
            
            },
            translate: async function(){
                var i = 0
                while(i < this.translate_level){
                    if(i != this.translate_level-1){
                        await this.next_translate(i, false);
                    }else{
                        console.log('最後のひと訳')
                        await this.next_translate(i, true);
                    }
                    i += 1;
                }
                // await this.next_translate(i, this.last_language);
                console.log(this.results)
            }
        }
    }
</script>
