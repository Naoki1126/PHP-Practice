<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$sum = 0;
$maxPrice = 0;

foreach($prices as $price){
  $sum += $price;
  if($price > $maxPrice){
    $maxPrice = $price;
  }
}
echo "合計金額は${sum}円です";
echo "最高価格は${maxPrice}円です";
?>