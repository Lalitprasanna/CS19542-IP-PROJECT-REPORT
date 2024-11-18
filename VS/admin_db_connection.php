<?php
$servername = "localhost";
$username = "your_actual_db_username";  // Replace with your actual database username
$password = "your_actual_db_password";  // Replace with your actual database password
$dbname = "login";  // Replace with the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
