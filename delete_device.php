<?php

include('include/dbcon.php');

$id = $_GET['id'];

$row = mysqli_fetch_array(mysqli_query($con, "SELECT * from device where Asset_No = $id"));

mysqli_query($con,"DELETE FROM device WHERE Asset_No = $id ")or die(mysqli_error());

header('location:device.php');
?>