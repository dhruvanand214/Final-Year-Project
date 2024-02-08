<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>CS Branch</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
    <link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- inbox style -->
    <link href="assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon/logo-half.png" />
    <!-- <link href="assets/css/clubs.css" rel="stylesheet" type="text/css" /> -->
    <link href="assets/css/clubs.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <?php include('header.php'); ?>
        <!-- end header -->

        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <?php include('sidebar.php'); ?>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">

                <div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Mind Optimiser</div>
							</div>
							
						</div>
					</div>
                    <!-- -------------------------------- -->

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <header>Upcoming Event</header>

                                </div>

                                <div class="card-body">

                                    <!-- ---------------------------------- -->
                                    <div class="row">

                                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                            <!-- <div class="card-box"> -->

                                                <div class="card-body d-flex justify-content-center align-items-center">

                                                    <?php

                                                    require("db.php");



                                                    $displayquery = "select * from `mind_opt` ORDER BY ID DESC LIMIT 1";
                                                    $querydisplay = mysqli_query($con, $displayquery);



                                                    while ($result = mysqli_fetch_array($querydisplay)) {

                                                    ?>
                                                        <img src="<?php echo $result['Banner']; ?>" style="height: 300px !important;
                                                        width: 300px;" class="card-img-top h-100" alt="...">


                                                </div>
                                            <!-- </div> -->
                                        </div>

                                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                                            <!-- <div class="card-box"> -->

                                                <!-- <div class="card-body "> -->
                                                    <div class="container">

                                                        <h1 class="card-title"><b><u> Name of Event</u>&nbsp;: </b><?php echo $result['Name']; ?></h1>
                                                        <br><br>

                                                        <h4><b><u>Last Date to Register</u>&nbsp; : </b>
                                                            <?php
                                                            $date = new DateTime($result['LDTR']);

                                                            // Get the formatted date (only date and month)
                                                            $month = $date->format('F');

                                                            // Get the date
                                                            $dateNumber = date_format($date, 'd');

                                                            // Display the month and date
                                                            echo $month . ' ' . $dateNumber;
                                                            ?></h4>
                                                        <!-- <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p> -->
                                                        <br><br>
                                                        <a href="<?php echo $result['Link']; ?>">Fill The Form</a>
                                                        <br>
                                                        <br>
                                                    <?php

                                                    }


                                                    ?>

                                                    </div>
                                                <!-- </div> -->
                                            <!-- </div> -->
                                        </div>
                                    </div>

                                    <!-- -------------------------------------- -->



                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="card-box">
                            <div class="card-head">
                                <div class="card-head">
                                    <header>Recently Completed Event</header>

                                </div>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>

                                </div>
                            </div>
                            <div class="card-body ">

                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle table-responsive" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Event Name</th>
                                                <th>Event Date</th>
                                                <th>Event Winner</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php

                                            $displayquery2 = "select * from mind_opt WHERE ID NOT IN (SELECT MAX(ID) from mind_opt) ORDER BY ID DESC LIMIT 3";
                                            $querydisplay2 = mysqli_query($con, $displayquery2);



                                            while ($result = mysqli_fetch_array($querydisplay2)) {


                                                echo "
                                                    <tr class='odd gradeX'>
                                                        <td>" . $result['Name'] . "</td>
                                                        <td>" . $result['Date'] . "</td>
                                                        <td>" . $result['Winner'] . "</td>
                                                    </tr>
                                                    ";
                                            }
                                            ?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ------------------------------------- -->







            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->

    </div>
    <!-- end page container -->

    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/popper/popper.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/plugins/feather/feather.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.js"></script>
    <script src="assets/js/pages/sparkline/sparkline-data.js"></script>
    <!-- Common js-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/theme-color.js"></script>
    <!--apex chart-->
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/chart/apex/home-data.js"></script>
    <!-- summernote -->
    <script src="assets/plugins/summernote/summernote.js"></script>
    <script src="assets/js/pages/summernote/summernote-data.js"></script>
    <!-- Material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <script src="assets/plugins/sweet-alert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweet-alert/sweetalert2.min.js"></script>
    <script src="assets/js/pages/sweet-alert/sweet-alert-data.js"></script>
    <!-- end js include path -->
</body>


</html>