<?php
include('session.php');
include ('include/dbcon.php');

?>
<html>

<head>
    <title>Device Management System</title>

    <style>


        .container {
            width:100%;
            margin:auto;
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
        }

        .table-striped tbody > tr:nth-child(odd) > td,
        .table-striped tbody > tr:nth-child(odd) > th {
            background-color: #f9f9f9;
        }

        @media print{
            #print {
                display:none;
            }
        }

        #print {
            width: 90px;
            height: 30px;
            font-size: 18px;
            background: white;
            border-radius: 4px;
            margin-left:28px;
            cursor:hand;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

    </style>
    <script>
        function printPage() {
            window.print();
        }
    </script>

</head>


<body>
<div class = "container">
    <div id = "header">
        <br/>
        <img src = "images/plutotv1.png" style = " float:left; margin-left: 25px; width:100px; height:100px; border-radius: 60%;">
        <center><h5 style = "font-style:Calibri; font-weight: bold; font-size: 35px; margin-top:15px;"> Pluto TV</h5> </center>
        <center><h5 style = "font-style:Calibri; font-weight: bold; font-size: 15px; margin-top:-40px;"> Devices Management System</h5> </center>


        <button type="submit" id="print" onclick="printPage()" style=" position: absolute; right: 20;">Print</button>
        <br />
        <p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">Device logs</p>
        <div align="right">
            <b style="color:blue;">Date Prepared:</b>
            <?php include('currentdate.php'); ?>
        </div>
        <br/>
        <br/>
        <?php
        $result= mysqli_query($con,"SELECT * from report
							LEFT JOIN device ON report.serial_no = device.Asset_SerialNo 
							LEFT JOIN employee ON report.ps_no = employee.ps_no 
							where report.status = 'returned' and report.Asset_No = device.Asset_No order by report.id ASC") or die (mysqli_error());
        ?>
        <table class="table">
            <thead>
            <tr>
                <th>Asset No</th>
                <th>Asset Type</th>
                <th>Asset Brand</th>
                <th>Asset Model</th>
                <th>Year</th>
                <th>OS Version</th>
                <th>Asset Serial No</th>
                <th>Auto Update</th>
                <th>Asset Ownership</th>
                <th>Asset Location</th>
                <th>Borrower Name</th>
                <th>Date Borrowed</th>
                <th>Date Returned</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row= mysqli_fetch_array ($result) ){
                $id=$row['id'];
                ?>
                <tr>
<!--                    <td style="text-align:center;">--><?php	//echo "<img src = 'BCG/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=10&text=".$row['ps_no']."&thickness=50&start=NULL&code=BCGcode128' />";?><!--</td>-->
                    <!--                                <td style="text-align:center;">--><?php //echo $row['user_barcode']; ?><!--</td>-->
                    <td style="text-align:center;"><?php echo $row['Asset_No']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Asset_Type']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Asset_Brand']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Asset_Model']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Year']; ?></td>
                    <td style="text-align:center;"><?php echo $row['OS_Version']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Asset_SerialNo']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Auto_Update']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Asset_Ownership']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Asset_Location']; ?></td>
                    <td style="text-align:center;"><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                    <td style="text-align:center;"><?php echo $row['date_borrowed']; ?></td>
                    <td style="text-align:center;"><?php echo $row['date_returned']; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

        <br />
        <br />
        <!--							--><?php
        //								include('include/dbcon.php');
        //								$user_query=mysqli_query($con,"select * from admin where admin_id='$id_session'")or die(mysqli_error());
        //								$row=mysqli_fetch_array($user_query); {
        //							?><!--        <h2><i class="glyphicon glyphicon-user"></i> --><?php //echo '<span style="color:blue; font-size:15px;">Prepared by:'."<br /><br /> ".$row['firstname']." ".$row['lastname']." ".'</span>';?><!--</h2>-->
        <!--								--><?php //} ?>


    </div>





</div>
</body>


</html>