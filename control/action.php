<?php
include '../models/database.php'; // include the model

$error = "";

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $studentId = $_POST['studentId'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (
        empty($studentId) || empty($fullName) || empty($email) || empty($phone) ||
        empty($address) || empty($department) || empty($username) || empty($password)
    ) {
        $error = "Please fill in all required fields.";
    } else {
        $result = addStudent($studentId, $fullName, $email, $phone, $address, $department, $username, $password);

        if ($result === true) {
            header("Location: studentsignin.php");
            exit();
        } else {
            $error = $result;
        }
    }
}
?>
