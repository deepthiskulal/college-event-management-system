<?php
include_once 'classes/db1.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }
        .form-container {
            width: 350px;
            margin: auto;
            padding: 30px;
            background-color: #f1f1f1;
            border-radius: 10px;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #004080;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0059b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>User Login</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        
        <label>Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit" name="user_login">Login</button>
    </form>
</div>

</body>
</html>

<?php
if (isset($_POST["user_login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sample query, adjust based on your user table
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result)) {
        echo "<script>alert('Login Successful'); window.location.href='userDashboard.php';</script>";
    } else {
        echo "<script>alert('Invalid Credentials'); window.location.href='user_registered_login.php';</script>";
    }
}
?>
