<?php
// Connect to database
include('include/dbcon.php');

// Get selected device type and brand
$type = $_POST['type'];
$brand = $_POST['brand'];

// Query to get list of brands based on device type and brand
$query = "SELECT DISTINCT OS_Version FROM device WHERE Asset_Type = '$type' AND Asset_Brand = '$brand' ";
$result = mysqli_query($con, $query);

// Generate HTML for OS Version dropdown
$html = '<option value="">Select</option>';
while($optionData = mysqli_fetch_assoc($result)) {
    $OS = $optionData['OS_Version'];
    $html .= '<option value="'.$OS.'">'.$OS.'</option>';
}

// Return HTML
echo $html;
?>
