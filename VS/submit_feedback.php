<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cementcorp_db"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$user_name = $_POST['username'];
$user_email = $_POST['email'];
$user_phone = $_POST['phone'];
$user_feedback = $_POST['feedback'];

// Insert feedback into database
$sql = "INSERT INTO feedback (username, email, phone, feedback) VALUES ('$user_name', '$user_email', '$user_phone', '$user_feedback')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
