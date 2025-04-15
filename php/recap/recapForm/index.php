<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hallo, " . $_POST["name"];

    ?>
    <br>
    Der sehnlichst erwünschte Newsletter wird gesendet and
    <?php
        echo $_POST["email"];
    ?>
</body>
</html>