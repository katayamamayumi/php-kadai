<?php
$name = "katayama";
if ($name == "katayama") {
  echo "私は" . $name . "です";
} else {
  echo $name . "ではありません";
}
?>

<?php
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

?>

<?php
$fruits = ["apple", "orange", "lemon", "peach", "fig"];
foreach ($fruits as $fruit) {
  echo "要素は" . $fruit;
  echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i < $end; $i++) {
  if ($i % 5 == 0) {
    echo $i, "\n";
  }
}
