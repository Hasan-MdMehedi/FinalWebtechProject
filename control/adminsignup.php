<?php
$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hashed

    $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Admin registered successfully. <a href='adminlogin.php'>Login now</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Admin Signup</title>
<link rel="stylesheet" href="../view/adminsignup.css">
</head>
<body>
    <h2>Admin Signup</h2>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" id="hello" name="register" value="Sign Up">
    </form>
</body>
</html>