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
  <link rel="stylesheet" href="assets/css/cards.css">

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
          <section class="event_card">
            <h1>Computer Science Departmental Clubs</h1>
            <div class="event-card-wrapper">
              <div class="event-card">
                <a href="gfg.php" class="event-a">
                  <i class="fab fa-github"></i>
                </a>
              </div>
              <div class="event-card">
                <a href="knack.php" class="event-a">
                  <i class="fab fa-github"></i>
                </a>
              </div>
              <div class="event-card">
                <a href="spark.php" class="event-a">
                  <i class="fab fa-github"></i>
                </a>
              </div>
              <div class="event-card">
                <a href="mind-opt.php" class="event-a">
                  <i class="fab fa-github"></i>
                </a>
              </div>
              <div class="event-bg-blur"></div>
            </div>
          </section>
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