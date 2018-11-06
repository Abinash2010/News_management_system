<?php   
session_start();
include '../connection/connection.php';
session_destroy();
header("location:../login.php"); 
exit();
?>