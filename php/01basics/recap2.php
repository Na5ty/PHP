<?php

    //print every number from 1 to 15
    for ($i = 01; $i <= 15; $i++){
        echo $i . "\n";
    }

    echo "<br>";

    //print every odd number from 1 to 20
    $num = 1;

    while($num < 20){
        if($num % 2 !== 0){
            echo $num . "is a odd number <br>";
        } 
        $num ++;
    }


    //countdown 10 to 1
    $num1 = 10;

    do {
        echo $num1 . "<br>";
        $num1--;
    } while ($num1 >= 1);


    //loop through an array
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $color){
        echo $color . "\n";
    }

    //print all multiples of 5
    for($n = 1; $n <= 10; $n++){
        echo $n * 5 . "\n";
    }

    echo "<br>";
    //print the sum of numbers 1 to 100
    $sum = 0;
    for($m = 1; $m <= 100; $m++){
        $sum += $m;
    }
    echo $sum . "<br>";

    //print the sum of numbers 1 to 100 again but nicer
    echo array_sum(range(1, 100)) . "<br>";

    //associative arrays
    $name = array ("name" => "Alice", "age" => 25, "city" => "Paris");

    foreach($name as $x => $y){
        echo "$x: $y <br>";
    }

    //reverse output a string
    $str = "hello";
    for($i = strlen($str) - 1; $i >=0; $i--){
        echo $str[$i];
    }
    echo "<br>";


    // //expected output *****
    //                    ****
    //                     ***
    //                      **
    //                       *

    for($i = 5; $i >= 1; $i--){
        for($space = 0; $space < 5 - $i; $space++){
            echo "&nbsp;";
        }

        for($star = 1; $star <= $i; $star++){
            echo "*";
        }
        echo "<br>";
    }

  
    $rows = 5;

    for($m = 1; $m <= $rows; $m++){
        //print leading spaces
        for($space1 = 1; $space1 <= $rows - $m; $space1++){
            echo "&nbsp;";
        }
        //print stars
        for($star1 = 1; $star1 <= (2 * $m - 1); $star1++){
            echo "*";
        }
        echo "<br>";
    }
?>