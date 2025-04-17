<?php
    require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST"){  //login logic only runs when you hit Login
        $username = $_POST["username"];      //reads the input values from the HTML form
        $password = $_POST["password"];

        //Get stored hash
        $stmt = $conn->prepare("SELECT password_hash FROM users WHERE username = ?");  //prepares a secure SQL statement to fetch the hashed password
        $stmt->bind_param("s", $username);  //binds the $username input safely(avoids SQL injection)
        $stmt->execute();
        $stmt->bind_result($stored_hash);
        $stmt->fetch();
        $stmt->close();     //executes the query and fetches the password_hash from the DB into $stored_hash

        //Compare
        if($stored_hash === hash("sha512", $password)){  //hashes the password the user typed in using SHA-512(same method as registration) and compares the two hashes
            echo "Login successful!";
        } else {
            echo "Invalid credentials.";
        }
    }
?>

<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>