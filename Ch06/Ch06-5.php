<?php
include "Ch06-5-1.inc";
include_once("Ch06-5-2.inc");

$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";

require ("Ch06-5-1.inc"); 
$file = "Ch06-5-1.inc";
require $file;

require ("about_me.php"); 