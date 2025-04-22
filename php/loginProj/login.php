<?php
    require_once 'db.php';
    session_start();

    //initialize variables
    $email = $password = "";
    $error = "";

    //handle form submission
    if($_SERVER["REQUEST_METHOD"]  == "POST"){
        $email = htmlspecialchars(trim($_POST["email"]));
        $password = $_POST['password'];

        //check if email exists
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows > 0){
            //fetch the hashed password
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();

            //verify the password
            if(password_verify($password, $hashed_password)){
                //start a session and store user info
                $_SESSION['user_id'] = $user_id;
                $_SESSION['email'] = $email;
                header('Location: dashboard.php'); //redirect to the dashboard
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No account found with that email.";
        }

        $stmt->close();
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>

    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Log In</button>
    </form>
</body>
</html>