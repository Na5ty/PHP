<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Login Test</title>
</head>
<body>
<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$servername = $_ENV['DB_SERVER'];
$user = $_ENV['DB_USERNAME'];
$pw = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];
$port = $_ENV['DB_PORT'];

$conn = new mysqli($servername, $user, $pw, $dbname, $port);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// 🧾 Display all users in DB
$result = $conn->query("SELECT * FROM users");
if ($result) {
    echo "✅ Found " . $result->num_rows . " users in DB<br>";
    while ($row = $result->fetch_assoc()) {
        // Ensure correct column names (uppercase as per your database schema)
        echo "👤 User: " . htmlspecialchars($row["NAME"]) . " - Password: " . htmlspecialchars($row["PASSWORD"]) . "<br>";
    }
} else {
    echo "❌ Error querying users table: " . $conn->error;
}

echo "<hr>";

// 🧪 Login test
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Use correct form field names (name="name" for username, name="password" for password)
    $name = $_POST["name"];
    $password = $_POST["password"];  // Correct field name "password"

    // Change this to true if you want to use the SAFE version
    $useSafeQuery = true;

    if ($useSafeQuery) {
        // ✅ SAFE: Prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT NAME FROM users WHERE NAME = ? AND PASSWORD = ?");
        $stmt->bind_param("ss", $name, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        echo "🔒 Using prepared statement<br>";
    } else {
        // 🚨 UNSAFE: vulnerable to SQL injection
        // Correct case for "NAME" and "PASSWORD" columns in your query
        $sql = "SELECT * FROM users WHERE NAME = '$name' AND PASSWORD = '$password'";
        echo "⚠️ Unsafe SQL: $sql<br>";
        $result = $conn->query($sql);
    }

    if ($result && $row = $result->fetch_assoc()) {
        echo "✅ Welcome, " . htmlspecialchars($row["NAME"]);
    } else {
        echo "❌ Login failed";
    }

    if (isset($stmt)) {
        $stmt->close();
    }
}

$conn->close();
?>

<!-- 🧪 Try SQL injection: ( blubb' OR 'a'='a ) -->
<form method="post">
    <h3>Login</h3>
    Username: <input type="text" name="name"><br>
    Password: <input type="text" name="password"><br>  <!-- Changed to "password" -->
    <input type="submit" value="Login">
</form>
</body>
</html>
