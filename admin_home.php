<?php include ('header.php'); ?>
    <div class="clearfix"></div>

    <!-- top tiles -->
    <div class="row tile_count" style="margin-right: -245px;">
<!--        <div class="animated flipInY col-md-1 col-sm-4 col-xs-4 tile_stats_count">-->
<!--            <div class="left"></div>-->
<!--            <div class="right">-->
<!--                --><?php
//                $result = mysqli_query($con,"SELECT * FROM employee");
//                $num_rows = mysqli_num_rows($result);
//                ?>
<!--                <a href="employee.php">-->
<!--                    <span class="count_top"><i class="fa fa-male"></i> <i class="fa fa-female"></i> STE's</span>-->
<!--                </a>-->
<!--                <div class="count green">--><?php //echo $num_rows; ?><!--</div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <?php
                $result = mysqli_query($con,"SELECT * FROM device");
                $total_rows = mysqli_num_rows($result);
                ?>
                <a href="device.php">
                    <span class="count_top"><i class="fa fa-desktop"></i> Total Devices in OTC</span>
                </a>
                <div class="count green"><?php echo $total_rows; ?></div>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <?php
                $result = mysqli_query($con,"SELECT * FROM device WHERE Asset_availability != 'Available'");
                $num_return_rows = mysqli_num_rows($result);
                ?>
                <a href="available_devices.php">
                    <span class="count_top"><i class="fa fa-desktop"></i> Checked-in Devices</span>
                </a>
                <div class="count green"><?php echo ($total_rows-$num_return_rows); ?></div>
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
                    <span class="count_top"><i class="fa fa-desktop"></i> Checked-Out Devices</span>
                </a>
                <div class="count green"><?php echo $num_rows; ?></div>
            </div>
        </div>

    </div>
    <!-- /top tiles -->



<?php include('slide.php'); ?>


<?php include ('footer.php'); ?>