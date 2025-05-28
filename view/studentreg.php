<?php
include "../control/action.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="../css/studentreg.css">
</head>
<body>
  <div class="form-container">
    <h2>Student Registration Form</h2>
    <form action="" method="POST">
      <label for="studentId">Student ID</label>
      <input type="text" id="studentId" name="studentId" >

      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" >

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email">

      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="e.g. 0123456789" >

      <label for="address">Address</label>
      <textarea id="address" name="address" rows="3" ></textarea>

      <label for="department">Department</label>
      <select id="department" name="department" >
        <option value="">--Select--</option>
        <option value="CSE">Computer Science</option>
        <option value="EEE">Electrical Engineering</option>
        <option value="BBA">Business Administration</option>
        <option value="ENG">English</option>
      </select>

      <!-- New Username and Password Section -->
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" class="btn" name="submit_btn">Register</button>
    </form>
    <p><?php echo $error ?></p> 
  </div>
</body>
</html>
