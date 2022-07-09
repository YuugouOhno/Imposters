//"use strict";

var input = document.getElementById('input');
var number = document.querySelectorAll('.numbers div');
var operator = document.querySelectorAll('.operators div');
var result = document.getElementById('result'); 
var clear = document.getElementById('clear');
var resultDisplayed = false;

// 数字ボタンをクリックした時の処理
for (var i = 0; i < number.length; i++){
  number[i].addEventListener("click", function(e) {

    var currentString = input.innerHTML;
    var lastChar = currentString[currentString.length - 1];
    if (resultDisplayed === false) {
      input.innerHTML += e.target.innerHTML;
    } else if (resultDisplayed === true && lastChar === "+" || lastChar === "-" || lastChar === "×" || lastChar === "÷") {
      resultDisplayed = false;
      input.innerHTML += e.target.innerHTML;
    } else {
      resultDisplayed = false;
      input.innerHTML = "";
      input.innerHTML += e.target.innerHTML;
    }
  });
}

// 「＋」「ー」「x」「÷」をクリックした時の処理
for (var i = 0; i < operator.length; i++) {
  operator[i].addEventListener("click", function(e) {

    var currentString = input.innerHTML;
    var lastChar = currentString[currentString.length - 1];

    if (lastChar === "+" || lastChar === "-" || lastChar === "×" || lastChar === "÷") {
      var newString = currentString.substring(0, currentString.length - 1) + e.target.innerHTML;
      input.innerHTML = newString;
    } else if (currentString.length == 0) {
      console.log("enter a number first");
    } else {
      input.innerHTML += e.target.innerHTML;
    }

  });
}


result.addEventListener("click", function() {

  let inputString = input.innerHTML;
  let numbers = inputString.split(/\+|\-|\×|\÷/g);
  let operators = inputString.replace(/[0-9]|\./g, "").split("");

//割り算
  let div = operators.indexOf("÷");
  while (div != -1) {
    numbers.splice(div, 2, numbers[div] / numbers[div + 1]);
    operators.splice(div, 1);
    div = operators.indexOf("÷");
  }

//掛け算
  let mul = operators.indexOf("×");
  while (mul != -1) {
    numbers.splice(mul, 2, numbers[mul] * numbers[mul + 1]);
    operators.splice(mul, 1);
    mul = operators.indexOf("×");
  }

//引き算
  let sub = operators.indexOf("-");
  while (sub != -1) {
    numbers.splice(sub, 2, numbers[sub] - numbers[sub + 1]);
    operators.splice(sub, 1);
    sub = operators.indexOf("-");
  }

//足し算
  var add = operators.indexOf("+");
  while (add != -1) {
    numbers.splice(add, 2, parseFloat(numbers[add]) + parseFloat(numbers[add + 1]));
    operators.splice(add, 1);
    add = operators.indexOf("+");
  }


//結果の表示
  let random = Math.floor(Math.random() * 4); //0~5の中からランダム Math.floor()で小数点以下切り捨て
  input.innerHTML = numbers[0] + random;
  resultDisplayed = true; 
});


// C(削除)機能
clear.addEventListener("click", function() {
  input.innerHTML = "";
})