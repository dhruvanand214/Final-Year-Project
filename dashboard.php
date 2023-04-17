<?php

session_start();

if(!isset($_SESSION['IS_LOGIN'])){
	header('location:index.php');
}

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
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-green">
									<span class="info-box-icon push-bottom"><i data-feather="users"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Students</span>
										<span class="info-box-number">450</span>
										<div class="progress">
											<div class="progress-bar" style="width: 45%"></div>
										</div>
										<span class="progress-description">
											45% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-yellow">
									<span class="info-box-icon push-bottom"><i data-feather="user"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">IInd Year Students</span>
										<span class="info-box-number">155</span>
										<div class="progress">
											<div class="progress-bar" style="width: 40%"></div>
										</div>
										<span class="progress-description">
											40% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-blue">
									<span class="info-box-icon push-bottom"><i data-feather="book"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">IIIrd year Students</span>
										<span class="info-box-number">52</span>
										<div class="progress">
											<div class="progress-bar" style="width: 85%"></div>
										</div>
										<span class="progress-description">
											85% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">IVth Year Students</span>
										<span class="info-box-number">13,921</span>
										<div class="progress">
											<div class="progress-bar" style="width: 50%"></div>
										</div>
										<span class="progress-description">
											50% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
					<div class="row">

						<div class="col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
									<div class="box-title"><small class="pull-right small-lbl-green"><i class="far fa-arrow-alt-circle-up"></i> Good</small> Student Performance
									</div>
									<div class="mt-3">
										<div class="stat-item">
											<div class="h6">Overall Growth</div> <b>35.80%</b>
										</div>
										<div class="stat-item">
											<div class="h6">Montly</div> <b>45.20%</b>
										</div>
										<div class="stat-item">
											<div class="h6">Day</div> <b>5.50%</b>
										</div>
									</div>
									<div id="schart1">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Exam Toppers</header>
									<button id="panel-button5" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button5">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something
											else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<div class="table-responsive">
										<table class="table table-striped custom-table table-hover">
											<thead>
												<tr>
													<th>Roll No</th>
													<th>Name</th>
													<th>Graph</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>23</td>
													<td>John Smith</td>
													<td>
														<div id="sparkline"></div>
													</td>
													<td>
														<a href="javascript:void(0)" class="tblEditBtn">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="javascript:void(0)" class="tblDelBtn">
															<i class="fa fa-trash-o"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>12</td>
													<td>Sneha Pandit</td>
													<td>
														<div id="sparkline1"></div>
													</td>
													<td>
														<a href="javascript:void(0)" class="tblEditBtn">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="javascript:void(0)" class="tblDelBtn">
															<i class="fa fa-trash-o"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>45</td>
													<td>Sarah Smith</td>
													<td>
														<div id="sparkline2"></div>
													</td>
													<td>
														<a href="javascript:void(0)" class="tblEditBtn">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="javascript:void(0)" class="tblDelBtn">
															<i class="fa fa-trash-o"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>34</td>
													<td>John Deo</td>
													<td>
														<div id="sparkline3"></div>
													</td>
													<td>
														<a href="javascript:void(0)" class="tblEditBtn">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="javascript:void(0)" class="tblDelBtn">
															<i class="fa fa-trash-o"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>15</td>
													<td>Jay Soni</td>
													<td>
														<div id="sparkline4"></div>
													</td>
													<td>
														<a href="javascript:void(0)" class="tblEditBtn">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="javascript:void(0)" class="tblDelBtn">
															<i class="fa fa-trash-o"></i>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="row">

						<!-- Activity feed start -->
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Activity Feed</header>
									<button id="feedMenu" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="feedMenu">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<ul class="feedBody">
										<li class="active-feed">
											<div class="feed-user-img">
												<img src="assets/img/user/user1.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small class="text-muted">6 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												hii John, I have upload doc related to task.
											</p>
										</li>
										<li class="diactive-feed">
											<div class="feed-user-img">
												<img src="assets/img/user/user2.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small class="text-muted">5 hours
													ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												Please do as specify. Let me know if you have any query.
											</p>
										</li>
										<li class="diactive-feed">
											<div class="feed-user-img">
												<img src="assets/img/user/user3.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblCommentStyle">comment</span> Lina
												Smith<small class="text-muted">6 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												Hey, How are you??
											</p>
										</li>
										<li class="active-feed">
											<div class="feed-user-img">
												<img src="assets/img/user/user4.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblReplyStyle">Reply</span> Jacob Ryan
												<small class="text-muted">7 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												I am fine. You??
											</p>
										</li>
										<li class="active-feed">
											<div class="feed-user-img">
												<img src="assets/img/user/user5.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small class="text-muted">6 hours ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												hii John, I have upload doc related to task.
											</p>
										</li>
										<li class="diactive-feed">
											<div class="feed-user-img">
												<img src="assets/img/user/user6.jpg" class="img-radius " alt="User-Profile-Image">
											</div>
											<h6>
												<span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small class="text-muted">5 hours
													ago</small>
											</h6>
											<p class="m-b-15 m-t-15">
												Please do as specify. Let me know if you have any query.
											</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Activity feed end -->
						<div class="col-lg-6 col-md-3 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
									<div class="box-title"><small class="pull-right small-lbl-green"><i class="far fa-arrow-alt-circle-up"></i> Good
											Performance</small>Student Result</div>
									<div class="mt-3">
										<div class="stat-item">
											<div class="h6">Sub1</div> <b>86%</b>
										</div>
										<div class="stat-item">
											<div class="h6">Sub2</div> <b>64%</b>
										</div>
										<div class="stat-item">
											<div class="h6">Sub2</div> <b>64%</b>
										</div>
										<div class="stat-item">
											<div class="h6">Sub4</div> <b>64%</b>
										</div>
									</div>
									<div id="schart3">
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row">

						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Todo List</header>
									<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
										<li class="mdl-menu__item">

										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something
											else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<div class="container">

										<?php

										include('db.php');


										if ($_SESSION['ROLE'] == "admin") {

										?>
											<div class="form">
												<input type="text" class="input" />
												<input type="submit" class="add" value="Add Task" />
											</div>

										<?php } ?>

										<div class="tasks"></div>

										<?php

										if ($_SESSION['ROLE'] == "admin") {

										?>
											<div class="delete-all">Delete all</div>

										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>


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