<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit" value="Absenden">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Hallo " . htmlspecialchars(stripslashes(trim($_POST["name"]))) . "<br>";
        echo "Der sehnlichst erwünschte Newsletter wird gesendet an " . htmlspecialchars(stripslashes(trim($_POST["email"])));
    }
    ?>
</body>
</html>