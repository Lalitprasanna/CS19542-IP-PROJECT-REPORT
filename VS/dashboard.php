<?php
// Database connection details
$servername = "localhost"; // Change if your MySQL is hosted elsewhere
$username = "root";        // Replace with your MySQL username
$password = "";            // Replace with your MySQL password
$dbname = "cementcorp_db";  // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $product = $_POST['product'];
    $quantity = (int)$_POST['quantity'];
    $price = (float)$_POST['price'];
    $total_price = $price * $quantity;
    $order_date = date('Y-m-d'); // Current date

    // Prepare the SQL statement
    $sql = "INSERT INTO orders (product, quantity, total_price, order_date)
            VALUES ('$product', $quantity, $total_price, '$order_date')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
