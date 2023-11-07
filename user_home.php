<?php include('header.php'); ?>
    <div class="clearfix"></div>

    <!-- top tiles -->
    <div class="row tile_count" style="margin-right:-245px;">
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <?php
                $id = $_SESSION['id'];
                $res = mysqli_fetch_array(mysqli_query($con, "SELECT * from employee where ps_no = '$id'"));
                $name = $res['firstname']." ".$res['lastname'];
                $result = mysqli_query($con, "SELECT * FROM device WHERE Asset_Availability= 'Taken by $name'");
                $num_rows = mysqli_num_rows($result);
                ?>
                <a href="user_return.php">
                    <span class="count_top"><i class="fa fa-desktop"></i> Checked-Out by Me</span>
                </a>
                <div class="count green"><?php echo $num_rows; ?></div>
<!--                <span class="count_bottom ">Total of Devices Borrowed</span>-->
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <?php
                $query= mysqli_query($con,"SELECT * FROM device");
                $total_rows = mysqli_num_rows($query);
                $result1 = mysqli_query($con,"SELECT * FROM device WHERE Asset_Availability != 'Available'");
                $num_return_rows = mysqli_num_rows($result1);
                ?>
                <a href="available_devices.php">
                    <span class="count_top"><i class="fa fa-desktop"></i> Available Devices</span>
                </a>
                <div class="count green"><?php echo ($total_rows-$num_return_rows); ?></div>
<!--                <span class="count_bottom ">Total of Available Devices</span>-->
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <?php
                $result = mysqli_query($con,"SELECT * FROM report WHERE status = 'borrowed'");
                $num_rows = mysqli_num_rows($result);
                ?>
                <a href="borrowed_devices.php">
                    <span class="count_top"><i class="fa fa-desktop"></i> Checked-Out by Team</span>
                </a>
                <div class="count green"><?php echo $num_rows; ?></div>
<!--                <span class="count_bottom ">Total of Borrowed Devices</span>-->
            </div>
        </div>
    </div>
    <!-- /top tiles -->



<?php include('slide.php'); ?>


<?php include ('footer.php'); ?>