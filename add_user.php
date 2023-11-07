<?php include('header.php'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="admin_home.php">Home</a> / <a href="employee.php">STE's</a> /</small> Add
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-users"></i> STE Information</h2>
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

                    <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name"> Employee ID <span class="required"
                                                                                                      style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="number" name="ps_no" id="first-name2" placeholder="Employee ID....."
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">First Name <span class="required"
                                                                                                    style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="text" name="firstname" placeholder="First Name....." id="first-name2"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Last Name <span class="required"
                                                                                                  style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="text" name="lastname" placeholder="Last Name....." id="last-name2"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Gender <span class="required"
                                                                                               style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <select name="gender" class="select2_single form-control" required="required"
                                        tabindex="-1">
                                    <option value="Select" selected>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">DOB <span class="required"
                                                                                            style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="date" name="dob" max="<?= date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Grade <span class="required"
                                                                                              style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="text" name="grade" placeholder="Grade....." id="last-name2"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Role <span class="required"
                                                                                             style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="text" name="role" placeholder="Role....." id="last-name2"
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Contact <span class="required"
                                                                                                style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="tel" autocomplete="off" maxlength="11" name="contact" id="last-name2"
                                       placeholder="Mobile No....." required="required"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Address <span class="required"
                                                                                                style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="text" name="address" id="last-name2" placeholder="Address....."
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">LTIM Mail <span class="required"
                                                                                                  style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="text" name="ltim_mail" id="last-name2" placeholder="LTIM Mail....."
                                       required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Pluto Mail <span class="required"
                                                                                                   style="color:red;">*</span>
                            </label>
                            <div class="col-md-3">
                                <input type="text" name="pluto_mail" id="last-name2" placeholder="Pluto Mail....."
                                       required="required" class="form-control col-md-7 col-xs-12">
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
                                <button type="submit" name="submit" class="btn btn-success"><i
                                            class="fa fa-plus-square"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>

                    <?php
                    include('include/dbcon.php');
                    if (isset($_POST['submit'])) {
                        $ps_no = $_POST['ps_no'];
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $gender = $_POST['gender'];
                        $dob = date('d-m-Y', strtotime($_POST['dob']));
                        $grade = $_POST['grade'];
                        $role = $_POST['role'];
                        $contact = $_POST['contact'];
                        $address = $_POST['address'];
                        $ltimmail = $_POST['ltim_mail'];
                        $plutomail = $_POST['pluto_mail'];

                        $currentYear = date('Y');
                        $dobYear = date('Y', strtotime($dob));

                        if (!is_numeric($ps_no) || $ps_no <= 0) {
                            echo "<script>alert('Invalid Employee ID'); window.location='add_user.php'</script>";
                        } elseif (!preg_match('/^[a-zA-Z\s]{3,50}$/', $firstname)) {
                            echo "<script>alert('Invalid First Name! Only letters are allowed.'); window.location='add_user.php'</script>";
                        } elseif (!preg_match('/^[a-zA-Z\s]{1,50}$/', $lastname)) {
                            echo "<script>alert('Invalid Last Name! Only letters are allowed.'); window.location='add_user.php'</script>";
                        } elseif (($currentYear - $dobYear) < 18) {
                            echo "<script>alert('Age should be 18 or older!'); window.location='add_user.php'</script>";
                        } elseif (($currentYear - $dobYear) > 70) {
                            echo "<script>alert('Age should be less than 70!'); window.location='add_user.php'</script>";
                        } elseif ($gender === 'Select') {
                            echo "<script>alert('Select Gender'); window.location='add_user.php'</script>";
                        } elseif (!preg_match('/^[A-Za-z0-9]{2,4}$/', $grade)) {
                            echo "<script>alert('Invalid Grade format!'); window.location='add_user.php'</script>";
                        } elseif (!preg_match('/^[A-Za-z\s]{10,50}$/', $role)) {
                            echo "<script>alert('Invalid Role format! Only letters are allowed.'); window.location='add_user.php'</script>";
                        } elseif (!preg_match('/^\d{10}$/', $contact)) {
                            echo "<script>alert('Invalid Contact format! Please enter a 10-digit number.'); window.location='add_user.php'</script>";
                        } elseif (!preg_match('/^[a-zA-Z0-9\s\-,]+$/i', $address)) {
                            echo "<script>alert('Invalid Address format! Please enter a valid address.'); window.location='add_user.php'</script>";
                        } elseif (!filter_var($ltimmail, FILTER_VALIDATE_EMAIL)) {
                            echo "<script>alert('Invalid LTIM Mail format! Please enter a valid email address.'); window.location='add_user.php'</script>";
                        } elseif (!filter_var($plutomail, FILTER_VALIDATE_EMAIL)) {
                            echo "<script>alert('Invalid Pluto Mail format! Please enter a valid email address.'); window.location='add_user.php'</script>";
                        } else {
                            $result = mysqli_query($con, "select * from employee WHERE ps_no='$ps_no' ") or die (mysqli_error());
                            $row = mysqli_num_rows($result);
                            if ($row > 0) {
                                echo "<script>alert('Employee already active!'); window.location='add_user.php'</script>";
                            } else {
                                $password = md5("Pluto@123");
                                $final_dob = date('Y-m-d', strtotime($dob));
                                mysqli_query($con, "insert into employee (id, ps_no, firstname, lastname, gender, dob, grade, role, contact, address, LTIM_mail, Pluto_mail, status)
						    values ( '', '$ps_no','$firstname', '$lastname', '$gender', '$final_dob','$grade', '$role', '$contact', '$address', '$ltimmail', '$plutomail', 'Active') ") or die(mysqli_error());
                                mysqli_query($con, "insert into users(id, name, username, password, type)
                            values ('', '$firstname" . " " . "$lastname', '$ps_no', '$password', 'user')");
                                echo "<script>alert('User successfully added!'); window.location='employee.php'</script>";
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