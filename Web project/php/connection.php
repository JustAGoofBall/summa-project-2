<?php
$server = "localhost";
$ports = array(3306, 3308);
$username = "root";
$password = "";
$dbname = "groenlinks";

$conn = null;

foreach ($ports as $port) {
    try {
        $dsn = "mysql:host=$server;port=$port;dbname=$dbname";
        $conn = new PDO($dsn, $username, $password);
        break;
    } catch (PDOException $e) {
        continue;
    }
}

if (!$conn) {
    die("Failed to connect to any port");
}

echo "Connected successfully to port " . $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS);

$conn = null;
?>
