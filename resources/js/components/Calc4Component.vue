<template>
    <div class='body_container'>
        
        <h1>消えゆく電卓</h1>
        
        <div class="calculator">
            <div class="input">{{result}}</div>
            <div class="buttons">
                <div class="operators" v-for="row in operators">
                    <div :class="{ 'inline': operators_isInline[index], 'none': operators_isNone[index]}" :ref="'val' + column" v-for="column, index in row" v-on:click="btn_Click(column)">{{column}}</div>
                </div>
                <div class="bottomPanel">
                    <div class="leftPanel">
                        <div class="numbers" v-for="row in numbers">
                            <div :class="{ 'inline': numbers_isInline[index], 'none': numbers_isNone[index]}" :ref="'val' + column" v-for="column, index in row" v-on:click="btn_Click(column)">{{column}}</div>
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
            operators_list: ["÷", "×", "-", "+"],
            operators_isInline: [true, true, true, true],
            operators_isNone: [false, false, false, false],
            numbers_isInline: [true, true, true, true, true, true, true, true, true, true, true, true],
            numbers_isNone: [false, false, false, false, false, false, false, false, false, false, false, false]
        }
    },
    methods: {
        lostButton: function (val) {
            const numbers_list = ["7", "8", "9", "4", "5", "6", "1", "2", "3", "0", ".", "C"]
            const operators_list = ["+", "-", "×", "÷", ]
            // const label = "val" + val
            // console.log('中身', this.$refs[label])
            console.log('何番目', numbers_list.indexOf(val))
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
            this.lostButton(val);
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
<style>
    .inline {
        display:inline-block;
    }
    
    .none {
        display:none;
    }
</style>