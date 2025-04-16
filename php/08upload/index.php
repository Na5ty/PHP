<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // die(ini_get("upload_tmp_dir") ? ini_get("upload_tmp_dir") : sys_get_temp_dir()); Speicherort
        if(isset($_POST["submit"])){
        $ziel= "uploads/";
        $zieldatei = $ziel . basename($_FILES["DateiZumHochladen"]["name"]);
        $error = 0;

        $imagesize = getimagesize($_FILES["DateiZumHochladen"]["tmp_name"]);  //überprüfung ob es ein Bild ist
        if($imagesize === false){
            $error = 1;
        } else {
            $imagesize["mime"];
        }

        $endung = pathinfo($zieldatei, PATHINFO_EXTENSION);                 //überprüfung auf endung der datei
        if($endung != "jpg" && $endung != "jpeg" && $endung != "png" && $endung != "bmp" && $endung != "gif"){
            $error = 1;
        }

        if(file_exists($zieldatei)){
            $error = 1;
            echo "Datei existiert bereits!";
        }

        if($_FILES["DateiZumHochladen"]["size"] > 2*1024*1024) {            //umrechnung von byte auf megabyte (max 2MB)
            $error = 1;
        }


        if($error != 1){
            if(move_uploaded_file($_FILES["DateiZumHochladen"]["tmp_name"], $zieldatei)){
                echo "Datei erfolgreich hochgeladen";
            }
            else{
                echo "Fehler";
        }
    }
}
    ?>
</body>
</html>