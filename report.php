<?php include ('header.php'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="admin_home.php">Home</a> /</small> Reports
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <!--	<div class="col-xs-3">
		<form method="POST" action="sort_returned_book.php">
		<input type="date" class="form-control" name="sort" value="<?php //echo date('Y-m-d'); ?>">
		<button type="submit" class="btn btn-primary btn-outline" style="margin:-34px -195px 0px 0px; float:right;" name="ok"><i class="fa fa-calendar-o"></i> Sort By Date Returned</button>
		</form>
	</div>
-->
                    <h2><i class="fa fa-file-text"></i> Reports</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a href="admin_home.php" style="background:none;">
                                <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </li>
                        <li>
                            <a href="print_reports.php" target="_blank" style="background:none;">
                                <button class="btn btn-danger"><i class="fa fa-print"></i> Print</button>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <!--- sort -->
<!--                        <form method="GET" action="" class="form-inline">-->
<!--                                <div class="control-group">-->
<!--                                    <div class="controls">-->
<!--                                        <div class="col-md-3">-->
<!--                                            <input type="date" style="color:black;" value="--><?php //echo date('Y-m-d'); ?><!--" name="datefrom" class="form-control has-feedback-left" placeholder="Date From" aria-describedby="inputSuccess2Status4" required />-->
<!--                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>-->
<!--                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="control-group">-->
<!--                                    <div class="controls">-->
<!--                                        <div class="col-md-3">-->
<!--                                            <input type="date" style="color:black;" value="--><?php //echo date('Y-m-d'); ?><!--" name="dateto" class="form-control has-feedback-left" placeholder="Date To" aria-describedby="inputSuccess2Status4" required />-->
<!--                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>-->
<!--                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <button type="submit" name="search" class="btn btn-primary btn-outline"><i class="fa fa-calendar-o"></i> Search</button>-->
<!---->
<!--                        </form>-->
                </div>

                <div class="x_content">
                    <!-- content starts here -->
                    <ul class="nav nav-pills">
                        <li role="presentation" class=<?php echo (!isset($_GET['type']) || $_GET['type'] == 'all') ? 'active' : ''; ?>><a href="report.php">All</a></li>
                        <?php
                        $query ="SELECT DISTINCT Asset_Type FROM device";
                        $result = $con->query($query);
                        if($result->num_rows> 0){
                            while($optionData=$result->fetch_assoc()){
                                $type =$optionData['Asset_Type'];
                                $active = (isset($_GET['type']) && $_GET['type'] == $type) ? 'active' : '';
                                ?>
                                <li role="presentation" class="<?php echo $active;?>"><a href="report.php?type=<?php echo urlencode($type); ?>"><?php echo $type; ?></a></li>
                                <?php
                            }}
                        ?>
                    </ul>
                    <div class="clearfix"></div><br>

                    <div class="table-responsive">
                        <?php
                        $where ="";
                        if(isset($_GET['search'])){
                            $where = " and (date(borrow_device.date_borrowed) between '".date("Y-m-d",strtotime($_GET['datefrom']))."' and '".date("Y-m-d",strtotime($_GET['dateto']))."' ) ";
                        }

                        $type = isset($_GET['type']) ? urldecode($_GET['type']) : 'all';
                        $whereClause = ($type == 'all') ? '' : "WHERE Asset_Type='$type'";
                        if($type == 'all') {
                            $return_query= mysqli_query($con,"SELECT * from report
							LEFT JOIN device ON report.serial_no = device.Asset_SerialNo 
							LEFT JOIN employee ON report.ps_no = employee.ps_no 
							where report.status = 'returned' and report.Asset_No = device.Asset_No order by report.id DESC") or die (mysqli_error());
                        } else {
                            $return_query= mysqli_query($con,"SELECT * from report
							LEFT JOIN device ON report.serial_no = device.Asset_SerialNo 
							LEFT JOIN employee ON report.ps_no = employee.ps_no 
							where report.status = 'returned' and report.Asset_No = device.Asset_No and Asset_Type='$type' order by report.id DESC") or die (mysqli_error());
                        }

//                        $return_query= mysqli_query($con,"SELECT * from report
//							LEFT JOIN device ON report.serial_no = device.Asset_SerialNo
//							LEFT JOIN employee ON report.ps_no = employee.ps_no
//							where report.status = 'returned' order by report.id DESC") or die (mysqli_error());

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
                                <th>Borrower Name</th>
                                <th>Date Borrowed</th>
                                <th>Date Returned</th>
                                <th>Total Duration</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($return_row= mysqli_fetch_array ($return_query) ){
                                $id=$return_row['id'];
                                ?>
                                <tr>
                                    <td><?php echo $return_row['Asset_No']; ?></td>
                                    <td><?php echo $return_row['Asset_Type']; ?></td>
                                    <td><?php echo $return_row['Asset_Brand']; ?></td>
                                    <td><?php echo $return_row['Asset_Model'] ?></td>
                                    <td><?php echo $return_row['Year'] ?></td>
                                    <td><?php echo $return_row['OS_Version'] ?></td>
                                    <td><?php echo $return_row['Asset_SerialNo']; ?></td>
                                    <td><?php echo $return_row['firstname']." ".$return_row['lastname']; ?></td>
                                    <td><?php echo date("M d, Y h:i:s a",strtotime($return_row['date_borrowed'])); ?></td>
                                    <td><?php echo date("M d, Y h:i:s a",strtotime($return_row['date_returned'])); ?></td>
                                    <td><?php
                                        $date_borrowed = strtotime($return_row['date_borrowed']);
                                        $date_returned = strtotime($return_row['date_returned']);

                                        // Calculate the time difference in seconds
                                        $time_difference = $date_returned - $date_borrowed;

                                        // Convert the time difference to a human-readable format (e.g., hours, minutes, seconds)
                                        $hours = floor($time_difference / 3600);
                                        $minutes = floor(($time_difference % 3600) / 60);
                                        $seconds = $time_difference % 60;

                                        // Display the time difference
                                        if($hours == 0 and $minutes == 0) {
                                            echo "{$seconds} seconds";
                                        } elseif($hours == 0) {
                                            echo "{$minutes} minutes, {$seconds} seconds";
                                        } else {
                                            echo "{$hours} hours, {$minutes} minutes, {$seconds} seconds";
                                        }
                                        ?>
                                    </td>
                                    <!--								--><?php
                                    //								 if ($return_row['book_penalty'] != 'No Penalty'){
                                    //									 echo "<td class='' style='width:100px;'>".date("M d, Y h:m:s a",strtotime($return_row['due_date']))."</td>";
                                    //								 }else {
                                    //									 echo "<td>".date("M d, Y h:m:s a",strtotime($return_row['due_date']))."</td>";
                                    //								 }
                                    //
                                    //								?>
                                    <?php
                                    // if ($return_row['book_penalty'] != 'No Penalty'){
                                    //  echo "<td class='' style='width:100px;'>".date("M d, Y h:m:s a",strtotime($return_row['date_returned']))."</td>";
                                    // }else {
                                    //  echo "<td>".date("M d, Y h:m:s a",strtotime($return_row['date_returned']))."</td>";
                                    // }

                                    ?>
                                    <?php
                                    // if ($return_row['book_penalty'] != 'No Penalty'){
                                    //  echo "<td class='alert alert-warning' style='width:100px;'>Php ".$return_row['book_penalty'].".00</td>";
                                    // }else {
                                    //  echo "<td>".$return_row['book_penalty']."</td>";
                                    // }

                                    ?>
                                </tr>

                                <?php
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