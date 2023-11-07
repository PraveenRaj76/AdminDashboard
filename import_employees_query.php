<?php
include('include/dbcon.php');
if (isset($_POST['submit'])) {
    if (isset($_FILES['filename']) && $_FILES['filename']['error'] === UPLOAD_ERR_OK) {
        $fileExtension = strtolower(pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION));

        if ($fileExtension === 'csv') {
            //Import uploaded file to Database
            $handle = fopen($_FILES['filename']['tmp_name'], "r");
            $count = 0;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if ($count == 0) {
                    $count++;
                    continue;
                }
                $ps_no = $data[0];
                $firstname = $data[1];
                $lastname = $data[2];
                $gender = $data[3];
                $dob = date('Y-m-d', strtotime($data[4]));
                $role = $data[5];
                $grade = $data[6];
                $contact = $data[7];
                $address = $data[8];
                $password = md5("Pluto@123");
                mysqli_query($con, "insert into employee (id, ps_no, firstname, lastname, gender, dob, grade, role, contact, address, status)
						    values ( '', '$ps_no','$firstname', '$lastname', '$gender', '$dob','$grade', '$role', '$contact', '$address', 'Active') ") or die(mysqli_error());
                mysqli_query($con, "insert into users(id, name, username, password, type)
                            values ('', '$firstname" . " " . "$lastname', '$ps_no', '$password', 'user')");
            }

            fclose($handle);

            //print "Import done";
            echo "<script type='text/javascript'>alert('Successfully imported a CSV file!');</script>";
            echo "<script>document.location='employee.php'</script>";
            //view upload form
        } else {
            echo "<script type='text/javascript'>alert('Please upload a valid CSV file!');</script>";
            echo "<script>document.location='import_employees.php'</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please upload a file!');</script>";
        echo "<script>document.location='import_employees.php'</script>";
    }
}

?>