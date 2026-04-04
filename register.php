
<?php
include_once 'classes/db1.php'; // Database connection
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <?php require 'utils/styles.php'; ?>
</head>
<body>
    <?php require 'utils/header.php'; ?>
    <div class="content">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <form method="POST">
                    <label>Student USN:</label><br>
                    <input type="text" name="usn" class="form-control" required><br>

                    <label>Student Name:</label><br>
                    <input type="text" name="name" class="form-control" required><br>

                    <label>Branch:</label><br>
                    <input type="text" name="branch" class="form-control" required><br>

                    <label>Semester:</label><br>
                    <input type="number" name="sem" class="form-control" required min="1" max="8"><br>

                    <label>Email:</label><br>
                    <input type="email" name="email" class="form-control" required><br>

                    <label>Phone:</label><br>
                    <input type="text" name="phone" class="form-control" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number"><br>

                    <button type="submit" name="register" class="btn btn-default">Submit</button><br><br>
                    <a href="usn.php"><u>Already registered?</u></a>
                </form>
            </div>
        </div>
    </div>
    <?php require 'utils/footer.php'; ?>
</body>
</html>

<?php
if (isset($_POST["register"])) {
    $usn = trim($_POST["usn"]);
    $name = trim($_POST["name"]);
    $branch = trim($_POST["branch"]);
    $sem = trim($_POST["sem"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    // Input validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format!'); window.location.href='register.php';</script>";
        exit();
    }

    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "<script>alert('Invalid phone number! Must be 10 digits.'); window.location.href='register.php';</script>";
        exit();
    }

    // Check if USN already exists
    $checkSQL = "SELECT * FROM participent WHERE usn = ?";
    $stmt = $conn->prepare($checkSQL);
    $stmt->bind_param("s", $usn);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('This USN is already registered!'); window.location.href='register.php';</script>";
        exit();
    }

    // Insert data securely using prepared statements
    $sql = "INSERT INTO participent (usn, name, branch, sem, email, phone) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiss", $usn, $name, $branch, $sem, $email, $phone);

    if ($stmt->execute()) {
        echo "<script>alert('Registered Successfully!'); window.location.href='usn.php';</script>";
    } else {
        echo "<script>alert('Error occurred. Try again.'); window.location.href='register.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
