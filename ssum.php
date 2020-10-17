<?php

function sum($max)
{
  $result = 0;
  for ($i = 1; $i <= $max; $i++) {
    $result += $i;
  }
  return $result;
}

echo sum(100);


echo "\n";



$string = "ABCDEF";
echo strlen($string);



echo "\n";



$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;



echo "\n";



$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);



echo "\n";



$array = array(2, 5, 9, 7, 3, 1, 8, 6, 4);
asort($array);
print_r($array);

arsort($array);
print_r($array);


echo "\n";


function double($num)
{
  $result = $num * 2;
  return $result;
}
echo double(100);


echo "\n";


function f($a, $b)
{
  $result = $a + $b;
  return $result;
}
echo f(1, 2);


echo "\n";


function k($arr)
{
  $a = 1;
  foreach ($arr as $v) {
    $a = $a * $v;
  }
  return $a;
}

echo k(array(1, 3, 5, 7, 9));

echo "\n";


function max_array($arr)
{
  $max_number = $arr[0];
  foreach ($arr as $a) {
    if ($max_number < $a) {
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array([1, 3, 5, 7, 9]);


echo "\n";


//出力系関数の違いについて(自主課題)
$text = "こんにちは、太郎です。" . PHP_EOL;
echo $text; // 構文
echo ($text); // 関数
print $text; // 構文
print($text); // 関数

$data = ['text' => $text];
print_r($data);
var_dump($data);

echo "\n";

//課題５　
//string_tag関数について
$str ="<h1>strip_tags関数は</h1>"."<P>タグを取り除く為の関数です。</p>";
echo strip_tags($str). "\n";


echo "\n";


//array_push関数について
//配列の末尾に要素を追加する関数のこと。
$fruits = ["apple","orange","melon"];
    array_push($fruits,"banana","pineapple");
    print_r($fruits);

echo "\n";

//array_merge関数について
//配列の要素の最後にひとつまたは複数の配列を結合するときに使用
$items1 = ["item1","item2","item3"];
$items2 = ["item4","item5","item6"];
$items3 = ["item6","item7"];

$item_merge = array_merge($items1,$items2,$items3);
    print_r($item_merge);

echo "\n";


//time.mktime関数について
//time関数とはUNIXスタンプを取得する関数のこと。

//現在のタイムスタンプを取得
echo '現在のUnixタイムスタンプ：'.time();

echo '<br>';

//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;


echo "\n";


//mktime関数について
//time関数と同じくUNIXスタンプを取得する関数。
//time関数との違いは、指定した日時のタイムスタンプを取得できること。
//下記の場合だと２０１７年８月１日のtimestampを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;

echo "\n";

echo date('Y/m/d', time());

echo '<br>';

//3日後のタイムスタンプを取得
$nweek = time() + (7 * 21 * 60 * 60);

//3日後の日時を取得
echo date('Y/m/d', $nweek);


echo "\n";


//date関数にてついて
//time関数とmktaime関数で取得したUNIXスタンプを指定した
//フォーマットで日時として取得できる。

//現在のタイムスランプを取得
echo date('Y/m/d',time());

echo '<br>';
//3日後のタイムスタンプを入手
$nweek = time()+(7*21*60*60);
//3日後のタイムスタンプを入手
echo date('Y/m/d',$nweek);

echo "\n";
