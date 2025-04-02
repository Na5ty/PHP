<?php
    //variables
    $x = "hello world"; //string
    $X = 42;            //number/int
    $thisisavariable = 3.14; //float or doubles
    $p = true;          //boolean (or false)


    echo "i am saying: $x";
    echo "<br>";


    //to get the data type of a variable, use the var_dump() function
    var_dump($thisisavariable);


    //you can use $variable $_variable $x etc.
    //you can not use $3 $1variable
    echo "<br>";


    //join output text
    echo "what's up " . $x . "??";
    

    //you can also use html code
    echo "<h1>$x</h1>";
?>