<?php
$servername = "localhost";
$username = "root";   // Change this if necessary
$password = "";       // Add your password here
$dbname = "userpage";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
