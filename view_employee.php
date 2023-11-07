<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small><a href="admin_home.php">Home</a> / <a href="employee.php">Employee Profile</a></small> / View Individual
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-info"></i> Individual Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
							<a href="employee.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
							</a>
							</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
								
							<thead>
								<tr>
                                    <th>PS NO</th>
									<th>First Name</th>
                                    <th>Last Name</th>
									<th>Gender</th>
                                    <th>Date of Birth(YYYY-MM-DD)</th>
                                    <th>Role</th>
                                    <th>Grade</th>
                                    <th>Contact</th>
                                    <th>Location</th>
                                    <th>LTIM Mail</th>
                                    <th>Pluto Mail</th>
								</tr>
							</thead>
							<tbody>
<?php
			   
		if (isset($_GET['ps_no']))
		$ps_no=$_GET['ps_no'];
		$result1 = mysqli_query($con,"SELECT * FROM employee WHERE ps_no='$ps_no'");
		while($row = mysqli_fetch_array($result1)){
            $imagePath = "user_images/".$row['ps_no'].".jpg";
		?>
							<tr>
                                <td><?php echo $row['ps_no']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['grade']; ?></td>
                                <td><?php echo $row['role']; ?></td>
                                <td><?php echo $row['contact']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['LTIM_mail']; ?></td>
                                <td><?php echo $row['Pluto_mail']; ?></td>
                            </tr>
							<?php } ?>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>