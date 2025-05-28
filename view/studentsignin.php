<?php
session_start();
$error = $_SESSION['login_error'] ?? "";
unset($_SESSION['login_error']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="../control/studentlogin.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login_btn">Login</button>
    </form>
    <p style="color:red;"><?php echo $error; ?></p>
</body>
</html>