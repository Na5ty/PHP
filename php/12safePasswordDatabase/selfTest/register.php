<?php
        require 'db.php';

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];

            //hash password using SHA-512
            $hashed = hash("sha512", $password);

            //store in DB
            $stmt = $conn->prepare("INSERT INTO users (username, password_hash) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed);

            if($stmt->execute()){
                echo "User registered!";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }
?>

<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>