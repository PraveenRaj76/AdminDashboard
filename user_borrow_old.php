<?php include('header.php'); ?>

<div class="page-title">
    <div class="title_left">
        <h3>
            <small><a href="user_home.php">Home</a> /</small> Check-out
        </h3>
    </div>
</div>
<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">

                <?php
                $id = $_SESSION['id'];
                $sql = mysqli_query($con, "SELECT * FROM employee WHERE ps_no = $id ");
                $row = mysqli_fetch_array($sql);
                ?>
                <h2>
                    Name: <span style="color:maroon;"><?php echo $row['firstname'] . " " . $row['lastname']; ?></span>
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <a href="user_home.php" style="background:none;">
                            <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <!-- content starts here -->

                <div class="row">
                    <form method="post">
                        <label>Device Type</label>
                        <label style="margin-left: 104px">Device Brand</label>
                        <label style="margin-left: 113px">OS Version</label>
                        <br>
                        <select name="type" id="type" style="width: 170px">
                            <option value="" selected="selected">Select</option>
                            <?php
                            $query = "SELECT DISTINCT Asset_Type FROM device";
                            $result = $con->query($query);
                            if ($result->num_rows > 0) {
                                while ($optionData = $result->fetch_assoc()) {
                                    $type = $optionData['Asset_Type'];
                                    ?>
                                    <option value="<?php echo $type; ?>"><?php echo $type; ?> </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#type').on('change', function() {
                                    var type = $(this).val();
                                    if (type) {
                                        $.ajax({
                                            url: 'getBrands.php',
                                            type: 'POST',
                                            data: { type: type },
                                            success: function(html) {
                                                $('#brand').html(html);
                                            }
                                        });
                                    } else {
                                        $('#brand').html('<option value="">Select</option>');
                                    }
                                });
                            });
                        </script>

                        <select name="brand" id="brand" style="width: 186px; margin-left: 10px;">
                            <option value="" selected="selected">Select</option>
                        </select>

                        <script>
                            $(document).ready(function() {
                                $('#brand').on('change', function() {
                                    var brand = $(this).val();
                                    var type = $('#type').val();
                                    if (brand) {
                                        $.ajax({
                                            url: 'getOSVersions.php',
                                            type: 'POST',
                                            data: { type: type, brand: brand },
                                            success: function(html) {
                                                $('#OS').html(html);
                                            }
                                        });
                                    } else {
                                        $('#OS').html('<option value="">Select</option>');
                                    }
                                });
                            });
                        </script>

                        <select name="OS" id="OS" style="width: 250px; margin-left: 10px;">
                            <option value="" selected="selected">Select</option>
                        </select>

                        <input type="submit" value="Submit" name="submit" style="margin-left: 10px">
                    </form>
                    <br />


                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="">
                            <form method="post" action="">
                                <thead>
                                <tr>
                                    <th>Asset No</th>
                                    <th>Asset Type</th>
                                    <th>Asset Brand</th>
                                    <th>Asset Model</th>
                                    <th>Year</th>
                                    <th>Asset SerialNo</th>
                                    <th>OS Version</th>
                                    <th>Asset Ownership</th>
                                    <th>Asset Location</th>
                                    <th>Asset Availability</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <?php
                                if (!isset($_POST['submit'])) {
                                    $device_query = mysqli_query($con, "SELECT * FROM device") or die(mysqli_error());
                                    $device_count = mysqli_num_rows($device_query);
                                    $num = $device_count;
                                    $name = $row['firstname'] . " " . $row['lastname'];
                                    $count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM device WHERE Asset_Availability = 'Taken by $name'"));
                                    while($device_row = mysqli_fetch_array($device_query)) {
                                        $serial_number = $device_row['Asset_SerialNo'];
                                        $asset_no = $device_row['Asset_No'];
                                        ?>
                                        <tr>
                                            <td><?php echo $device_row['Asset_No'] ?></td>
                                            <td><?php echo $device_row['Asset_Type'] ?></td>
                                            <td><?php echo $device_row['Asset_Brand'] ?></td>
                                            <td><?php echo $device_row['Asset_Model'] ?></td>
                                            <td><?php echo $device_row['Year'] ?></td>
                                            <td><?php echo $device_row['Asset_SerialNo'] ?></td>
                                            <td><?php echo $device_row['OS_Version'] ?></td>
                                            <td><?php echo $device_row['Asset_Ownership'] ?></td>
                                            <td><?php echo $device_row['Asset_Location'] ?></td>
                                            <td><?php echo $device_row['Asset_Availability'] ?></td>
                                            <td>
                                                <form method="post" action="">
                                                    <input type="hidden" name="serial_number" value="<?php echo $serial_number; ?>">
                                                    <input type="hidden" name="asset_no" value="<?php echo $asset_no; ?>">
                                                    <button name="borrow" class="btn btn-info" onclick="return confirmBorrow();" <?php if ($count >= 3 || $device_row['Asset_Availability'] != 'Available') {
                                                        echo 'disabled';
                                                    } ?>><i class="fa fa-check"></i> Check-out</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    $type = urldecode($_POST['type']);
                                    $brand = urldecode($_POST['brand']);
                                    $OS = urldecode($_POST['OS']);
                                    if ($type != "" && $brand == "") {
                                        $device_query = mysqli_query($con, "SELECT * FROM device WHERE Asset_Type = '$type'") or die(mysqli_error());
                                    } elseif ($type != "" && $brand != "" && $OS == "") {
                                        $device_query = mysqli_query($con, "SELECT * FROM device WHERE Asset_Type = '$type' AND Asset_Brand = '$brand'") or die(mysqli_error());
                                    } else {
                                        $device_query = mysqli_query($con, "SELECT * FROM device WHERE Asset_Type = '$type' AND Asset_Brand = '$brand' AND OS_Version = '$OS' ") or die(mysqli_error());
                                    }
                                    $device_count = mysqli_num_rows($device_query);
                                    $name = $row['firstname'] . " " . $row['lastname'];
                                    $count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM device WHERE Asset_Availability = 'Taken by $name'"));
                                    while ($device_row = mysqli_fetch_array($device_query)) {
                                        $serial_number = $device_row['Asset_SerialNo'];
                                        $asset_no = $device_row['Asset_No'];
                                        ?>
                                        <tr>
                                            <td><?php echo $device_row['Asset_No'] ?></td>
                                            <td><?php echo $device_row['Asset_Type'] ?></td>
                                            <td><?php echo $device_row['Asset_Brand'] ?></td>
                                            <td><?php echo $device_row['Asset_Model'] ?></td>
                                            <td><?php echo $device_row['Year'] ?></td>
                                            <td><?php echo $device_row['Asset_SerialNo'] ?></td>
                                            <td><?php echo $device_row['OS_Version'] ?></td>
                                            <td><?php echo $device_row['Asset_Ownership'] ?></td>
                                            <td><?php echo $device_row['Asset_Location'] ?></td>
                                            <td><?php echo $device_row['Asset_Availability'] ?></td>
                                            <td>
                                                <form method="post" action="">
                                                    <input type="hidden" name="serial_number" value="<?php echo $serial_number; ?>">
                                                    <input type="hidden" name="asset_no" value="<?php echo $asset_no; ?>">
                                                    <button name="borrow" class="btn btn-info" onclick="return confirmBorrow();" <?php if ($count >= 3 || $device_row['Asset_Availability'] != 'Available') {
                                                        echo 'disabled';
                                                    } ?>><i class="fa fa-check"></i> Check-out</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>

                                <?php
                                date_default_timezone_set('Asia/Kolkata');
                                $date_borrowed = date("Y-m-d H:i:s");
                                ?>
                                <input type="hidden" name="date_borrowed" class="new_text" id="sd" value="<?php echo $date_borrowed ?>" size="16" maxlength="10" />

                                <?php
                                if (isset($_POST['borrow'])) {
//                                    $ps_no = $_POST['ps_no'];
                                    $serial_number = $_POST['serial_number'];
                                    $asset_no =$_POST['asset_no'];

                                    $deviceCountQuery = mysqli_query($con, "SELECT * from device WHERE Asset_SerialNo = '$serial_number' and Asset_No = '$asset_no' ") or die(mysqli_error());
                                    $deviceCount = mysqli_fetch_assoc($deviceCountQuery);
                                    //$name = $row['firstname'] . " " . $row['lastname'];
                                    $device_borrow_name =   $deviceCount['Asset_Model'];

                                    mysqli_query($con, "UPDATE device SET Asset_Availability = 'Taken by $name' WHERE Asset_SerialNo = '$serial_number' and Asset_No = '$asset_no' ") or die(mysqli_error());
                                    mysqli_query($con, "INSERT INTO report(ps_no, Asset_No, serial_no, date_borrowed, date_returned, status)
                                    VALUES('$id', '$asset_no', '$serial_number', '$date_borrowed', null,'borrowed')") or die(mysqli_error());
                                    ?>

                                    <script>
                                        alert('Successfully Checked-out Device!'); window.location='user_return.php';
                                    </script>
                                    <?php
                                }
                                ?>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmBorrow(button) {
            return confirm("Are you sure you want to Check-out this device?");
        }
    </script>
</div>

<?php include('footer.php'); ?>
