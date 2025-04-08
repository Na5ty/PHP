<?php
// Task 1: Create an array of 5 fruits and print the second fruit.

// Task 2: Create an array of numbers from 1 to 5 and calculate the sum.

// Task 3: Create an associative array with keys: "name", "age", "city" and print the value of "city".

// Task 4: Add a new element to an existing array and print the updated array.

// Task 5: Create an array of 3 colors and loop through it using foreach to print each one.

// Task 6: Count how many items are in an array of 6 animals.

// Task 7: Sort an array of numbers in ascending order and print it.

// Task 8: Create an array of student names and check if "John" is in the array.

// Task 9: Reverse an array of numbers and print it.

// Task 10: Merge two arrays: ["a", "b"] and ["c", "d"], and print the result.


    //1. print the 2nd item of an array 

    $fruits = array("banana", "strawberry", "apple");
    echo $fruits[1] . "<br>";

    //2. array of numbers and calc the sum 

    $numbers = array(2, 5, 7, 8, 3, 200);
    $sum = array_sum($numbers);
    echo "sum of the numbers: $sum<br>";

    //3. associative array with keys => values

    $array1 = array("name" => "Leni", "age" => 34, "city" => "Hamburg");
    echo $array1["city"] . "<br>";   // Hamburg
    echo $array1["name"] . "<br>";   // Leni
    echo $array1["age"] . "<br>";    // 34
    //loop through all of them and print them:
    foreach($array1 as $key => $value){
        echo "$key: $value<br>";
    }

    //4. update array

    $fruitUpdate = ["apple", "banana"];
    print_r($fruitUpdate);
    echo "<br>";
    $fruitUpdate[] = "orange";
    print_r($fruitUpdate);
    echo "<br>";

    //5. loop through array, print all out with foreach

    $colors = ["red", "green", "yellow"];
    foreach($colors as $color){
        echo $color . "<br>";
    }

    //6. count array items

    $animals = ["fish", "cat", "cow", "dog", "cow", "goat"];
    echo count($animals) . "<br>";

    //7. sort array of numbers in ascending order

    $numbers2 = [6, 12, 754, 1, 123, 5, 76, 34];
    sort($numbers2);                                //actually sorts the array /use rsort() for descending order
    echo "$numbers2 <br>";
    echo implode(", ", $numbers2) . "<br>";         //implode turns the array into a string

    //8. ask for name in array

    $names = ["marc", "jayce", "nunu", "olaf", "john"];
    $hasJohn = in_array("john", $names);
    echo "is john in the array? " . ($hasJohn ? 'yes' : 'no') . "<br>";
?>