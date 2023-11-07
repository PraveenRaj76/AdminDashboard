<?php include('header.php'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="admin_home.php">Home</a> /</small> Allocate
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a href="admin_home.php" style="background:none;">
                                <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div classs="x_content">
                    <!-- content starts here -->

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">

                                <form method="post" action="">
                                    <select name="ps_no" class="select2_single form-control" required="required"
                                            tabindex="-1">
                                        <option value="0">Select Employee No</option>
                                        <?php
                                        $result = mysqli_query($con, "select * from employee where status = 'Active' order by firstname") or die (mysqli_error());
                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['user_id'];
                                            ?>
                                            <option value="<?php echo $row['ps_no']; ?>"><?php echo $row['ps_no']; ?>
                                                - <?php echo $row['firstname'].' '.$row['lastname']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <br/>
                                    <br/>
                                    <button name="submit" type="submit" class="btn btn-primary"
                                            style="margin-left:110px;"><i class="glyphicon glyphicon-log-in"></i> Submit
                                    </button>
                                </form>

                                <?php
                                include('include/dbcon.php');

                                if (isset($_POST['submit'])) {

                                    $ps_no = $_POST['ps_no'];

                                    $sql = mysqli_query($con, "SELECT * FROM employee WHERE ps_no = '$ps_no' ");
                                    $count = mysqli_num_rows($sql);
                                    $row = mysqli_fetch_array($sql);

                                    if ($count <= 0) {
                                        echo "<div class='alert alert-success'>" . 'No match found for the PS Number' . "</div>";
                                    } else {
                                        $school_number = $_POST['ps_no'];
                                        echo('<script> location.href="admin_borrow_device.php?ps_no=' . $ps_no . '";</script');
                                    }
                                }
                                ?>

                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <!-- content ends here -->
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>