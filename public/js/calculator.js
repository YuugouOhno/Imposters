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
  let inputString = input.innerHTML; // inputを取得
  console.log("inputStringだよ",inputString);
  nekoArray.push(inputString); //入力された計算式をneko配列に格納
  console.log("nekoArrayだよ",nekoArray);
  
  
  let numbers = inputString.split(/\+|\-|\×|\÷/g); // 演算子で区切られている数字を配列として取得
  let operators = inputString.replace(/[0-9]|\./g, "").split(""); // 数字で区切られている演算子を配列として取得
  let random = Math.floor(Math.random() * 101); // 0から100までランダムに取得
  const probability = document.getElementById('probability').value;//正答率を受け取る
  if(random<probability){ // ランダムで取得した値が正答率を超えているとき
    math_correct(operators,numbers); // 正しい計算
  }else{
    math_wrong(operators,numbers); // 誤った計算
  }
});

function math_correct(operators,numbers){ //正しい計算の関数
  console.log('correct');
  multiplication(operators,numbers); //掛け算
  division(operators,numbers); //割り算
  addision(operators,numbers); //足し算
  subtraction(operators,numbers); //引き算
  input.innerHTML = numbers[0];
  nekoArray.push(operators);
  nekoArray.push('=');
  nekoArray.push(numbers[0]);
  resultDisplayed = true; 
}

function math_wrong(operators, numbers){ //間違える計算の関数
  console.log('wrong');
  addision(operators,numbers); //足し算
  subtraction(operators,numbers); //引き算
  multiplication(operators,numbers); //掛け算
  division(operators,numbers); //割り算　演算の順番を間違える
  var addOrSub = Math.random(); // 
  var random = Math.floor(Math.random() * 2); // 誤差の値を決定
  
  if(addOrSub < 0.5){
    input.innerHTML = numbers[0] + 1 + random; // addOrSubに応じて５０％で最終結果に1から3を足す
     
  }else if(addOrSub > 0.5){
    input.innerHTML = numbers[0] - 1 - random; // addOrSubに応じて５０％で最終結果に1から3を引く
    
  } else {
    input.innerHTML = numbers[0] + 10000; // たまに最終結果に10000を足す
    
  }
  nekoArray.push('=');
  nekoArray.push(numbers[0]);
  console.log("nekoArrayの長さだよ",nekoArray.length/3);
  resultDisplayed = true; 
   for(i = 0; i < nekoArray.length/3; i++) nekoArray2 = [nekoArray[i*3]+ nekoArray[i*3+1]+ nekoArray[i*3+2]+"\n"]; //履歴を表示
   console.log("nekoArray2だよ",nekoArray2)
    neko.innerHTML = nekoArray2;
} //間違える計算の関数

function multiplication(operators,numbers){ // 掛け算
  let mul = operators.indexOf("×"); // 演算子の配列から一つ目の×の位置を取得
  while (mul != -1) { // ×があるかぎりループ
    numbers.splice(mul, 2, numbers[mul] * numbers[mul + 1]); // 数字の配列のmul番目から2個の要素を削除して計算結果を挿入する
    operators.splice(mul, 1); // 演算子の配列かのmul番目から1個の要素を削除(計算ずみの演算子を削除)
    mul = operators.indexOf("×"); // 演算子の配列から一つ目の×の位置を取得
  }
}

function division(operators,numbers){ // 割り算
  let div = operators.indexOf("÷");
  while (div != -1) {
    numbers.splice(div, 2, numbers[div] / numbers[div + 1]);
    operators.splice(div, 1);
    div = operators.indexOf("÷");
  }
}

function addision(operators,numbers){ // 足し算
  var add = operators.indexOf("+");
  while (add != -1) {
    numbers.splice(add, 2, parseFloat(numbers[add]) + parseFloat(numbers[add + 1]));
    operators.splice(add, 1);
    add = operators.indexOf("+");
  }
}

function subtraction(operators,numbers){ //引き算
  let sub = operators.indexOf("-");
  while (sub != -1) {
    numbers.splice(sub, 2, numbers[sub] - numbers[sub + 1]);
    operators.splice(sub, 1);
    sub = operators.indexOf("-");
  }
}




particlesJS("particles-js",{
  "particles":{
    "number":{
      "value":100,//この数値を変更すると幾何学模様の数が増減できる
      "density":{
        "enable":true,
        "value_area":800
      }
    },
    "color":{
      "value":"#0095d9"//色
    },
    "shape":{
      "type":"polygon",//形状はpolygonを指定
      "stroke":{
        "width":0,
      },
  "polygon":{
    "nb_sides":10//多角形の角の数
  },
  "image":{
    "width":460,
    "height":370
  }
  },
    "opacity":{
    "value":1,
    "random":false,
    "anim":{
      "enable":true,
      "speed":1.6,
      "opacity_min":0.3,
      "sync":false
    }
    },
    "size":{
      "value":5,
      "random":true,
      "anim":{
        "enable":false,
        "speed":40,
        "size_min":2,
        "sync":false
      }
    },
    "line_linked":{
      "enable":true,
      "distance":180,
      "color":"#0066cc",
      "opacity":0.6,
      "width":1
    },
    "move":{
      "enable":true,
      "speed":3,//この数値を小さくするとゆっくりな動きになる
      "direction":"none",//方向指定なし
      "random":false,//動きはランダムにしない
      "straight":false,//動きをとどめない
      "out_mode":"out",//画面の外に出るように描写
      "bounce":false,//跳ね返りなし
      "attract":{
        "enable":false,
        "rotateX":600,
        "rotateY":961.4383117143238
      }
    }
  },
  "interactivity":{
    "detect_on":"canvas",
    "events":{
      "onhover":{
        "enable":false,
        "mode":"repulse"
      },
  "onclick":{
    "enable":false
  },
  "resize":true
    }
  },
  "retina_detect":true
});