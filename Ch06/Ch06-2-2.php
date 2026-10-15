<?php
function printHeader()
{
    echo "<h3>SID: C113181103</h3>";
    echo "<h3>Name: 鍾睿紘</h3>";
    echo "<h3>Ex02</h3>";
}
printHeader();
function rateExchange($amout, $rate)
{
    $result = $amout * $rate;
    return $result;
}

$rate = rateExchange(1000, 32.5);
echo "Money: " . $rate;
