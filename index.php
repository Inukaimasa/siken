<?php
$a =11111;
// 結果 11111
echo "$a";
// 結果　$a
echo '$a';




// ねわたし
function birthday(&$age){
    $age++;
    echo $age . '歳の誕生日おめどう';

}
$x =20;
birthday($x);

//参照わたし
function birthday2($age){
    $age++;
    echo $age . '歳の誕生日おめどう';

}
$x =20;
birthday2($x);


// デフォルト値を設定してからる4に1が足されていく
function func(&$x =4){
    $x++;
    echo $x;
}
func();



// 関数呼びし
function fruits($value){
    echo 'これは'.$value.'です';
    echo '<br>';
}
fruits('apple');

// 変数に入れて関数呼び出し
$fruits1 ='orenge';
fruits($fruits1);


// 引数を3つ入れてコード入力
function Vegetables($Vegetable,$count,$price){
    echo $Vegetable. '一つの値段は' .$price. '円です<br>';
    echo $Vegetable. $count. 'つでの金額は'  .$count * $price. '円になりそうです';
    echo '<br>';

}

Vegetables('リンゴ','3',120);
Vegetables('オレンジ','5',100);
Vegetables('メロン','2',150);


// 引数の数を数える　func_num_args　今回の場合はfoo　結果は４
function foo(){
 
    $numargs =func_num_args();
    echo "引数の数:$numargs\n" ;

}
    foo(1,2,3,4);

// returnの戻り値使い方


function func11($x,$y){
    return $x + $y;

}
echo func11(1,2);

// return文の使い方数値を返す
function GetPI($diameter){
    $pi = $diameter * 3.14;

    return $pi;
}

$value =5;

$sum =GetPI($value);
echo '円周の長さ:'
 .$sum;


// 文字を返す　retuen

function getString($text){
    return $text.'engineer';
}
$str =getString('&&');

echo $str;




//////////////////////////////////////
$func ='printf';
if(function_exists($func)){
    $func('answer');

}else{
    echo $func, 'は未定義です';
}
?>
