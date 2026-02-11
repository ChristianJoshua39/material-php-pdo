<?php

$servername = "localhost";
$username = "root";       // default username in XAMPP/WAMP
$password = "";           // default password is empty
$dbname = "sample_php_pdo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
