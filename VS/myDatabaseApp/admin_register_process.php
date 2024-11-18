<?php
// Include your database connection
include('admin_db_connection.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username, password, and confirm password from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Check if passwords match
    if ($password != $confirm_password) {
        header("Location: admin_register.php?error=Passwords do not match!");
        exit();
    }

    // Check if the username already exists
    $sql = "SELECT * FROM admin_users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        header("Location: admin_register.php?error=Username already exists!");
        exit();
    }

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $sql = "INSERT INTO admin_users (username, pass_word) VALUES ('$username', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        header("Location: admin_login.php?success=Registration successful! Please log in.");
        exit();
    } else {
        header("Location: admin_register.php?error=Error: Could not register user.");
        exit();
    }
} else {
    header("Location: admin_register.php");
    exit();
}
?>
