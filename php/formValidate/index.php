<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(htmlspecialchars(stripslashes(trim($_POST["name"]))))){
            $error = "Der Name ist nicht optional.";
        } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $error = "Ungültige Email";
        }
        else {
        echo "Hallo " . htmlspecialchars(stripslashes(trim($_POST["name"]))) . 
        "<br>Der sehnlichst erwünschte Newsletter wird gesendet an ". htmlspecialchars(stripslashes(trim($_POST["email"])));
    }
}
?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name"><br>
        E-mail :<input type="text" name="email"><br>
        <?php
            echo $error;
        ?>
        <input type="submit">
</form>


</body>
</html>