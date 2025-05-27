<?php 
   $stu_id = $_POST["sid"];
  $stu_name = $_POST["sname"];
   $stu_address = $_POST["saddress"];
    $stu_class = $_POST["sclass"];
     $stu_phone = $_POST["sphone"];
     $stu_email = $_POST["semail"];
     $stu_credit = $_POST["scredit"];

                $conn = mysqli_connect("localhost","root","","crud") or die("conn failed");
               $sql= "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}',sphone= '{$stu_phone}',semail =  '{$stu_email}',scredit=  '{$stu_credit}'  WHERE sid = {$stu_id}";
                 $result = mysqli_query($conn,$sql) or die("resultfailed");

   header("location: http://localhost/phplabtask/control/index.php");

   mysqli_close($conn);
?>