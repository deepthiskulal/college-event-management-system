<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header("Location: register.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <?php require 'utils/styles.php'; ?> 
</head>
<body>
    <?php require 'utils/header.php'; ?>
    
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>You are logged in as a **User**.</p>
        <a href="logout.php">Logout</a>
    </div>

    <?php require 'utils/footer.php'; ?>
</body>
</html>
