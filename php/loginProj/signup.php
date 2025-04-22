<?php
    require_once 'db.php';

    //initialize variables
    $name = $email = $password = $confirm_password = "";
    $error = $success = "";

    //handle form submission
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password === $confirm_password){
            //hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            //check if email already exists
            $stmt = $conn->prepare('SELECT id FROM users WHERE email = ?');
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0){
                $error = "This email is already registered.";
            } else {
                //insert new user into database
                $stmt = $conn->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
                $stmt->bind_param("sss", $name, $email, $hashed_password);

                if ($stmt->execute()){
                    $success = "You have signed up successfully! You can now log in.";
                    $name = $email = $password = $confirm_password = ""; //reset form fields
                } else {
                    $error = "There was an error during sign-up. Please try again.";
                }
            }
            $stmt->close();
        } else {
            $error = "Passwords do not match.";
        }
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
    <h2>Sign Up</h2>

    <?php if ($success): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="text" name="name" placeholder="Full Name" value="<?php echo htmlspecialchars($name); ?>" required><br><br>
        <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required><br><br>
        <button type="submit">Sign Up</button>
    </form>
    
</body>
</html>