<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function playGwent($name){
            echo "Bock auf 'ne Runde Gwent, $name ?";
            echo "Aber sicher doch!";
        }

        function newFunction(){
            playGwent("Zoltan");
        }

        newFunction();

        function addieren($n){
            if($n < 1){
                return;
            }
            echo $n;
            addieren($n - 1);
        }

        addieren(5);

        function fakul($x){
            if($x < 2){
                return 1;
            }
            return $x * fakul($x-1);
        }

        echo fakul(5);
    ?>
</body>
</html>