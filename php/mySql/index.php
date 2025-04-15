<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL Test</title>
</head>
<body>
    <?php

    //load .env file
    require_once __DIR__ . '/vendor/autoload.php'; //load Composer's autoloader

//initialize Dotenv to load the variables
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $servername = $_ENV['DB_SERVER'];
    $user = $_ENV['DB_USERNAME'];
    $pw = $_ENV['DB_PASSWORD'];
    $dbname = $_ENV['DB_NAME'];
    $port = $_ENV['DB_PORT'];

    //var_dump($servername, $user, $pw, $dbname, $port); // Debug-Ausgabe

    $con = new mysqli($servername, $user, $pw, $dbname, $port);

    if($con->connect_error){
        die("Alles zu spät, Rüdiger ist tot. " . $con->connect_error);
    }
    $sql = "INSERT INTO User (Name, Passwort) VALUES ('Bruce Wayne', 'I like Bats')";

    if($con->query($sql) === TRUE){
        echo "Du bist erfolgreich registriert worden12";
    } else {
        echo "Du bist ein Lappen" . $con->error;
    }
    $con->close();
    ?>
</body>
</html>
