<?php
$host = "localhost";
$ports = array(3306, 3308);
$username = "root";
$password = "";
$dbname = "groenlinks";

$conn = null;
foreach ($ports as $port) {
    $conn = new mysqli($host . ":" . $port, $username, $password, $dbname);
    if (!$conn->connect_error) {
        break;
    }
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to port " . $conn->host_info;

$conn->close();
?>