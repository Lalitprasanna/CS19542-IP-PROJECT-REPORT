<?php
session_start();
include 'admin_db_connect.php'; // Ensure this connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure these values are set
    if (isset($_POST['product_id']) && isset($_POST['new_stock'])) {
        $product_id = $_POST['product_id']; // Fetch product ID from form
        $new_stock = $_POST['new_stock']; // Fetch new stock level from form

        // Prepare an SQL statement to update the stock
        $sql = "UPDATE products SET stock_level = ? WHERE id = ?"; // Assuming 'id' is the primary key in your products table
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $new_stock, $product_id); // Bind parameters (new stock, product id)

        if ($stmt->execute()) {
            header("Location: admin_dashboard.php?success=Stock updated successfully."); // Redirect on success
            exit();
        } else {
            echo "Error updating stock: " . $stmt->error; // Show error if the update fails
        }
    } else {
        echo "Invalid input."; // Handle invalid input
    }
} else {
    echo "Invalid request."; // Handle invalid request method
}
?>
