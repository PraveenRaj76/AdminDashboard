<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LTIMindtree OTC LAB</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />
    <link href="css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
    <!-- select2 -->
    <link href="css/select/select2.min.css" rel="stylesheet">
	
    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <!-- ion_range -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />

    <!-- colorpicker -->
    <link href="css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    
    <script src="js/jquery.min.js"></script>	
    <!-- ion_range -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link id="bootstrap-style" href="css/slide.css" rel="stylesheet">
    <!-- Bootstrap --> 
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		
		<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
		<script src="js/nprogress.js"></script>
		
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<!--    <script>-->
<!--        $(document).ready(function() {-->
<!--            $("#menu_toggle").click(function(e) {-->
<!--                //e.preventDefault();-->
<!--                $("#sidebar-wrapper").toggleClass("toggled");-->
<!--            });-->
<!--        });-->
<!--    </script>-->
<!---->
<!--    <style>-->
<!--        #sidebar-wrapper.toggled {-->
<!--            display: none;-->
<!--        }-->
<!--    </style>-->

</head>


<body class="nav-md">
<?php require ('include/dbcon.php'); ?>
<?php require ('session.php'); ?>

    <div class="container body">
        <div class="main_container">
                <?php
                $id = $_SESSION['id'];
                $result = mysqli_query($con,"SELECT * FROM users where username='$id'");
                $rows = mysqli_fetch_array($result);
                ?>
                <?php
                    if($rows['type'] == 'admin') {
                        include('admin_sidebar_menu.php');
                    } else {
                        include('user_sidebar_menu.php');
                    }
                ?>
                <?php
                    if($rows['type'] == 'admin') {
                       include('admin_top_nav.php');
                    } else {
                        include('user_top_nav.php');
                    }
                ?>
				
					<!-- page content -->
					<div class="right_col" role="main">
						<div class="">
