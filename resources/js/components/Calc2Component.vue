<template>
<div>
    <div>
        <input readonly v-model="result" type="text">
    </div>
    <div v-for="operator in operators">
        <div v-for="column in operator" v-on:click="btn_Click(column)">{{column}}</div>
    </div>
    <div v-for="number in numbers" class="numbers">
        <div v-for="column in number" v-on:click="btn_Click(column)">{{column}}</div>
    </div>
    
    <div v-on:click="result">=</div>
    
</div>
</template>
<script>
    export default {
        data() {
            return {
                operators: [
                    ["+", "-", "×", "÷"]
                ],
                numbers: [
                    ["7", "8", "9"],
                    ["4", "5", "6"],
                    ["1", "2", "3"],
                    ["0", ".", "C"],
                ]
            }
        },
        mounted () {
            const targetElementText = this.$refs.first_child.textContent
            console.log(targetElementText);
        },
        methods: {
            myFunctionClick: function () {        
                this.$el.querySelector("span").innerText = ' you clicked the button';
                this.$el.querySelector("span").style.color = 'pink';
            }
        }
    }
</script> 
<style>
body {
    margin: 4% auto;
    font-family: 'Source Sans Pro', sans-serif;
    letter-spacing: 5px;
    font-size: 1.8rem;
    -webkit-user-select: none;
    /*background-image: url('https://www.pakutaso.com/shared/img/thumb/PP_keshigomutopen_TP_V.jpg');*/
}

.numbers div {
  display: inline-block;
  border: 1px solid #ddd;
  border-radius: 1px;
  width: 80px;
  text-align: center;
  padding: 10px;
  margin: 10px 4px 10px 0;
  cursor: pointer;
  border-radius: 25px;
  background-color: #84ffff; /*電卓の数字部分のカラー*/
  transition: border-color .2s ease-in-out, background-color .2s, box-shadow .2s;
  font-family: "Hannotate SC";
  color: #404040;
}
</style>