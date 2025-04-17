<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once __DIR__ . '/vendor/autoload.php';

    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // echo $_ENV['APP_NAME'] . "<br>"; // or getenv('APP_NAME'); to check if dotenv is working

    $host = $_ENV['DB_SERVER'];         // DB_SERVER
    $user = $_ENV['DB_USERNAME'];       // DB_USERNAME
    $password = $_ENV['DB_PASSWORD'];   // DB_PASSWORD
    $dbname = $_ENV['DB_NAME'];         // DB_NAME



//connect
    $conn = new mysqli($host, $user, $password, $dbname);  
    
    //check
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    
    //user input
    $name = "lucy luna";
    $email = "lucyluna@example.com";

    //prepare and bin

    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES(?, ?)");
    $stmt->bind_param("ss", $name, $email); //"ss" means both are srings
    
// bind_param() Type Codes

// Code	    Data Type
//   i	    Integer
//   d	    Double (float)
//    s	    String
//    b	    Blob (binary)

    //execute
    if($stmt->execute()){
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    //close
    $conn->close();
    ?>
</body>
</html>