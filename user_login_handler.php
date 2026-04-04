<?php
session_start();
require_once 'classes/db1.php'; // Ensure this connects properly

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validate user login against the users table
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'user';
        header("Location: userDashboard.php");
        exit();
    } else {
        echo "<p style='color:red; text-align:center;'>Invalid username or password.</p>";
        echo "<p style='text-align:center;'><a href='user_login.php'>Try Again</a></p>";
        exit();
    }
}
?>
