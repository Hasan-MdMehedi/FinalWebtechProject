<<<<<<< HEAD
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
=======
<?php include 'header.php';
  if(isset($_POST['deletebtn'])){
   include "../model/config.php";

    $stu_id = $_POST['sid'];

    $sql = "DELETE from student  where  sid  = {$stu_id}";
    $result = mysqli_query($conn,$sql) or die ("Query invalid");
     header("location: http://localhost/phplabtask/control/index.php");
    mysqli_close($conn);

  }


?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
>>>>>>> 8daa09950648d49c19b7551a0efaa0b15a33f7da
