<?php
/*税込み金額を返すファンクションです。*/
function intax($value) {
  return ceil($value * 1.1);
}



$price = 2250;
$price_tax = intax($price);
echo $price_tax;