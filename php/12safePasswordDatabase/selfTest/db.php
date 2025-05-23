<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


    $host = $_ENV['DB_SERVER'];
    $db = $_ENV['DB_NAME'];
    $user = $_ENV['DB_USERNAME'];
    $pass = $_ENV['DB_PASSWORD'];

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>