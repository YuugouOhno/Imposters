<script type="text/javascript"><!--
myTotal = 0;	// 現在の合計値
myInput = "";	// 現在入力している値
myCalc = "+";	// 合計と入力値の演算子
myFlg = 1;	// １回前に入力したもの 0:数字 1:演算子
 	
function myValue(myData){	// 0～9または小数点ボタンを押した
myFlg = 0;	// １回前に入力したものは数値
myInput += myData;	// 現在入力している値に追加
document.myForm.myLine.value = myInput;	// 現在入力している値表示
}	
 	
function myCalculate(myData){	// 演算ボタンを押した
if (myFlg==0){	// １回前に入力したものは数値か？
myFlg = 1;	// １回前に入力したものは演算子
myWork = myTotal + myCalc + myInput;	// 一連の計算式を作る
myTotal = eval(myWork);	// 計算式を計算させる
myInput = "";	// 現在入力している値をクリア
document.myForm.myLine.value = myTotal;	// 合計を表示
}	
if (myData == "="){	// 演算ボタンは[＝]か？
myTotal = 0;	// 合計をクリア
myCalc = "+";	// 演算子を[+]とする
}else{	// 演算ボタンは[＝]以外である
myCalc = myData;	// 演算子を退避させておく
}	
}	
 	
function myC(){	// クリアボタン[C]を押した
myTotal = 0;	// 合計クリア
myCalc = "+";	// 演算子クリア
myInput = "";	// 現在入力している値をクリア
document.myForm.myLine.value = myTotal;	// つまり、０を表示
}	
// --></script>	
 	
<form name="myForm">
<table border="1" bgcolor="#BDB76B">
<tr>
<td align="center" colspan="4" bgcolor="#d2691e"><font color="#FFFFFF">
<strong> 電　卓</font></strong></td>
</tr>
<tr>
<td colspan="3"><input type="text" size="12" name="myLine" value="0"></td>
<td align="center"><input type="button" value="Ｃ" onclick="myC()"></td>
</tr>
<tr>
<td align="center"><input type="button" value=" ７ " onclick="myValue(7)"></td>
<td align="center"><input type="button" value=" ８ " onclick="myValue(8)"></td>
<td align="center"><input type="button" value=" ９ " onclick="myValue(9)"></td>
<td align="center"><input type="button" value="÷" onclick="myCalculate('/')"></td>
</tr>
<tr>
<td align="center"><input type="button" value=" ４ " onclick="myValue(4)"></td>
<td align="center"><input type="button" value=" ５ " onclick="myValue(5)"></td>
<td align="center"><input type="button" value=" ６ " onclick="myValue(6)"></td>
<td align="center"><input type="button" value="×" onclick="myCalculate('*')"></td>
</tr>
<tr>
<td align="center"><input type="button" value=" １ " onclick="myValue(1)"></td>
<td align="center"><input type="button" value=" ２ " onclick="myValue(2)"></td>
<td align="center"><input type="button" value=" ３ " onclick="myValue(3)"></td>
<td align="center"><input type="button" value="－" onclick="myCalculate('-')"></td>
</tr>
<tr>
<td align="center"><input type="button" value=" ０ " onclick="myValue(0)"></td>
<td align="center"><input type="button" value=" ・ " onclick="myValue('.')"></td>
<td align="center"><input type="button" value=" ＋ " onclick="myCalculate('+')"></td>
<td align="center"><input type="button" value="＝" onclick="myCalculate('=')"></td>
</tr>
</table>
</form>
