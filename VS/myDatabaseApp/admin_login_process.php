<?php
session_start();
include('admin_db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin_users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['pass_word'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['admin_login'] = $username;
            header("Location: admin_dashboard.php");
            exit();
        } else {
            header("Location: admin_login.php?error=Invalid Username or Password!");
            exit();
        }
    } else {
        header("Location: admin_login.php?error=Invalid Username or Password!");
        exit();
    }
} else {
    header("Location: admin_login.php");
    exit();
}
?>
