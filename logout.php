<?php
include('include/dbcon.php');
include('session.php');

$logout_query=mysqli_query($con,"select * from users where username='$id_session'");
$row=mysqli_fetch_array($logout_query);
$user=$row['username'];

session_start();
session_destroy();
header('location:login.php');

?>

