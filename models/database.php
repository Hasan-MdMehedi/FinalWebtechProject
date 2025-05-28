<?php
function getDBConnection() {
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "test";

    $conn = new mysqli($servername, $db_username, $db_password, $database);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function addStudent($studentId, $fullName, $email, $phone, $address, $department, $username, $password) {
    $conn = getDBConnection();
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO students (studentId, fullName, email, phone, address, department, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        return "Prepare failed: " . $conn->error;
    }

    $stmt->bind_param("ssssssss", $studentId, $fullName, $email, $phone, $address, $department, $username, $hashedPassword);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $error = "Execute failed: " . $stmt->error;
        $stmt->close();
        $conn->close();
        return $error;
    }
}

    function authenticateStudent($username, $password) {
    $conn = getDBConnection();

    $stmt = $conn->prepare("SELECT * FROM students WHERE username = ?");
    if (!$stmt) {
        return ["error" => "Prepare failed: " . $conn->error];
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $stmt->close();
            $conn->close();
            return ["success" => $user];
        } else {
            $stmt->close();
            $conn->close();
            return ["error" => "Invalid password."];
        }
    } else {
        $stmt->close();
        $conn->close();
        return ["error" => "Username not found."];
    }
}

function deleteStudentByUsername($username) {
    $conn = getDBConnection();

    $stmt = $conn->prepare("DELETE FROM students WHERE username = ?");
    if (!$stmt) {
        $conn->close();
        return ["error" => "Prepare failed: " . $conn->error];
    }

    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        return ["success" => true];
    } else {
        $error = $stmt->error;
        $stmt->close();
        $conn->close();
        return ["error" => $error];
    }
}

?>
