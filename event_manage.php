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

    <style>
        :root {
    --bg-color: #2C3333;
    --font-color: #2E4F4F;
    --hover-font-color: #0E8388;
    --wrapper-width: clamp(10rem, 70vw, 60rem);
    --ul-padding: clamp(.5rem, 2vw, 2rem);
    --card-height: clamp(15rem, 25vw, 19rem);
  }
  
  
  h1 {
    text-align: center;
    margin-bottom: 20px;
    color: white;
    z-index: 1;
  }
  .event_card {
    top: 0;
    min-height: 90vh;
    background-color: var(--bg-color);
    padding-block: var(--ul-padding);
    position: relative;
    display: grid;
    place-content: center;
    place-content: center;
  }
  .active {
    color: var(--hover-font-color);
    filter: drop-shadow(0px 0px 20px var(--hover-font-color));
  }
  .event-card-wrapper {
    margin: 0px auto;
    border: 1px solid var(--hover-font-color);
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    border-radius: calc(var(--card-height)*.05);
  }
  .event-card {
    height: var(--card-height);
    aspect-ratio: 1/1.2;
    margin: calc(var(--card-height)*.04);
    /* animation: cardBgAnimation 30s infinite ; */
    position: relative;
    cursor: pointer;
    transition: 200ms ease-in-out;
    border-radius: calc(var(--card-height)*.05);
  }
  .event-card::before{
    content: '';
    position: absolute;
    background-color: #000000;
    height: 100%;
    width: 100%;
    mix-blend-mode: color;
    transition: 200ms ease-in-out;
    border-radius: calc(var(--card-height)*.05);
  }
  /* .event-card::after {
    content: '';
    position: absolute;
    height: 80%;
    width: 80%;
    border: 1px solid var(--hover-font-color);
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    filter: drop-shadow(0px 0px 5px var(--hover-font-color));
    transition: 200ms ease-in-out;
    pointer-events: none;
    border-radius: calc(var(--card-height)*.05);
  } */
  .event-card:hover:before {
    opacity: 0;
  }
  .event-card:hover {
    scale: 1.05;
    z-index: 1;
  }
  
  .event-bg-blur {
    top: 0;
    left: 0;
    position: fixed;
    height: 100vh;
    width: 100vw;
    pointer-events: none;
    transition: 200ms ease;
  }
  .event-card:hover ~ .event-bg-blur {
    backdrop-filter: blur(15px);
  }
  .event-card:hover a i{
    
    filter: drop-shadow(0px 0px 5px var(--hover-font-color));
  }
  .event-card:first-child {
    background-image: url("assets/img/event/gfg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .event-card:nth-child(2) {
    background-image: url("assets/img/event/knack.jpg");
    background-repeat: no-repeat;
  }
  .event-card:nth-child(3) {
    background-image: url("assets/img/event/spark.jpg");
    background-repeat: no-repeat;  
  }
  .event-card:nth-child(4) {
    background-image: url("assets/img/event/mind-opt.jpg");
    background-repeat: no-repeat;
  }
  
  
  @keyframes cardBgAnimation {
    0% {
        background-size: 200%;
        background-position: 27% 10%;
    }
    20% {
        background-size: 200%;
        background-position: 35% 40%;
    }
  
    20.00001% {
        background-size: 300%;
        background-position: 75% 40%;
    }
    40% {
        background-size: 300%;
        background-position: 85% 90%;
    }
  
    40.00001% {
        background-size: 350%;
        background-position: 25% 70%;
    }
    60% {
        background-size: 350%;
        background-position: 5% 10%;
    }
  
    60.00001% {
        background-size: 150%;
        background-position: 20% 0%;
    }
    80% {
        background-size: 150%;
        background-position: 90% 10%;
    }
  
    80.00001% {
        background-size: 200%;
        background-position: 5% 10%;
    }
    100% {
        background-size: 200%;
        background-position: 65% 20%;
    }
  
  }
  
  
  .event-a {
    text-decoration: none;
    display: inline-block;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    position: relative;
  }
  .event-a i {
    font-size: clamp(1em, 2vw, 2em);
    color: var(--hover-font-color);
  }
    </style>
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
						<h1>Card Hover Effect!</h1>
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