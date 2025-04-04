<?php
    // Section 1: Multiple Choice (1 point each)
    // 1. What is the correct way to start a PHP block?
    // A) <?php
    // B) <script>
    // C) <?
    // D) <php>

    //A is the correct answer
    
    // 2. Which of the following is used to declare a variable in PHP?
    // A) var
    // B) $
    // C) @
    // D) #

    //B is the correct answer
    
    // 3. What will echo 5 + "5 cats"; output?
    // A) Error
    // B) 10
    // C) 55
    // D) 5 cats

    //B is the correct answer, 
    // php will attempt to convert the string to a number, 
    // if it starts with one
    echo 5 + "5 cats";
    
    // 4. What is the output of this code?
    
    
    // $x = 10;
    // $y = &$x;
    // $y = 20;
    // echo $x;
    // A) 10
    // B) 20
    // C) 0
    // D) Error

    //B is the correct answer, because:
    // The & symbol means $y is not a copy of $x, but a reference to the same memory location. So if you change $y, it directly affects $x.
    
    // 🔍 So why does echo $x; print 20?
    // Because $x and $y are two names for the same value in memory. When $y is updated to 20, $x is too.
    
    // 5. What function is used to get the length of a string in PHP?
    // A) length()
    // B) strlen()
    // C) size()
    // D) count()

    // $x = "Hello World";

    // echo strlen($x);
    
    // Section 2: True or False (1 point each)
    // 6. PHP is a loosely typed language. /yes
    // 7. Variables in PHP are case-sensitive. /yes
    // 8. == checks both value and type. /== only checks for value
    // 9. You can use HTML inside PHP files. /yes
    // 10. The include and require statements are the same, except require causes a fatal error if the file is missing. /yes
    
    // Section 3: Coding (5 points each)
    // 11. Write a PHP function that takes a number and returns "Even" if it's even, and "Odd" if it's odd.

        function checkEvenOdd($x) {
            if($x % 2 == 0){
                return "Even";
            } else {
                return "Odd";
            }
        }

        echo checkEvenOdd(4) . "<br>";
    // 12. Write a loop that prints numbers from 1 to 10 using a for loop.
    

        for($x = 0; $x <= 10; $x++){
            echo $x . "<br>";
        }
    // 13. Create an associative array of 3 students with their scores, and print each name with the score.
    
        $students = [
            "Alice" => 85,
            "Bob" => 92,
            "Charlie" => 78
        ];

        foreach ($students as $name => $score){
            echo "$name scored $score<br>";
        }
        
    // 14. Write a simple PHP form handler that checks if a POST variable called username is set and displays a greeting.
    

        if (isset($_POST['username'])) {
            $username = htmlspecialchars($_POST['username']);
            echo "Hello, $username!";
        } else {
            echo "Username not provided.";
        }
    // 15. What is the difference between include and require? Explain briefly.

//     5. Difference between include and require

// include adds a file, but only shows a warning if the file is missing — the script continues to run.

// require adds a file, but causes a fatal error and stops the script if the file is missing.

// Conclusion: Use require when the file is essential for the script to work.
?>