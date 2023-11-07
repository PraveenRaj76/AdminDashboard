<?php include('header.php'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="admin_home.php">Home</a> /</small> Devices
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <a href="print_all_devices.php" target="_blank" style="background:none;">
                    <button class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print Devices List</button>
                </a>
                <br/>
                <br/>
                <div class="x_title">
                    <h2><i class="fa fa-desktop"></i> Device Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a href="admin_home.php" style="background:none;">
                                <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </li>
                        <li>
                            <a href="add_device.php" style="background:none;">
                                <button class="btn btn-primary btn-outline"><i class="fa fa-plus"></i> Add</button>
                            </a>
                        </li>
                        <li>
                            <a href="import_devices.php" style="background:none;">
                                <button class="btn btn-success btn-outline"><i class="fa fa-upload"></i> Import</button>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- content starts here -->
                    <ul class="nav nav-pills">
                        <li role="presentation"
                            class=<?php echo (!isset($_GET['type']) || $_GET['type'] == 'all') ? 'active' : ''; ?>><a
                                    href="device.php">All</a></li>
                        <?php
                        $query = "SELECT DISTINCT Asset_Type FROM device";
                        $result = $con->query($query);
                        if ($result->num_rows > 0) {
                            while ($optionData = $result->fetch_assoc()) {
                                $type = $optionData['Asset_Type'];
                                $active = (isset($_GET['type']) && $_GET['type'] == $type) ? 'active' : '';
                                ?>
                                <li role="presentation" class="<?php echo $active; ?>"><a
                                            href="device.php?type=<?php echo urlencode($type); ?>"><?php echo $type; ?></a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <div class="clearfix"></div>
                    <br>

                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"
                               id="example">

                            <thead>
                            <tr>
                                <!--                           <th style="width:100px;">Book Image</th>-->
                                <th>Asset No</th>
                                <th>Asset Type</th>
                                <th>Asset Brand</th>
                                <th>Asset Model</th>
                                <th>Year</th>
                                <th>OS Version</th>
                                <th>Asset Serial No</th>
<!--                                <th>Auto Update</th>-->
<!--                                <th>Asset Ownership</th>-->
<!--                                <th>Asset Location</th>-->
                                <th>Asset Availability</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $type = isset($_GET['type']) ? urldecode($_GET['type']) : 'all';
                            $whereClause = ($type == 'all') ? '' : "WHERE Asset_Type='$type'";
                            $result = mysqli_query($con, "SELECT * FROM device $whereClause ORDER BY Asset_No ASC") or die (mysqli_error());
                            while ($row = mysqli_fetch_array($result)) {
                                $device_id = $row['Asset_No'];
                                // $category_id=$row['category_id'];
                                //$cat_query = mysqli_query($con,"select * from category where category_id = '$category_id'")or die(mysqli_error());
                                //$cat_row = mysqli_fetch_array($cat_query);
                                ?>
                                <tr>
                                    <td><?php echo $row['Asset_No']; ?></td>
                                    <td><?php echo $row['Asset_Type']; ?></td>
                                    <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_Brand']; ?></td>
                                    <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_Model']; ?></td>
                                    <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Year']; ?></td>
                                    <td style="word-wrap: break-word; width: 10em;"><?php echo $row['OS_Version']; ?></td>
                                    <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_SerialNo']; ?></td>
<!--                                    <td style="word-wrap: break-word; width: 10em;">--><?php //echo $row['Auto_Update']; ?><!--</td>-->
<!--                                    <td style="word-wrap: break-word; width: 10em;">--><?php //echo $row['Asset_Ownership']; ?><!--</td>-->
<!--                                    <td style="word-wrap: break-word; width: 10em;">--><?php //echo $row['Asset_Location']; ?><!--</td>-->
                                    <td style="word-wrap: break-word; width: 10em;"><?php echo $row['Asset_Availability']; ?></td>
                                    <td>
                                        <!--                                        <a class="btn btn-primary" for="ViewAdmin" href="view_device.php-->
                                        <?php //echo '?id='.$device_id;
                                        ?><!--">-->
                                        <!--                                            <i class="fa fa-search"></i>-->
                                        <!--                                        </a>-->
                                        <a class="btn btn-warning" for="ViewAdmin"
                                           href="edit_device.php<?php echo '?id=' . $device_id; ?>">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger" for="DeleteAdmin"
                                           href="#delete<?php echo $device_id; ?>" data-toggle="modal"
                                           data-target="#delete<?php echo $device_id; ?>">
                                            <i class="glyphicon glyphicon-trash icon-white"></i>
                                        </a>


                                        <!-- delete modal user -->
                                        <div class="modal fade" id="delete<?php echo $device_id; ?>" tabindex="-1"
                                             role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel"><i
                                                                    class="glyphicon glyphicon-user"></i> User</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="alert alert-danger">
                                                            Are you sure you want to delete?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-inverse" data-dismiss="modal"
                                                                    aria-hidden="true"><i
                                                                        class="glyphicon glyphicon-remove icon-white"></i>
                                                                No
                                                            </button>
                                                            <a href="delete_device.php<?php echo '?id=' . $device_id; ?>"
                                                               style="margin-bottom:5px;" class="btn btn-primary"><i
                                                                        class="glyphicon glyphicon-ok icon-white"></i>
                                                                Yes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

<?php include('footer.php'); ?>