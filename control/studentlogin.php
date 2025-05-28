<?php
session_start();
include '../models/database.php'; // Adjust the path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = authenticateStudent($username, $password);

    if (isset($result['success'])) {
        $_SESSION['student'] = $result['success'];
        header("Location: /phplabtask/view/profile.php");
        exit();
    } else {
        $_SESSION['login_error'] = $result['error'];
        header("Location: /phplabtask/view/studentsignin.php");
        exit();
    }
}
