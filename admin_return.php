<?php include ('header.php'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="admin_home.php">Home</a> /</small> Check-in
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
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
                    <ul class="nav nav-pills">
                        <li role="presentation" class=<?php echo (!isset($_GET['type']) || $_GET['type'] == 'all') ? 'active' : ''; ?>><a href="admin_return.php">All</a></li>
                        <?php
                        $query ="SELECT DISTINCT Asset_Type FROM device";
                        $result = $con->query($query);
                        if($result->num_rows> 0){
                            while($optionData=$result->fetch_assoc()){
                                $type =$optionData['Asset_Type'];
                                $active = (isset($_GET['type']) && $_GET['type'] == $type) ? 'active' : '';
                                ?>
                                <li role="presentation" class="<?php echo $active;?>"><a href="admin_return.php?type=<?php echo urlencode($type); ?>"><?php echo $type; ?></a></li>
                                <?php
                            }}
                        ?>
                    </ul>
                    <div class="clearfix"></div><br>
                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

                            <thead>
                            <tr>
                                <th>Asset No</th>
                                <th>Asset Type</th>
                                <th>Serial Number</th>
                                <th>Device Name</th>
                                <th>Date Borrowed</th>
                                <th>Borrower Name</th>
                                <th>Action</th>
                                <?php
                                $type = isset($_GET['type']) ? urldecode($_GET['type']) : 'all';
                                $whereClause = ($type == 'all') ? '' : "WHERE Asset_Type='$type'";
                                if($type == 'all') {
                                    $borrow_query = mysqli_query($con,"SELECT * FROM report 
                                    LEFT JOIN device ON report.serial_no = device.Asset_SerialNo and report.Asset_No = device.Asset_No
                                    WHERE report.status = 'borrowed' ORDER BY report.id ASC") or die(mysqli_error());
                                } else {
                                    $borrow_query = mysqli_query($con,"SELECT * FROM report 
                                    LEFT JOIN device ON report.serial_no = device.Asset_SerialNo and report.Asset_No = device.Asset_No
                                    WHERE report.status = 'borrowed' && device.Asset_Type='$type' ORDER BY report.id ASC") or die(mysqli_error());
                                }

                                $borrow_count = mysqli_num_rows($borrow_query);
                                while($borrow_row = mysqli_fetch_array($borrow_query)){
                                date_default_timezone_set('Asia/Kolkata');
                                $date_returned = date("Y-m-d H:i:s");
                                $ps_no = $borrow_row['ps_no'];
                                $sql = mysqli_query($con,"SELECT * FROM employee WHERE ps_no = '$ps_no' ");
                                $row = mysqli_fetch_array($sql);
                                ?>
                              </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td><?php echo $borrow_row['Asset_No']; ?></td>
                                <td><?php echo $borrow_row['Asset_Type']; ?></td>
                                <td><?php echo $borrow_row['Asset_SerialNo']; ?></td>
                                <td><?php echo $borrow_row['Asset_Model']; ?></td>
                                <td><?php echo date("M d, Y h:i:s",strtotime($borrow_row['date_borrowed'])); ?></td>
                                <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                <td>
                                    <form method="post" action="">
                                        <input type="hidden" name="date_returned" class="new_text" id="sd" value="<?php echo $date_returned ?>" size="16" maxlength="10"  />
                                        <input type="hidden" name="borrow_id" value="<?php echo $borrow_row['Asset_No']; ?>">
                                        <input type="hidden" name="borrow_ps_no" value="<?php echo $borrow_row['ps_no']; ?>">
                                        <input type="hidden" name="borrow_serial_no" value="<?php echo $borrow_row['Asset_SerialNo']; ?>">
                                        <input type="hidden" name="date_borrowed" value="<?php echo $borrow_row['date_borrowed']; ?>">
                                        <input type="hidden" name="device_return_name" value="<?php echo $borrow_row['Asset_Model']; ?>">
                                        <button name="return" class="btn btn-danger" onclick="return confirmReturn();"><i class="glyphicon glyphicon-remove"></i> Check-in</button>
                                    </form>
                                </td>

                            </tr>

                            <?php
                            }
                            if ($borrow_count <= 0){
                                echo '
									<table style="float:right;">
										<tr>
											<td style="padding:10px;" class="alert alert-danger">No devices allocated</td>
										</tr>
									</table>
								';
                            }
                            ?>
                            <?php
                            if (isset($_POST['return'])) {
                                $borrow_id= $_POST['borrow_id'];
                                $borrow_ps_no= $_POST['borrow_ps_no'];
                                $borrow_serial_no= $_POST['borrow_serial_no'];
                                $date_borrowed= $_POST['date_borrowed'];
                                $date_returned = $_POST['date_returned'];
                                $device_return_name = $_POST['device_return_name'];
                                $name = $row['firstname']." ".$row['lastname'];
                                date_default_timezone_set('Asia/Kolkata');
                                $date_returned_now = date("Y-m-d H:i:s");

                                mysqli_query($con,"UPDATE device SET 	Asset_Availability = 'Available' where Asset_SerialNO = '$borrow_serial_no' and Asset_No = '$borrow_id'") or die (mysqli_error());
                                mysqli_query($con,"UPDATE report SET date_returned = '$date_returned' WHERE ps_no = '$borrow_ps_no' and serial_no = '$borrow_serial_no' and Asset_No = '$borrow_id' and status = 'borrowed' ") or die (mysqli_error());
                                mysqli_query($con,"UPDATE report SET status = 'returned' WHERE ps_no = '$borrow_ps_no' and serial_no = '$borrow_serial_no' and  Asset_No = '$borrow_id' and status = 'borrowed' ") or die (mysqli_error());
                                ?>

                                <script>
                                    alert('Successfully Checked-in Device!');
                                </script>
                                <?php
                                echo ('<script>location.href="admin_return.php";</script');
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <script>
                    function confirmReturn(button) {
                        return confirm("Are you sure you want to deallocate this device?");
                    }
                </script>
                <!-- content ends here -->
            </div>
        </div>
    </div>

<?php include ('footer.php'); ?>