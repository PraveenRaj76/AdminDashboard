<?php include('header.php'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="admin_home.php">Home</a> / <a href="device.php">Devices</a></small> / Add
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-desktop"></i> Device Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a href="device.php" style="background:none;">
                                <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- content starts here -->

                    <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset No <span class="required"
                                                                                                  style="color:red;">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="number" name="asset_no" id="first-name2" placeholder="Asset No"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset Type <span class="required"
                                                                                                    style="color:red;">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="asset_type" id="first-name2" placeholder="Asset Type"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset Brand <span class="required"
                                                                                                     style="color:red;">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="asset_brand" id="first-name2" placeholder="Asset Brand"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset Model <span class="required"
                                                                                                     style="color:red;">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="asset_model" id="first-name2" placeholder="Asset Model"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Year <span class="required"
                                                                                              style="color:red;">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="number" name="year" id="first-name2" placeholder="Year" required="required"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">OS Version <span class="required"
                                                                                                    style="color:red;">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="os_version" id="first-name2" placeholder="OS Version"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset Serial No <span
                                        class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="asset_serial_no" id="first-name2" placeholder="Asset Serial No"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Auto Update <span class="required"
                                                                                                     style="color:red;">*</span>
                            </label>
                            <div class="col-md-4">
                                <select name="auto_update" class="select2_single form-control" required="required"
                                        tabindex="-1">
                                    <option value="Select" selected>Select</option>
                                    <option value="Disabled">Disabled</option>
                                    <option value="Unavailable">Auto Update Disable Unavailable</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset Location <span class="required"
                                                                                                        style="color:red;">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="asset_location" id="first-name2" placeholder="Asset Location"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <a href="device.php">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i>
                                        Cancel
                                    </button>
                                </a>
                                <button type="submit" name="submit" class="btn btn-success"><i
                                            class="fa fa-plus-square"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>

                    <?php
                    include('include/dbcon.php');
                    if (isset($_POST['submit'])) {
                        $asset_no = $_POST['asset_no'];
                        $asset_type = $_POST['asset_type'];
                        $asset_brand = $_POST['asset_brand'];
                        $asset_model = $_POST['asset_model'];
                        $year = $_POST['year'];
                        $os_version = $_POST['os_version'];
                        $asset_serial_no = $_POST['asset_serial_no'];
                        $auto_update = $_POST['auto_update'];
                        $asset_ownership = $_POST['asset_ownership'];
                        $asset_location = $_POST['asset_location'];
                        $asset_availability = $_POST['asset_availability'];

                        $currentYear = date('Y');

                        if (!is_numeric($asset_no) || $asset_no <= 0) {
                            echo "<script>alert('Invalid Asset No'); window.location='add_device.php'</script>";
                        } elseif (!preg_match('/^[a-zA-Z\s]{2,50}$/', $asset_type)) {
                            echo "<script>alert('Invalid Asset Type! Only letters are allowed.'); window.location='add_device.php'</script>";
                        } elseif (!preg_match('/^[a-zA-Z\s]{2,50}$/', $asset_brand)) {
                            echo "<script>alert('Invalid Asset Brand! Only letters are allowed.'); window.location='add_device.php'</script>";
                        } elseif (!preg_match('/^[a-zA-Z0-9\s\-\\/]{5,50}$/', $asset_model)) {
                            echo "<script>alert('Invalid Asset Model! Only letters, numbers, spaces, hyphens, and backslashes are allowed.'); window.location='add_device.php'</script>";
                        } elseif (!is_numeric($year) || $year <= 1900 || $year > $currentYear) {
                            echo "<script>alert('Invalid Year! Please enter a valid numeric year.'); window.location='add_device.php'</script>";
                        } elseif (empty($os_version)) {
                            echo "<script>alert('OS Version is required!'); window.location='add_device.php'</script>";
                        } elseif (!preg_match('/^[A-Za-z0-9]{10,50}$/', $asset_serial_no)) {
                            echo "<script>alert('Invalid Asset Serial No! Only letters and numbers are allowed.'); window.location='add_device.php'</script>";
                        } elseif ($auto_update === 'Select') {
                            echo "<script>alert('Select a value from dropdown'); window.location='add_device.php'</script>";
                        } elseif (!preg_match('/^[A-Za-z\s\-,]+$/i', $asset_location)) {
                            echo "<script>alert('Invalid Asset Location format! Only letters, spaces and commas are allowed.'); window.location='add_device.php'</script>";
                        } else {
                            $result = mysqli_query($con, "select * from device WHERE Asset_No='$asset_no' ") or die (mysqli_error());
                            $row = mysqli_num_rows($result);
                            if ($row > 0) {
                                echo "<script>alert('Device already Exists!'); window.location='add_device.php'</script>";
                            } else {
                                mysqli_query($con, "INSERT INTO device (`ID`, `Asset_No`, `Asset_Type`, `Asset_Brand`, `Asset_Model`, `Year`, `OS_Version`, `Asset_SerialNo`, `Auto_Update`, `Asset_Ownership`, `Asset_Location`, `Asset_Availability`) 
                                VALUES ('',$asset_no, '$asset_type', '$asset_brand', '$asset_model', $year, '$os_version', '$asset_serial_no', '$auto_update', 'LTIMindtree', '$asset_location', 'Available')") or die(mysqli_error());
                                echo "<script>alert('Device successfully added!'); window.location='device.php'</script>";
                            }
                        }
                    }
                    ?>

                    <!-- content ends here -->
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>