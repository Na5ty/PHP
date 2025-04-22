<?php
    session_start();

    //redirect to login if not logged in
    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
        exit();
    }

    //fetch user details 
    require_once 'db.php';
    $stmt = $conn->prepare("SELECT name, email FROM users WHERE id = ?");
    $stmt->bind_param("i", $_SESSION['user_id']);
    $stmt->execute();
    $stmt->bind_result($name, $email);
    $stmt->fetch();
    $stmt->close();
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
    <h2>Welcome, <?php echo htmlspecialchars($name); ?></h2>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>