<?php
    require_once __DIR__ . '/vendor/autoload.php';

    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();


    $host = $_ENV['DB_SERVER'];
    $user = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];
    $dbname = $_ENV['DB_NAME'];

    $conn = new mysqli($host, $user, $password, $dbname);

    if($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
?>