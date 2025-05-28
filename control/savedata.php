<?php 
  $stu_name = $_POST["sname"];
   $stu_address = $_POST["saddress"];
    $stu_class = $_POST["class"];
     $stu_phone = $_POST["sphone"];
     $stu_email = $_POST["semail"];
     $stu_credit = $_POST["scredit"];

                $conn = mysqli_connect("localhost","root","","crud") or die("conn failed");
                 $sql = "INSERT INTO  student(sname,saddress,sclass,sphone,semail,scredit) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}','{$stu_email}','{$stu_credit}')";
                 $result = mysqli_query($conn,$sql) or die("resultfailed");

   header("location: http://localhost/phplabtask/control/index.php");

   mysqli_close($conn);
?>