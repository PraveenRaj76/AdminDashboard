<!-- sidebar navigation -->
<div class="col-md-3 left_col" id="sidebar-wrapper">
    <div class="left_col scroll-view" id="sidebar">

        <div class="navbar nav_title" style="border: 0;">
            <a href="admin_home.php" class="site_title"><img src="images/plutotv_logo.jpeg" style="width: 75px; height: 50px; border-radius: 50%; padding: 5px"> <span> LTIMindtree</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu prile quick info -->
        <a href="admin_profile.php">
            <div class="profile">
                <?php
                include('include/dbcon.php');
                $id = $_SESSION['id'];
                $user_query=mysqli_query($con,"select *  from users left join employee on users.username = employee.ps_no where users.username='$id'")or die(mysqli_error());
                $row=mysqli_fetch_array($user_query);
                $imagePath = "user_images/".$row['username'].".jpg"; {
                    ?>
                    <div class="profile_pic">
                        <?php if(file_exists($imagePath)): ?>
                            <img src="<?php echo $imagePath ?>" style="height:65px; width:75px; margin:10px;" class="img-circle">
                        <?php else: ?>
                            <img src="user_images/user.png" style="height:65px; width:75px; margin:10px;" class="img-circle">
                        <?php endif; ?>
                    </div>

                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?php echo $row['name']; ?></h2>
                    </div>
                <?php } ?>
            </div>
        </a>
        <!-- /menu prile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3 style="margin-top:85px;"></h3>
                <div class="separator"></div>
                <ul class="nav side-menu">
                    <li>
                        <a href="admin_home.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                </ul>
            </div>

            <div class="menu_section">
                <h3>STE's & Devices Information</h3>
                <div class="separator"></div>
                <ul class="nav side-menu">
                    <li>
                        <a href="employee.php"><i class="fa fa-users"></i> STE's</a>
                    </li>
                    <li>
                        <a href="device.php"><i class="fa fa-desktop"></i> Devices</a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Governance</h3>
                <div class="separator"></div>
                <ul class="nav side-menu">
                    <li>
                        <a href="admin_borrow.php"><i class="fa fa-shopping-cart"></i> Allocate</a>
                    </li>
                    <li>
                        <a href="admin_return.php"><i class="fa fa-undo"></i> Check-in</a>
                    </li>
                    <li>
                        <a href="available_devices.php"><i class="fa fa-desktop"></i> Checked-in Devices</a>
                    </li>
                    <li>
                        <a href="borrowed_devices.php"><i class="fa fa-desktop"></i> Checked-out Devices</a>
                    </li>
                    <li>
                        <a href="report.php"><i class= "fa fa-file"></i> Reports</a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>OTC Updates</h3>
                <div class="separator"></div>
                <ul class="nav side-menu">
                    <!-- <li>
                        <a href="#"><i class= "fa fa-file"></i> Do's & Don'ts</a>
                    </li>
                    <li>
                        <a href="#"><i class= "fa fa-file"></i> OTC Best Practice</a>
                    </li> -->
                    <li>
                        <a href="best_practices.php"><i class= "fa fa-file"></i> Best Practices</a>
                    </li>
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons-->
<!--        <div class="sidebar-footer hidden-small">-->
<!--            <a data-toggle="tooltip" data-placement="top" title="Settings">-->
<!--                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>-->
<!--            </a>-->
<!--            <a data-toggle="tooltip" data-placement="top" title="FullScreen">-->
<!--                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>-->
<!--            </a>-->
<!--            <a data-toggle="tooltip" data-placement="top" title="Lock">-->
<!--                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>-->
<!--            </a>-->
<!--            <a data-toggle="tooltip" data-placement="top" title="Logout">-->
<!--                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>-->
<!--            </a>-->
<!--        </div> -->
    </div>
</div>
<!-- end of sidebar navigation -->