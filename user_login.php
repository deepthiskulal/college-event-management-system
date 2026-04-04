<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            text-align: center;
            font-family: Arial;
            margin-top: 80px;
        }
        .login-container {
            margin: 40px auto;
            width: 300px;
        }
        .login-options button {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #004080;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }
        .login-options button:hover {
            background-color: #0059b3;
        }
        .login-form input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form label {
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h2>User Login</h2>

    <!-- Form for User Login (username and password) -->
    <div class="login-container">
        <h3>Login</h3>
        <form action="userDashboard.php" method="POST" class="login-form">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>

        </form>
    </div>

    <!-- Form for Already Registered Users -->
    <div class="login-container">
        <form action="user_registered_login.php" method="POST">
            <button type="submit">Already Registered</button>
        </form>
    </div>

</body>
</html>
