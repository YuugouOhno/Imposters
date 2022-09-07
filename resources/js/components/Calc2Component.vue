<template>
    <div class='body_container'>
        
        <h1 class="DotGothic16">ランダム電卓</h1>
        
        <div class="calculator">
            <div class="input">{{result}}</div>
            <div class="buttons">
                <div class="operators" v-for="row in operators">
                    <div v-for="column in row" v-on:click="btn_Click(column)">{{column}}</div>
                </div>
                <div class="bottomPanel">
                    <div class="leftPanel">
                        <div class="numbers" v-for="row in numbers">
                            <div v-for="column in row" v-on:click="btn_Click(column)">{{column}}</div>
                        </div>
                    </div>
                    <div class="equal" v-on:click="equal_click">=</div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            result: "0",
            is_calc: false,
            operators: [
                ["+", "-", "×", "÷"]
            ],
            numbers: [
                ["7", "8", "9"],
                ["4", "5", "6"],
                ["1", "2", "3"],
                ["0", ".", "C"],
            ],
            button_list: ["+", "-", "×", "÷", "7", "8", "9", "4", "5", "6", "1", "2", "3", "0", ".", "C"],
            operators_list: ["÷", "×", "-", "+"],
        }
    },
    methods: {
        
        shuffle: function (array) {
            for (let i = array.length - 1; i >= 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        },
        setButton: function () {
            const shuffled_list = this.shuffle(this.button_list)
            console.log(shuffled_list)
            var i = 0
            for (var i=0; i<16; i++) {
                if (i<4){
                    this.operators[0].splice(i, 1, shuffled_list[i]);
                } else if (i<7) {
                    this.numbers[0].splice(i-4, 1, shuffled_list[i]);
                } else if (i<10) {
                    this.numbers[1].splice(i-7, 1, shuffled_list[i]);
                } else if (i<13) {
                    this.numbers[2].splice(i-10, 1, shuffled_list[i]);
                } else {
                    this.numbers[3].splice(i-13, 1, shuffled_list[i]);
                }
                
                console.log(this.operators[0]);
            }
            
        },
        resetButton: function () {
            const shuffled_list = ["+", "-", "×", "÷", "7", "8", "9", "4", "5", "6", "1", "2", "3", "0", ".", "C"]
            console.log(shuffled_list)
            var i = 0
            for (var i = 0; i<16; i++) {
                if (i<4){
                    this.operators[0].splice(i, 1, shuffled_list[i]);
                } else if (i<7) {
                    this.numbers[0].splice(i-4, 1, shuffled_list[i]);
                } else if (i<10) {
                    this.numbers[1].splice(i-7, 1, shuffled_list[i]);
                } else if (i<13) {
                    this.numbers[2].splice(i-10, 1, shuffled_list[i]);
                } else {
                    this.numbers[3].splice(i-13, 1, shuffled_list[i]);
                }
                
                console.log(this.operators[0]);
            }
            
        },
        btn_Click: function (val) {
            if (this.operators_list.includes(val)) {
                this.ope_click(val);
            } else if (val === "C") {
                this.c_click();
            }else {
                this.num_click(val);
            }
            this.setButton();
        },
        num_click: function (val) {
            if (this.is_calc) this.result = "0";
            this.is_calc = false;
    
            if (this.result == "0" && val == "0") {
                this.result = "0";
            } else if (this.result == "0" && val == ".") {
                this.result = "0.";
            } else if (this.result == "0") {
                this.result = val;
            } else {
                this.result += val;
            }
        },
        c_click: function () {
            this.result = "0";
            this.is_calc = false;
        },
        ope_click: function (val) {
            if (this.is_calc) this.is_calc = false;
    
            if (this.is_ope_last()) {
                this.result = this.result.slice(0, -1) + val;
            } else {
                this.result += val;
            }
        },
        equal_click: function () {
            if (this.is_ope_last()) this.result = this.result.slice(0, -1);
    
            var temp = new Function("return " + this.result.replaceAll("×", "*").replaceAll("÷", "/"))();
            if (temp == Infinity || Number.isNaN(temp)) {
                this.result = "Error";
            } else {
                this.result = temp;
                this.is_calc = true;
            }
            this.resetButton();
        },
        is_ope_last: function () {
            return this.operators_list.includes(this.result.toString().slice(-1));
        },
    },
};
</script>