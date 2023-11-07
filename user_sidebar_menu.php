<!-- sidebar navigation -->
<div class="col-md-3 left_col" id="sidebar-wrapper">
    <div class="left_col scroll-view" id="sidebar">

        <div class="navbar nav_title" style="border: 0;">
            <a href="user_home.php" class="site_title"><img src="images/plutotv_logo.jpeg" style="width: 75px; height: 50px; border-radius: 50%; padding: 5px"> <span> LTIMindtree</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <a href="user_profile.php">
            <div class="profile">
                <?php
                include('include/dbcon.php');
                $id = $_SESSION['id'];
                $user_query = mysqli_query($con,"select *  from users left join employee on users.username = employee.ps_no where users.username='$id'")or die(mysqli_error());
                $row = mysqli_fetch_array($user_query);
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
                        <h2><?php echo $row['firstname']." ".$row['lastname']; ?></h2>
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
                        <a href="user_home.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Transaction Information</h3>
                <div class="separator"></div>
                <ul class="nav side-menu">
                    <li>
                        <a href="user_borrow.php"><i class="fa fa-shopping-cart"></i> My Devices</a>
                    </li>
                    <li>
                        <a href="user_return.php"><i class="fa fa-undo"></i> Check-in</a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

    </div>
</div>
<!-- end of sidebar navigation -->