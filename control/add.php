<?php
require_once("../models/database.php");
$conn = openConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['student_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $department = $_POST['department'];

    if (studentSignup($conn, $id, $name, $email, $phone, $address, $department)) {
        echo "Student Added Successfully.";
    } else {
        echo "Error adding student.";
    }
}
closeConnection($conn);
?>
