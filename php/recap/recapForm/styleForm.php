<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit" value="Submit12">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars(stripslashes(trim($_POST["name"])));
            $email = htmlspecialchars(stripslashes(trim($_POST["email"])));

            echo "<p style='color: green;'>Danke, <strong>$name</strong>! Dein Newsletter wird an <strong>$email</strong> gesendet.</p>";//add some color to the response
        }
        
    ?> 
</body>
</html>