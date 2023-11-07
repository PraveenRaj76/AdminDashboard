<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small><a href="admin_home.php">Home</a> /</small> Checked-in Devices
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 style="padding-top: 10px;"><i class="fa fa-desktop"></i> Checked-in Devices Monitoring</h2>
                        <ul class="nav navbar-right panel_toolbox">
<!--                            <li>-->
<!--							<a href="print_returned_book.php" target="_blank" style="background:none;">-->
<!--							<button class="btn btn-danger"><i class="fa fa-print"></i> Print</button>-->
<!--							</a>-->
<!--							</li>-->
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
                        <ul class="nav nav-pills">
                            <li role="presentation" class=<?php echo (!isset($_GET['type']) || $_GET['type'] == 'all') ? 'active' : ''; ?>><a href="available_devices.php">All</a></li>
                            <?php
                            $query ="SELECT DISTINCT Asset_Type FROM device";
                            $result = $con->query($query);
                            if($result->num_rows> 0){
                                while($optionData=$result->fetch_assoc()){
                                    $type =$optionData['Asset_Type'];
                                    $active = (isset($_GET['type']) && $_GET['type'] == $type) ? 'active' : '';
                                    ?>
                                    <li role="presentation" class="<?php echo $active;?>"><a href="available_devices.php?type=<?php echo urlencode($type); ?>"><?php echo $type; ?></a></li>
                                    <?php
                                }}
                            ?>
                        </ul>
                        <div class="clearfix"></div><br>

						<div class="table-responsive">							
							<?php
                            $type = isset($_GET['type']) ? urldecode($_GET['type']) : 'all';
                            $whereClause = ($type == 'all') ? '' : "WHERE Asset_Type='$type'";
                            if($type == 'all') {
                                $return_query= mysqli_query($con,"select * from device where Asset_Availability='Available' order by ID ASC ") or die (mysqli_error());
                            } else {
                                $return_query = mysqli_query($con, "select * from device where Asset_Availability='Available' and Asset_Type='$type' order by ID ASC ") or die (mysqli_error());
                            }
                            $return_count = mysqli_num_rows($return_query);
							?>
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">		
							<thead>
								<tr>
                                    <th>Asset No</th>
                                    <th>Asset Type</th>
                                    <th>Asset Brand</th>
                                    <th>Asset Model</th>
                                    <th>Year</th>
                                    <th>OS Version</th>
                                    <th>Asset Serial No</th>
								</tr>
							</thead>
							<tbody>
<?php
							while ($return_row= mysqli_fetch_array ($return_query) ){
							$id=$return_row['ID'];
?>
							<tr>
                                <td><?php echo $return_row['Asset_No']; ?></td>
                                <td><?php echo $return_row['Asset_Type']; ?></td>
                                <td><?php echo $return_row['Asset_Brand']; ?></td>
                                <td><?php echo $return_row['Asset_Model'] ?></td>
                                <td><?php echo $return_row['Year'] ?></td>
                                <td><?php echo $return_row['OS_Version'] ?></td>
								<td><?php echo $return_row['Asset_SerialNo']; ?></td>
                            </tr>
							
							<?php 
							}
							if ($return_count <= 0){
								echo '
									<table style="float:right;">
										<tr>
											<td style="padding:10px;" class="alert alert-danger">No Books returned at this moment</td>
										</tr>
									</table>
								';
							} 							
							?>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>