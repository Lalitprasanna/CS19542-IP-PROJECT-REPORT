<?php
include 'db_connect.php';  // Include database connection

// Example admin credentials
$admin_username = 'admin';
$admin_password = 'admin123';

// Hash the password
$hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

// Insert admin user
$sql = "INSERT INTO admin_login (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $admin_username, $hashed_password);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Admin user created successfully!";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
