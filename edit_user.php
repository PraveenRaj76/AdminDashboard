<?php include ('include/dbcon.php'); ?>
<?php include ('header.php'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="user_home.php">Home</a> / <a href="user_profile.php">Profile</a> /</small> Edit
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-pencil"></i> Edit</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a href="user_profile.php" style="background:none;">
                                <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- content starts here -->
                    <?php
                    $id=$_SESSION['id'];
                    $query=mysqli_query($con,"select * from users left join employee on users.username = employee.ps_no where users.username = $id")or die(mysqli_error());
                    $row=mysqli_fetch_array($query);
                    $imagePath = "user_images/".$row['username'].".jpg";
                    ?>

                    <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
<!--                        <div class="form-group">-->
<!--                            <label class="control-label col-md-4" for="last-name">Admin Image-->
<!--                            </label>-->
<!--                            <div class="col-md-4">-->
<!--                                --><?php // if(file_exists($imagePath)): ?>
<!--                                    <img src="--><?php //echo $imagePath ?><!--" width="75px" height="75px" style="border:4px groove #CCCCCC; border-radius:5px;">-->
<!--                                --><?php // else: ?>
<!--                                    <img src="user_images/user.png" width="75px" height="75px" style="border:4px groove #CCCCCC; border-radius:5px;">-->
<!--                                --><?php // endif; ?>
<!--                                <input type="file" style="height:44px; margin-top:10px;" name="image" id="last-name2" class="form-control col-md-7 col-xs-12">-->
<!--                                <br>-->
<!--                                --><?php //echo "Format : ps_no.jpg" ?>
<!--                            </div>-->
<!--                        </div>-->
                        <div class="form-group">
                            <label class="control-label col-md-4" for="first-name">First Name
                            </label>
                            <div class="col-md-4">
                                <input type="text" value="<?php echo $row['firstname']; ?>" name="firstname" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Last Name
                            </label>
                            <div class="col-md-4">
                                <input type="text" value="<?php echo $row['lastname']; ?>" name="lastname" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Gender
                            </label>
                            <div class="col-md-4">
                                <select name="gender" class="select2_single form-control" tabindex="-1" >
                                    <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                    <?php if($row['gender'] != "Male") {
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
                            <div class="col-md-4">
                                <input type="date" value="<?php echo $row['dob']; ?>" name="dob" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Grade
                            </label>
                            <div class="col-md-4">
                                <select name="grade" class="select2_single form-control" tabindex="-1" >
                                    <option value="<?php echo $row['grade']; ?>"><?php echo $row['grade']; ?></option>
                                    <?php switch($row['grade']) {
                                        case "P1":
                                    ?>
                                            <option value="P2">P2</option>
                                            <option value="P3">P3</option>
                                            <option value="P4">P4</option>
                                    <?php break;
                                        case "P2":
                                    ?>
                                            <option value="P1">P1</option>
                                            <option value="P3">P3</option>
                                            <option value="P4">P4</option>
                                    <?php break;
                                        case "P3":
                                    ?>
                                            <option value="P1">P1</option>
                                            <option value="P2">P2</option>
                                            <option value="P4">P4</option>
                                    <?php break;
                                        default: ?>
                                            <option value="P1">P1</option>
                                            <option value="P2">P2</option>
                                            <option value="P3">P3</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Role
                            </label>
                            <div class="col-md-4">
                                <input type="text" value="<?php echo $row['role']; ?>" name="role" id="last-name2" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Contact
                            </label>
                            <div class="col-md-3">
                                <input type='tel' value="<?php echo $row['contact']; ?>" autocomplete="off"  maxlength="11" name="contact" id="last-name2" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Location
                            </label>
                            <div class="col-md-4">
                                <input type="text" value="<?php echo $row['address']; ?>" name="address" id="last-name2" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">LTIM Mail
                            </label>
                            <div class="col-md-4">
                                <input type="text" value="<?php echo $row['LTIM_mail']; ?>" name="ltim_mail" id="last-name2" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="last-name">Pluto Mail
                            </label>
                            <div class="col-md-4">
                                <input type="text" value="<?php echo $row['Pluto_mail']; ?>" name="pluto_mail" id="last-name2" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <a href="user_profile.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                <button type="submit" name="update" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Update</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['update'])) {
                        $image = $_FILES["image"] ["name"];
                        $image_name= addslashes($_FILES['image']['name']);
                        $size = $_FILES["image"] ["size"];
                        $error = $_FILES["image"] ["error"];


//move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);
                        $profile=$_FILES["image"]["name"];

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


                        $result=mysqli_query($con,"select * from employee") or die (mysqli_error());
                        $row=mysqli_num_rows($result);

                        {
                            mysqli_query($con, " UPDATE employee SET firstname='$firstname', lastname='$lastname', gender='$gender', dob='$dob', grade='$grade', role='$role',
                      contact= '$contact', address='$address', LTIM_mail='$ltim_mail', Pluto_mail='$pluto_mail' WHERE ps_no = $id") or die(mysqli_error());
                            echo "<script>alert('Successfully Updated User Info!'); window.location='user_profile.php'</script>";
                        }
                    }
                    ?>

                    <!-- content ends here -->
                </div>
            </div>
        </div>
    </div>

<?php include ('footer.php'); ?>