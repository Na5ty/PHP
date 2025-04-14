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
            echo "Bock auf ne Runde Gwent, $name?";
        }

        playGwent("Triss");
        $variable = "Ciri";
        playGwent($variable);

        function addieren($a=1337, $b=42){ //$b=42 ist ein default wert
            echo $a + $b;
        }

        addieren(5, 42);
        addieren(4, 4);
        echo "<br>";

        function sub($c, $d){
            return $c - $d;
        }

        echo "das Ergebnis ist " . sub(40, 5);
    ?>
</body>
</html>