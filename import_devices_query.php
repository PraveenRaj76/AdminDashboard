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

                $asset_no = isset($data[0]) ? mysqli_real_escape_string($con, $data[0]) : '';
                $asset_type = isset($data[1]) ? mysqli_real_escape_string($con, $data[1]) : '';
                $asset_brand = isset($data[2]) ? mysqli_real_escape_string($con, $data[2]) : '';
                $asset_model = isset($data[3]) ? mysqli_real_escape_string($con, $data[3]) : '';
                $year = isset($data[4]) ? intval($data[4]) : 0;
                $os_version = isset($data[5]) ? mysqli_real_escape_string($con, $data[5]) : '';
                $asset_serial_no = isset($data[6]) ? mysqli_real_escape_string($con, $data[6]) : '';
                $auto_update = isset($data[7]) ? mysqli_real_escape_string($con, $data[7]) : '';
                $asset_ownership = isset($data[8]) ? mysqli_real_escape_string($con, $data[8]) : '';
                $asset_location = isset($data[9]) ? mysqli_real_escape_string($con, $data[9]) : '';
                $asset_availability = isset($data[10]) ? mysqli_real_escape_string($con, $data[10]) : '';


                mysqli_query($con, "INSERT INTO device (`ID`, `Asset_No`, `Asset_Type`, `Asset_Brand`, `Asset_Model`, `Year`, `OS_Version`, `Asset_SerialNo`, `Auto_Update`, `Asset_Ownership`, `Asset_Location`, `Asset_Availability`) 
                                VALUES ('',$asset_no, '$asset_type', '$asset_brand', '$asset_model', $year, '$os_version', '$asset_serial_no', '$auto_update', '$asset_ownership', '$asset_location', '$asset_availability')") or die(mysqli_error());
            }

            fclose($handle);

            //print "Import done";
            echo "<script type='text/javascript'>alert('Successfully imported a CSV file!');</script>";
            echo "<script>document.location='device.php'</script>";
            //view upload form
        } else {
            echo "<script type='text/javascript'>alert('Please upload a valid CSV file!');</script>";
            echo "<script>document.location='import_devices.php'</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please upload a file!');</script>";
        echo "<script>document.location='import_devices.php'</script>";
    }
}

?>