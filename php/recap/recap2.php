<?php
    $name = "alice";
    $age = 25;
    $height = 5.7;
    $is_student = true;

var_dump($name); 
echo "<br>";
var_dump($age); 
echo "<br>";
var_dump($height); 
echo "<br>";
var_dump($is_student); 
echo "<br>";

$num1 = 14;
$num2 = 6;

$sum = $num1 + $num2;
$diff = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;

echo "Number 1: $num1<br>";
echo "Number 2: $num2<br>";

echo "Addition: $num1 + $num2 = $sum<br>";
echo "Subtraction: $num1 - $num2 = $diff<br>";
echo "Multiplication: $num1 / $num2 = $quotient<br>";

$numberCheck = 0;

if($numberCheck < 0){
    echo "$numberCheck is a negative number";
} elseif($numberCheck > 0){
    echo "$numberCheck is a positive number";
} else {
    echo "number is zero";
}
?>