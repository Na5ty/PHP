<?php
    echo "<h1>Logic</h1>";

    $bedingung1 = true;
    $bedingung2 = !true;   //equals false
    $bedingung3 = false;

    var_dump($bedingung2);  //see its boolean and false

    echo "<br>";
    $test = ($bedingung1 && $bedinung2);        //both have to be true to give true
    $test1 = ($bedingung3 || $bedingung2);      //only 1 has to be true to give true/ but it can be both true
    $test2 = ($bedingung1 xor $bedingun2);      //exactly 1 has to be true

    echo ($test ? 'true' : 'false') . "<br>";
    echo ($tes1 ? 'true' : 'false') . "<br>";
    echo ($tes2 ? 'true' : 'false') . "<br>";

    echo "combined expressions<br>";
    $test3 = ($bedingung1 && $bedingung3) || $bedingung2;
    $test4 = !(($bedinung2 || $bedingung1) && $bedingung3);
    $test5 = ($bedinung2 xor $bedingung3) && ($bedinung1 || $bedinung2);

    echo ($test3 ? 'true' : 'false') . "<br>";
    echo ($test4 ? 'true' : 'false') . "<br>";
    echo ($test5 ? 'true' : 'false') . "<br>";


    //exercise

    //find and fix the logical errors
    $val1 = true;
    $val2 = false;
    $val3 = true;

    $result = $val1 || $val2 && $val3; 
    echo ($result ? 'true' : 'false') . "<br>";  // Expected: true

    $result = !($val1 xor ($val2 || !$val3));  
    echo ($result ? 'true' : 'false') . "<br>";  // Expected: false

    //
    // $val1 = true;
    // $val2 = false;
    // $val3 = true;

    // $result = $val1 || ($val2 && $val3); 
    // echo ($result ? 'true' : 'false') . "<br>"; 

    // $result = !($val1 xor ($val2 || !$val3));  no need to change anything
    // echo ($result ? 'true' : 'false') . "<br>"; 
?>