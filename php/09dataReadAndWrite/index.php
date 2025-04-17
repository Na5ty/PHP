<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file = fopen("test.txt", "r"); //mit w(write)löscht man alles was davor drin war
                                        //r read only
                                        //a append
                                        //r+ lesen und schreiben startet am anfang
                                        //w+ alles wird gelöscht
        // fwrite($file, "fsociety\n");
        // fwrite($file, "fsociety");
        // readfile("test.txt");

        while(!feof($file)){
            echo fgetc($file);
        }

        fclose($file);
    ?>                                  
</body>
</html>