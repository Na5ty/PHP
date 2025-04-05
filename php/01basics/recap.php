<?php
    echo "Hello World<br>";

    $x = 4;
    $X = 5;

    echo $x + $X;
    echo "<br>";

    function checkEvenOdd($number){
        if($number % 2 == 0){
            echo $number . "is even";
        } else {
            echo $number . "is odd";
        }
    }

    checkEvenOdd(56);

    //Logic
    $a = true;
    $b = !true;
    $c = false;

    $res1 = $a && $b;
    $res2 = $b || $c;
    $res3 = $b xor $a;

    echo "<br>";

    echo "AND res1" . ($res1 ? 'true' : 'false') . "<br>";
    echo "OR res2" . ($res2 ? 'true' : 'false') . "<br>";
    echo "xor res3" . ($res3 ? 'true' : 'false') . "<br>";
?>