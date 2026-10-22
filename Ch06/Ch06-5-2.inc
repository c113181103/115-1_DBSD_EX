<!-- 程式範例：Ch06-5-2.inc --> 
<?php 
// 匯率換算函數
function rateExchange($amount, $rate) {
   $result = $amount * $rate;
   return $result;
}
?>