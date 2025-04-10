<?php
    echo "Hello World <br>";

    //fizzbuzz



    for($number = 1;$number < 50;$number++){
        if($number % 15 == 0){
            echo "fizzbuzz <br>";
        } elseif ($number % 5 == 0){
            echo "buzz <br>";
        } elseif ($number % 3 == 0){
            echo "fizz <br>";
        } else {
            echo "$number <br>";
        }
    }

    //logic recap

    $a = true;
    $b = !true;
    $c = false;

    $result1 = ($a || $b);
    $result2 = ($c && $a);
    $result3 = ($c xor $a);

    echo "result of a or b " . ($result1 ? 'true' : 'false') . "<br>"; 
    echo "result of c and d " . ($result2 ? 'true' : 'false') . "<br>"; 
    echo "result of c xor a " . ($result3 ? 'true' : 'false') . "<br>"; 


    $dayNumber = 4;

    switch ($dayNumber){
        case "1":
            echo "It's Monday";
            break;
        case "2":
            echo "It's Tuesday";
            break;
        case "3":
            echo "It's Wednesday";
            break;
        case "4":
            echo "It's Thursday";
            break;
        case "5":
            echo "It's Friday";
            break;
        case "6":
            echo "It's Saturday";
            break;
        case "7":
            echo "It's Sunday";
            break;
        default:
            echo "Invalid day";

    }
    $num1 = 10;

    while($num1 <= 15){
        echo $num1;
        echo "<br>";
        $num1 = $num1 + 1;
    }


    $numA = 25;
    $numB = 42;
    $numC = 15;
    $numD = 23;

    $largest = max($numA, $numB, $numC, $numD);
    echo "The largest number is: $largest <br>";

    $largest1 = $numA;

    if($numB > $largest1){
        $largest1 = $numB;
    }
    if($numC > $largest1){
        $largest1 = $numC;
    }
    if ($numD > $largest1){
        $largest1 = $numD;
    }

    echo "The largest number is: $largest1 <br>";

    $numbers = [3, 6, 2, 7];
    $sum1 = array_sum($numbers);

    echo "The sum of the numbers is: $sum1 <br>";
?>