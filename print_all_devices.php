<?php include ('include/dbcon.php');

?>
<html>

<head>
		<title>Device Management System</title>
		
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
            <p style = "margin-left:30px; margin-top:10px; font-size:14pt; font-weight:bold;">Devices List</p>
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('currentdate.php'); ?>
        </div>			
		<br/>
		<br/>
		<br/>
<?php
							$result= mysqli_query($con,"select * from device order by ID ASC ") or die (mysqli_error());
?>
						<table class="table">
						  <thead>
								<tr>
								<tr>
                                    <th style="text-align:center;">Asset No</th>
                                    <th style="text-align:center;">Asset Type</th>
                                    <th style="text-align:center;">Asset Brand</th>
                                    <th style="text-align:center;">Asset Model</th>
                                    <th style="text-align:center;">Year</th>
                                    <th style="text-align:center;">OS Version</th>
                                    <th style="text-align:center;">Asset Serial No</th>
                                    <th style="text-align:center;">Auto Update</th>
                                    <th style="text-align:center;">Asset Ownership</th>
                                    <th style="text-align:center;">Asset Location</th>
								</tr>
								</tr>
						  </thead>   
						  <tbody>
<?php
							while ($row= mysqli_fetch_array ($result) ){
							$id=$row['ID'];
?>
							<tr>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_No']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_Type']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_Brand']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_Model']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Year']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['OS_Version']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_SerialNo']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Auto_Update']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_Ownership']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_Location']; ?></td>
							</tr>
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 

<br />
<br />

			</div>
	
	
	
	

	</div>
</body>


</html>