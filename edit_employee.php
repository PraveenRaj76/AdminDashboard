<?php include('include/dbcon.php');
$ID = $_GET['ps_no'];
?>
<?php include('header.php'); ?>

<div class="page-title">
    <div class="title_left">
        <h3>
            <small><a href="admin_home.php">Home</a> / <a href="employee.php">Employee</a> /</small> Edit Employee
        </h3>
    </div>
</div>
<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-pencil"></i> Edit User</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <a href="employee.php" style="background:none;">
                            <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <!-- content starts here -->
                <?php
                $query = mysqli_query($con, "select * from employee where ps_no='$ID'") or die(mysqli_error());
                $row = mysqli_fetch_array($query);
                $imagePath = "user_images/" . $row['ps_no'] . ".jpg";
                ?>

                <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-4" for="first-name">First Name
                        </label>
                        <div class="col-md-3">
                            <input type="text" value="<?php echo $row['firstname']; ?>" name="firstname"
                                   id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="last-name">Last Name
                        </label>
                        <div class="col-md-3">
                            <input type="text" value="<?php echo $row['lastname']; ?>" name="lastname" id="last-name2"
                                   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="last-name">Gender
                        </label>
                        <div class="col-md-3">
                            <select name="gender" class="select2_single form-control" tabindex="-1">
                                <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                <?php if ($row['gender'] != "Male") {
                                    ?>
                                    <option value="Male">Male</option>
                                <?php } else { ?>
                                    <option value="Female">Female</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="last-name">Date of Birth
                        </label>
                        <div class="col-md-3">
                            <input type="date" value="<?php echo $row['dob']; ?>" name="dob" id="last-name2"
                                   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="last-name">Grade
                        </label>
                        <div class="col-md-3">
                            <input type="text" value="<?php echo $row['grade']; ?>" name="grade" id="last-name2"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="last-name">Role
                        </label>
                        <div class="col-md-3">
                            <input type="text" value="<?php echo $row['role']; ?>" name="role" id="last-name2"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="last-name">Contact
                        </label>
                        <div class="col-md-3">
                            <input type='tel' value="<?php echo $row['contact']; ?>" autocomplete="off" maxlength="11"
                                   name="contact" id="last-name2" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="last-name">Location
                        </label>
                        <div class="col-md-3">
                            <input type="text" value="<?php echo $row['address']; ?>" name="address" id="last-name2"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="last-name">LTIM Mail
                        </label>
                        <div class="col-md-3">
                            <input type="text" value="<?php echo $row['LTIM_mail']; ?>" name="ltim_mail" id="last-name2"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="last-name">Pluto Mail
                        </label>
                        <div class="col-md-3">
                            <input type="text" value="<?php echo $row['Pluto_mail']; ?>" name="pluto_mail"
                                   id="last-name2" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <a href="employee.php">
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
                $id = $_GET['ps_no'];
                if (isset($_POST['update'])) {
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $gender = $_POST['gender'];
                    $dob = $_POST['dob'];
                    $grade = $_POST['grade'];
                    $role = $_POST['role'];
                    $contact = $_POST['contact'];
                    $address = $_POST['address'];
                    $ltim_mail = $_POST['ltim_mail'];
                    $pluto_mail = $_POST['pluto_mail'];

                    $currentYear = date('Y');
                    $dobYear = date('Y', strtotime($dob));

                    if (!preg_match('/^[a-zA-Z\s]{3,50}$/', $firstname)) {
                        echo "<script>alert('Invalid First Name! Only letters are allowed.'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } elseif (!preg_match('/^[a-zA-Z\s]{1,50}$/', $lastname)) {
                        echo "<script>alert('Invalid Last Name! Only letters are allowed.'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } elseif (($currentYear - $dobYear) < 18) {
                        echo "<script>alert('Age should be 18 or older!'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } elseif (($currentYear - $dobYear) > 70) {
                        echo "<script>alert('Age should be less than 70!'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } elseif (!preg_match('/^[A-Za-z0-9]{2,4}$/', $grade)) {
                        echo "<script>alert('Invalid Grade format!'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } elseif (!preg_match('/^[A-Za-z\s]{10,50}$/', $role)) {
                        echo "<script>alert('Invalid Role format! Only letters are allowed.'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } elseif (!preg_match('/^\d{10}$/', $contact)) {
                        echo "<script>alert('Invalid Contact format! Please enter a 10-digit number.'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } elseif (!preg_match('/^[a-zA-Z0-9\s\-,]+$/i', $address)) {
                        echo "<script>alert('Invalid Address format! Please enter a valid address.'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } elseif (!filter_var($ltim_mail, FILTER_VALIDATE_EMAIL)) {
                        echo "<script>alert('Invalid LTIM Mail format! Please enter a valid email address.'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } elseif (!filter_var($pluto_mail, FILTER_VALIDATE_EMAIL)) {
                        echo "<script>alert('Invalid Pluto Mail format! Please enter a valid email address.'); window.location='edit_employee.php?ps_no=$id'</script>";
                    } else {
                        mysqli_query($con, " UPDATE employee SET firstname='$firstname', lastname='$lastname', gender='$gender', dob='$dob', grade='$grade', role='$role',
                      contact= '$contact', address='$address', LTIM_mail='$ltim_mail', Pluto_mail='$pluto_mail' WHERE ps_no = $id") or die(mysqli_error());
                        echo "<script>alert('Successfully Updated Employee     Info!'); window.location='employee.php'</script>";
                    }
                }
                ?>

                <!-- content ends here -->
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>


