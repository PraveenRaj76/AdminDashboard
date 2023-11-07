    <?php
    // Connect to database
    include('include/dbcon.php');

    // Get selected device type
    $type = $_POST['type'];

    // Query to get list of brands based on device type
    if ($type === 'all') {
        $query = "SELECT DISTINCT Asset_Brand FROM device";
    } else {
        $query = "SELECT DISTINCT Asset_Brand FROM device WHERE Asset_Type = '$type'";
    }
    //$query = "SELECT DISTINCT Asset_Brand FROM device WHERE Asset_Type = '$type'";
    $result = mysqli_query($con, $query);

    // Generate HTML for brand dropdown
    $html = '<option value="">Select</option>';
    while($optionData = mysqli_fetch_assoc($result)) {
        echo $optionData;
        $brand = $optionData['Asset_Brand'];
        $html .= '<option value="'.$brand.'">'.$brand.'</option>';
    }

    // Return HTML
    echo $html;
    ?>
