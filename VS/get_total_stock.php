<?php
// Database connection details
$servername = "localhost";
$username = "root"; // or your MySQL username
$password = ""; // or your MySQL password
$dbname = "admin"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch total stock amount
$totalStock = 0;
$stockSql = "SELECT stock_amount FROM stock";
$result = $conn->query($stockSql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalStock += $row['stock_amount'];
    }
}

echo $totalStock;
$conn->close();
