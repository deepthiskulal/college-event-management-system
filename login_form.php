<!-- login_form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Select Role</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }
        .role-btn {
            padding: 15px 30px;
            margin: 20px;
            font-size: 18px;
            cursor: pointer;
            background-color: #001f3f;
            color: white;
            border: none;
            border-radius: 10px;
        }
        .role-btn:hover {
            background-color: #003366;
        }
    </style>
</head>
<body>

    <h1>Login As</h1>
    <button class="role-btn" onclick="location.href='admin_login.php'">Admin</button>
    <button class="role-btn" onclick="location.href='user_login.php'">User</button>

</body>
</html>
