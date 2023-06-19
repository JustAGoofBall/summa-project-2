<?php
$servername = "Localhost";
$username = "root";
$password = "";
$dbname = "groenlinks";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();
?>
