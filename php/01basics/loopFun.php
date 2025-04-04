<?php
//all even numbers between 1 and 20
    for($x = 1; $x <= 20; $x++){
        if($x % 2 == 0){
            echo $x . "<br>";
        }
    }


//countdown to 1
    $i = 10;

    while($i > 0){
        echo $i . "<br>";
        $i--;
    }

//do ... while loop
    $number = 5;

    do {
        echo $number;
        $number += 2;
    } while ($number < 10);

//for each
    $fruits = array("banana", "apple", "lemon", "strawberry", "mango");

    foreach( $fruits as $X){
        echo "$X <br>";
    }

//nested for loop with desired pattern
// 1
// 1 2
// 1 2 3
// 1 2 3 4


    //outer loop to handle the number of rows
    for ($g = 1; $g <=4; $g++){
        //inner loop to print numbers from 1 to the current row number
        for ($h = 1; $h <= $g; $h++){
            echo $h . " ";
        }
        //new line after each row
        echo "<br>";
    }
?>