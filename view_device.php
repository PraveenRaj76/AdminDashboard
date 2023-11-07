<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small><a href="admin_home.php">Home</a> / <a href="device.php">Devices</a></small> / View Individual
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
							<a href="device.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
							</a>
							</li>
<!--                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>-->
                        <!-- If needed 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
						-->
<!--                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>-->
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
								
							<thead>
								<tr>
									<th style="width:100px;">Device Image</th>
									<th>Serial Number</th>
                                    <th>Device Name</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Type</th>
								</tr>
							</thead>
							<tbody>
<?php
			   
		if (isset($_GET['id']))
		$id=$_GET['id'];
		$result1 = mysqli_query($con,"SELECT * FROM device where device_id = $id");
		while($row = mysqli_fetch_array($result1)){
            $imagePath = "device_images/".$row['serial_number'].".jpg";
		?>
							<tr>
								<td>
                                    <?php  if(file_exists($imagePath)): ?>
                                        <img src="<?php echo $imagePath ?>" width="75px" height="75px" style="border:4px groove #CCCCCC; border-radius:5px;">
                                    <?php  else: ?>
                                        <img src="device_images/no-image-available.png" width="75px" height="75px" style="border:4px groove #CCCCCC; border-radius:5px;">
                                    <?php  endif; ?>
								</td> 
								<td><?php echo $row['serial_number']; ?></td>
                                <td style="word-wrap: break-word; width: 20em;"><?php echo $row['device_name']; ?></td>
                                <td style="word-wrap: break-word; width: 10em;"><?php echo $row['device_brand']; ?></td>
								<td style="word-wrap: break-word; width: 10em;"><?php echo $row['device_model']; ?></td>
								<td><?php echo $row['device_type']; ?></td>
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