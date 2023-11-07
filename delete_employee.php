<?php 

include('include/dbcon.php');

$get_id = $_GET['ps_no'];
echo $get_id;
//$row = mysqli_fetch_array(mysqli_query($con, "SELECT * from employee where ps_no = $get_id"));

mysqli_query($con,"UPDATE employee SET status = 'Inactive' WHERE ps_no = $get_id")or die(mysqli_error());
//mysqli_query($con,"DELETE FROM employee WHERE ps_no = $get_id")or die(mysqli_error());
mysqli_query($con, "DELETE FROM users WHERE username = $get_id")or die(mysqli_error());

header('location:employee.php');
?>