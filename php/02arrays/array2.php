<pre>
<?php
    $fruits = ["apple", "kiwi", "banana", "cherry"];

    echo "$fruits[3] <br>";

    foreach($fruits as $fruit){
        echo "$fruit \n <br>";
    }

    echo count($fruits) . "<br>";


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
</pre>