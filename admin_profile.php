<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small><a href="admin_home.php">Home</a> /</small> Profile
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-user" style="padding-top: 10px;"></i> Employee Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a href="admin_home.php" style="background:none;">
                                    <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
                                    <th>PS No</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Date of Birth(YYYY-MM-DD)</th>
                                    <th>Role</th>
                                    <th>Grade</th>
                                    <th>Contact</th>
                                    <th>Location</th>
                                    <th>LTIM Mail</th>
                                    <th>Pluto Mail</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
                                $id = $_SESSION['id'];
                                $result= mysqli_query($con,"select *  from users left join employee on users.username = employee.ps_no where users.username = '".$_SESSION['id']."'") or die (mysqli_error());
                                while ($row= mysqli_fetch_array ($result) ){
    //                                $imagePath = "user_images/".$row['username'].".jpg";
                                ?>
							<tr>
<!--								<td>-->
<!--                                    --><?php // if(file_exists($imagePath)): ?>
<!--                                        <img src="--><?php //echo $imagePath ?><!--" width="75px" height="75px" style="border:4px groove #CCCCCC; border-radius:5px;">-->
<!--                                    --><?php // else: ?>
<!--                                        <img src="user_images/user.png" width="75px" height="75px" style="border:4px groove #CCCCCC; border-radius:5px;">-->
<!--                                    --><?php // endif; ?>
<!--								</td>-->

                                <td><?php echo $row['username']; ?></td>
								<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['grade']; ?></td>
                                <td><?php echo $row['role']; ?></td>
                                <td><?php echo $row['contact']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['LTIM_mail']; ?></td>
                                <td><?php echo $row['Pluto_mail']; ?></td>
								<td>
									<a class="btn btn-warning" for="ViewAdmin" href="edit_admin.php<?php echo '?admin_id='.$id; ?>">
										<i class="fa fa-edit"></i>
									</a>
								</td> 
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