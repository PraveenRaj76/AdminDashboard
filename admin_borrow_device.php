<?php include('header.php'); ?>
<?php
$ps_no = $_GET['ps_no'];
$user_query = mysqli_query($con, "SELECT * FROM employee WHERE ps_no = '$ps_no' ");
$user_row = mysqli_fetch_array($user_query);
?>
    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="admin_home.php">Home</a> /</small> Check-out
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
                    $sql = mysqli_query($con, "SELECT * FROM employee WHERE ps_no = '$ps_no' ");
                    $row = mysqli_fetch_array($sql);
                    ?>
                    <h2 style="padding-top: 10px;">
                        Name : <span
                                style="color:maroon;"><?php echo $user_row['firstname'] . " " . $user_row['lastname']; ?></span>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a href="admin_borrow.php" style="background:none;">
                                <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- content starts here -->

                    <form method="post">
                        <label>Device Type</label>
                        <label style="margin-left: 104px">Device Brand</label>
                        <br>
                        <select name="type" id="type" style="width: 170px">
                            <option value="">Select</option>
                            <option value="all" <?php if(isset($_POST['type']) && $_POST['type'] == 'all') echo 'selected="selected"'; ?>>All</option>
                            <?php
                            $query = "SELECT DISTINCT Asset_Type FROM device";
                            $result = $con->query($query);
                            if ($result->num_rows > 0) {
                                while ($optionData = $result->fetch_assoc()) {
                                    $type = $optionData['Asset_Type'];
                                    ?>
                                    <option value="<?php echo $type; ?>" <?php if(isset($_POST['type']) && $_POST['type'] == $type) echo 'selected="selected"'; ?>><?php echo $type; ?> </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                            $(document).ready(function () {

                                var selectedType = "<?php echo isset($_POST['type']) ? $_POST['type'] : ''; ?>";

                                $('#type').on('change', function () {
                                    var type = $(this).val();
                                    if (type) {
                                        $.ajax({
                                            url: 'getBrands.php',
                                            type: 'POST',
                                            data: {type: type},
                                            success: function (html) {
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
<!--                            <option value="" --><?php //if(isset($_POST['brand']) && $_POST['brand'] == '') echo 'selected="selected"'; ?><!-->Select</option>-->
                            <option value="">Select</option>
                            <?php
                            // Get selected device type
                            $selectedType = $_POST['type'];

                            // Query to get list of brands based on device type
                            if ($selectedType === 'all') {
                                $query = "SELECT DISTINCT Asset_Brand FROM device";
                            } else {
                                $query = "SELECT DISTINCT Asset_Brand FROM device WHERE Asset_Type = '$selectedType'";
                            }
                            $result = mysqli_query($con, $query);

                            // Generate HTML for brand dropdown
                            while ($optionData = mysqli_fetch_assoc($result)) {
                                $brand = $optionData['Asset_Brand'];
                                $selectedBrand = isset($_POST['brand']) && $_POST['brand'] == $brand ? 'selected="selected"' : '';
                                ?>
                                <option value="<?php echo $brand; ?>" <?php echo $selectedBrand; ?>><?php echo $brand; ?></option>
                                <?php
                            }
                            ?>
                        </select>

                        <input type="submit" value="Submit" name="submit" style="margin-left: 10px">

                        <script>
                            $(document).ready(function () {
                                $('form').on('submit', function (event) {
                                    var brand = $('#brand').val();
                                    var type = $('#type').val();

                                    if (!type && !brand) {
                                        event.preventDefault(); // Prevent form submission
                                        alert("Please select an option from dropdowns.");
                                    }
                                });
                            });

                        </script>
                    </form>

                    <div class="row" style="margin-top:30px;">

                        <br/>

                        <div class="table-responsive">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="table table-striped table-bordered">
                                <form method="post" action="">
                                    <thead>
                                    <tr>
                                        <th>Asset No</th>
                                        <th>Asset Type</th>
                                        <th>Asset Brand</th>
                                        <th>Asset Model</th>
                                        <th>Year</th>
                                        <th>OS_Version</th>
                                        <th>Asset_SerialNo</th>
                                        <th>Asset Availability</th>
                                        <th>Action</th>
                                        <?php
                                        if(isset($_POST['submit'])) {
                                        $type = urldecode($_POST['type']);
                                        $brand = urldecode($_POST['brand']);
                                        if ($type == "all" && $brand == "") {
                                            $device_query = mysqli_query($con, "SELECT * FROM device") or die (mysqli_error());
                                        } else if($type == "all" && $brand != "") {
                                            $device_query = mysqli_query($con, "SELECT * FROM device WHERE Asset_Brand = '$brand'") or die (mysqli_error());
                                        } else if($type != "" && $brand == "") {
                                            $device_query = mysqli_query($con, "SELECT * FROM device WHERE Asset_Type = '$type'") or die (mysqli_error());
                                        } else {
                                            $device_query = mysqli_query($con, "SELECT * FROM device WHERE Asset_Type = '$type' AND Asset_Brand = '$brand'") or die (mysqli_error());
                                        }
                                        $device_count = mysqli_num_rows($device_query);
                                        $name = $row['firstname'] . " " . $row['lastname'];
                                        $count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM device WHERE Asset_Availability = 'Taken by $name'"));
                                        while ($device_row = mysqli_fetch_array($device_query)) {
                                        $serial_number = $device_row['Asset_SerialNo'];
                                        $asset_no = $device_row['Asset_No'];
                                        ?>
                                    <tr>
                                        <input type="hidden" name="ps_no" value="<?php echo $id ?>">
                                        <td><?php echo $device_row['Asset_No'] ?></td>
                                        <td><?php echo $device_row['Asset_Type'] ?></td>
                                        <td><?php echo $device_row['Asset_Brand'] ?></td>
                                        <td><?php echo $device_row['Asset_Model'] ?></td>
                                        <td><?php echo $device_row['Year'] ?></td>
                                        <td><?php echo $device_row['OS_Version'] ?></td>
                                        <td><?php echo $device_row['Asset_SerialNo'] ?></td>
                                        <td><?php echo $device_row['Asset_Availability'] ?></td>
                                        <td>
                                            <form method="post" action="">
                                                <input type="hidden" name="serial_number"
                                                       value="<?php echo $serial_number; ?>">
                                                <input type="hidden" name="asset_no"
                                                       value="<?php echo $asset_no; ?>">
                                                <button name="borrow" class="btn btn-info"
                                                        onclick="return confirmBorrow();" <?php if ($device_row['Asset_Availability'] != 'Available') {
                                                    echo 'disabled';
                                                } ?>><i class="fa fa-check"></i> Check-out
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <?php } }
                                    date_default_timezone_set('Asia/Kolkata');
                                    $date_borrowed = date("Y-m-d H:i:s");
                                    ?>
                                    <input type="hidden" name="date_borrowed" class="new_text" id="sd"
                                           value="<?php echo $date_borrowed ?>" size="16" maxlength="10"/>

                                    <?php
                                    if (isset($_POST['borrow'])) {
                                        //$ps_no =$_POST['ps_no'];
                                        $serial_number = $_POST['serial_number'];
                                        $asset_no = $_POST['asset_no'];

                                        $deviceCountQuery = mysqli_query($con, "SELECT * from device where Asset_SerialNo = '$serial_number' and Asset_No = '$asset_no' ") or die (mysqli_error());
                                        $deviceCount = mysqli_fetch_assoc($deviceCountQuery);
                                        //$name = $row['firstname']." ".$row['lastname'];
                                        $device_borrow_name = $deviceCount['Asset_Model'];

                                        mysqli_query($con, "UPDATE device SET 	Asset_Availability = 'Taken by $name' where Asset_SerialNo = '$serial_number' and Asset_No = '$asset_no' ") or die (mysqli_error());
                                        mysqli_query($con, "INSERT INTO report(ps_no, Asset_No, serial_no, date_borrowed, date_returned, status)
									VALUES('$ps_no', '$asset_no', '$serial_number', '$date_borrowed', null,'borrowed')") or die (mysqli_error());
                                        ?>

                                        <script>
                                            alert('Successfully Checked-out Device!');
                                        </script>
                                        <?php
                                        echo('<script> location.href="admin_return.php";</script');
                                    }
                                    ?>

                                </form>
                            </table>

                        </div>

                    </div>
                </div>
                <script>
                    function confirmBorrow(button) {
                        return confirm("Are you sure you want to allocate this device?");
                    }
                </script>
                <!-- content ends here -->
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>