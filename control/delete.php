<?php
session_start();
include '/../models/database.php';  // adjust the path as needed

if (!isset($_SESSION['student'])) {
    header("Location: ../view/studentsignin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $student = $_SESSION['student'];
    $result = deleteStudentByUsername($student['username']);

    if (isset($result['success'])) {
        $_SESSION = [];
        session_destroy();
        header("Location: ../view/studentsignin.php");
        exit();
    } else {
        echo "Error deleting account: " . $result['error'];
    }
} else {
    header("Location: profile.php");
    exit();
}
