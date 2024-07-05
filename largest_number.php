<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

$largestNumber = "";

if ($num1 > $num2 && $num1 > $num3) {
    $largestNumber = $num1;
} else if ($num2 > $num1 && $num2 > $num3) {
    $largestNumber = $num2;
} else {
    $largestNumber = $num3;
}
// echo $largestNumber;
