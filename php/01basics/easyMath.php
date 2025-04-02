<?php
    $num1 = 23;
    $num2 = 55;

    //addition
    $sum1 = $num1 + $num2;
    echo "the sum of number1 and number2 is " . $sum1 . "<br>";

    //subtraction
    $sub1 = $num2 - $num1;
    echo "number1 minus number2 is " . $sub1 . "<br>";

    //multiplication
    $prod1 = $num1 * $num2;
    echo "number1 times number2 is " . $prod1 . "<br>";

    //division
    $div1 = $num2 / $num1;
    echo "number2 divided by number1 is " . $div1 . "<br>";

    //exponetial
    $exp1 = $num1 ** $num2;
    echo "number1 raised to the power of number2 is " . $exp1 . "<br>";

    //modulo
    $mod1 = $num2 % $num1;
    echo "The remainder when Number2 is divided by Number1 is " . $mod1 . "<br>";

    //you can also write like this
    // $num2 /= $num1;
    // $num2 **= $num1;
    // etc.
?>