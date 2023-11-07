<?php
include('session.php');

 include ('include/dbcon.php');

?>
<html>

<head>
		<title>Devices Management System</title>
		
		<style>
		
		
.container {
	width:100%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}
		
@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}

		</style>
		
<script>
function printPage() {
    window.print();
}
</script>
		
</head>


<body>
	<div class = "container">
		<div id = "header">
		<br/>
            <img src = "images/plutotv1.png" style = " float:left; margin-left: 25px; width:100px; height:100px; border-radius: 60%;">
            <center><h5 style = "font-style:Calibri; font-weight: bold; font-size: 35px; margin-top: 15px;"> Pluto TV</h5></center>
            <center><h5 style = "font-style:Calibri; font-weight: bold; font-size: 15px; margin-top: -40px;"> Devices Management System</h5></center>
			<button type="submit" id="print" onclick="printPage()" style=" position: absolute; right: 20;">Print</button>
            <br/>
            <p style = "margin-left:30px; margin-top:10px; font-size:14pt; font-weight:bold;">Employee List</p>
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('currentdate.php'); ?>
        </div>			
		<br/>
						<table class="table table-striped">
						  <thead>
								<tr>
                                    <th style="text-align:center;">Employee ID</th>
									<th style="text-align:center;">Employee Name</th>
                                    <th style="text-align:center;">Gender</th>
                                    <th style="text-align:center;">Date of Birth</th>
                                    <th style="text-align:center;">Role</th>
                                    <th style="text-align:center;">Grade</th>
                                    <th style="text-align:center;">Contact</th>
                                    <th style="text-align:center;">Location</th>
                                    <th style="text-align:center;">LTIM Mail</th>
                                    <th style="text-align:center;">Pluto Mail</th>
								</tr>
						  </thead>   
						  <tbody>
<?php
                            $result= mysqli_query($con,"select * from employee order by id ASC ") or die (mysqli_error());
							while ($row= mysqli_fetch_array ($result) ){
?>
							<tr>
                                <td style="text-align:center;"><?php echo $row['ps_no']; ?></td>
                                <td style="text-align:center;"><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                <td style="text-align:center;"><?php echo $row['gender']; ?></td>
                                <td style="text-align:center;"><?php echo date("d-m-Y", strtotime($row['dob'])); ?></td>
                                <td style="text-align:center;"><?php echo $row['grade']; ?></td>
                                <td style="text-align:center;"><?php echo $row['role']; ?></td>
                                <td style="text-align:center;"><?php echo $row['contact']; ?></td>
                                <td style="text-align:center;"><?php echo $row['address']; ?></td>
                                <td style="text-align:center;"><?php echo $row['LTIM_mail']; ?></td>
                                <td style="text-align:center;"><?php echo $row['Pluto_mail']; ?></td>
							</tr>
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 

<br />
<br />
<!--							--><?php
//								include('include/dbcon.php');
//								$user_query=mysqli_query($con,"select * from admin where admin_id='$id_session'")or die(mysqli_error());
//								$row=mysqli_fetch_array($user_query); {
//							?><!--        <h2><i class="glyphicon glyphicon-user"></i> --><?php //echo '<span style="color:blue; font-size:15px;">Prepared by:'."<br /><br /> ".$row['firstname']." ".$row['lastname']." ".'</span>';?><!--</h2>-->
<!--								--><?php //} ?>


			</div>
	
	
	
	

	</div>
</body>


</html>