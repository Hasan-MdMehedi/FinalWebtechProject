<?php
session_start();
if (!isset($_SESSION['student'])) {
    header("Location: studentsignin.php");
    exit();
}

$student = $_SESSION['student'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" href="../css/profile.css">

</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($student['fullName']); ?>!</h2>
    <p><strong>Student ID:</strong> <?php echo htmlspecialchars($student['studentId']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($student['email']); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($student['phone']); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($student['address']); ?></p>
    <p><strong>Department:</strong> <?php echo htmlspecialchars($student['department']); ?></p>
    <p><strong>Username:</strong> <?php echo htmlspecialchars($student['username']); ?></p>

    <br>
    <a href="../control/logout.php">Logout</a>
    <form method="POST" action="../control/delete.php" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
    <button type="submit" style="background-color: #d9534f; color: white; border: none; padding: 10px 20px; margin-top: 20px; border-radius: 8px; cursor: pointer;">
        Delete My Account
    </button>
</form>

</body>
</html>
