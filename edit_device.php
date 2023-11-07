<?php include('include/dbcon.php');
$ID = $_GET['id'];
?>
<?php include('header.php'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="admin_home.php">Home</a> / <a href="device.php">Devices</a></small> / Edit Book
                Information
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-pencil"></i> Edit Book</h2>
                    <ul class="nav navbar-right panel_toolbox">
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
                    <?php
                    $query1 = mysqli_query($con, "select * from device where Asset_No = $ID") or die(mysqli_error());
                    $row = mysqli_fetch_assoc($query1);
                    ?>

                    <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset No
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="Asset_No" value="<?php echo $row['Asset_No']; ?>"
                                       id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset Type
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="Asset_Type" value="<?php echo $row['Asset_Type']; ?>"
                                       id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset Brand
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="Asset_Brand" id="first-name2"
                                       value="<?php echo $row['Asset_Brand']; ?>" required="required"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset Model
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="Asset_Model" id="first-name2"
                                       value="<?php echo $row['Asset_Model']; ?>"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Year
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="Year" id="first-name2"
                                       value="<?php echo $row['Year']; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">OS Version
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="OS_Version" id="first-name2"
                                       value="<?php echo $row['OS_Version']; ?>"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset SerialNo
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="Asset_SerialNo" id="first-name2"
                                       value="<?php echo $row['Asset_SerialNo']; ?>"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Auto Update
                            </label>
                            <div class="col-md-4">
                                <select name="Auto_Update" class="select2_single form-control" required="required"
                                        tabindex="-1">
                                    <option value="<?php echo $row['Auto_Update']; ?>"><?php echo $row['Auto_Update']; ?></option>
                                    <?php switch ($row['Auto_Update']) {
                                        case "Disabled":
                                            ?>
                                            <option value="Unavailable">Auto Update Disable Unavailable</option>
                                            <?php break;
                                        case "Unavailable":
                                            ?>
                                            <option value="Disabled">Disabled</option>
                                            <?php break;
                                    } ?>
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">Asset Location
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="device_type" id="first-name2"
                                       value="<?php echo $row['Asset_Location']; ?>"
                                       class="form-control col-md-7 col-xs-12">
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
                                <button type="submit" name="update" class="btn btn-success"><i
                                            class="glyphicon glyphicon-save"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>

                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['update'])) {
                        $asset_no = $_POST['Asset_No'];
                        $asset_type = $_POST['Asset_Type'];
                        $asset_brand = $_POST['Asset_Brand'];
                        $asset_model = $_POST['Asset_Model'];
                        $year = $_POST['Year'];
                        $os_version = $_POST['OS_Version'];
                        $asset_serialno = $_POST['Asset_SerialNo'];
                        $auto_update = $_POST['Auto_Update'];
                        $asset_location = $_POST['Asset_location'];

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
                            mysqli_query($con, " UPDATE device SET Asset_No = '$asset_no', Asset_Type = '$asset_type', Asset_Brand = '$asset_brand', Asset_Model = '$asset_model', Year = '$year', OS_Version = '$os_version', Asset_SerialNo = '$asset_serialno', Auto_Update = '$auto_update', Asset_Location = '$asset_location'
                   WHERE Asset_No = '$id' AND Asset_SerialNo = '$serial_no'") or die(mysqli_error());
                            echo "<script>alert('Successfully Updated Book Info!'); window.location='device.php'</script>";
                        }
                    }
                    ?>

                    <!-- content ends here -->
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>