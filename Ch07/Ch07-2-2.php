<?php
include "about_me.php";
echo "EX03<br/>";
$arr = array(
    "Color" => "Black",
    "name" => "Chen_Hui_An",
    "Shape" => "Triangle",
    100
);
$arr["type"] = "PHP";
foreach ($arr as $key => $value) {
    echo "$key=>$value";
}
echo "<br/>";
print_r($arr);