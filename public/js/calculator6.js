var input = document.getElementById('input'); // inputを取得
var number = document.querySelectorAll('.numbers div'); // 数字(0-9と小数点)を配列として取得
var operator = document.querySelectorAll('.operators div'); // 演算子を配列として取得
var result = document.getElementById('result'); // =を取得
var neko = document.getElementById('neko'); //最初に入力された式を履歴として表示
var nekoArray = []; //履歴確認用
var nekoArray2 = [];

var clear = document.getElementById('clear'); // clearを取得
var resultDisplayed = false;

// 数字をクリックした時の処理
for (var i = 0; i < number.length; i++){ // 数字の配列をそれぞれ繰り返し
  number[i].addEventListener("click", function(e) { // クリックを感知
    var currentString = input.innerHTML; // 現在のinputを取得
    var lastChar = currentString[currentString.length - 1]; // inputの最後の一文字を取得
    if (resultDisplayed === false) {
      input.innerHTML += e.target.innerHTML; // クリックされた数字をinputに入れる
    } else if (resultDisplayed === true && lastChar === "+" || lastChar === "-" || lastChar === "×" || lastChar === "÷") { // =が押された後に演算子が入力されているとき
      resultDisplayed = false;
      input.innerHTML += e.target.innerHTML; // 演算子の後ろにクリックされた数字を入れる
    } else { // =が押された後にすぐ数字がクリックされた時
      resultDisplayed = false;
      input.innerHTML = ""; // inputをリセットして
      input.innerHTML += e.target.innerHTML; // クリックされた数字をinputに入れる
    }
  });
}

// 演算子をクリックした時の処理
for (var i = 0; i < operator.length; i++) { // 演算子の配列をそれぞれ繰り返し
  operator[i].addEventListener("click", function(e) { // クリックを感知
    var currentString = input.innerHTML; // 現在のinputを取得
    var lastChar = currentString[currentString.length - 1]; // inputの最後の一文字を取得
    if (lastChar === "+" || lastChar === "-" || lastChar === "×" || lastChar === "÷") { // 演算子があるのに演算子をクリックしたとき
      var newString = currentString.substring(0, currentString.length - 1) + e.target.innerHTML; // 演算子の一文字前と新たな演算子を取得
      input.innerHTML = newString; // 上記をinputに入れる
    } else if (currentString.length == 0) { // inputがない場合
      console.log("先に数字を打ってね");
    } else {
      input.innerHTML += e.target.innerHTML; // それ以外（数字が入力されている場合）はinputの最後に演算子を付け足して返す
    }
  });
}


// Cボタンで削除
clear.addEventListener("click", function() {
  input.innerHTML = "";
  // neko.innerHTML = "中止されました";
})


result.addEventListener("click", function() { // 最終結果の出力
  input.innerHTML = "暗算で頑張ってね";
});
