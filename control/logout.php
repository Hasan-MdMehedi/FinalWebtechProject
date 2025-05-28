<?php
session_start();


$_SESSION = [];


session_destroy();


header("Location: ../view/studentsignin.php");
exit();
?>
