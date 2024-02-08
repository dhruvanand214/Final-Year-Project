<?php

session_start();


if (!isset($_SESSION['IS_LOGIN'])) {
	header('location:index.php');
}
include('db.php');

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
	<!-- <link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" /> -->
	<link href="assets/css/theme/light/theme_style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon/logo-half.png" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
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

										<?php
										$queryTotal1 = "SELECT COUNT(*) AS total_students FROM students WHERE Passing_year = (DATE_FORMAT(CURDATE(), '%Y')+2) OR Passing_year = (DATE_FORMAT(CURDATE(), '%Y')+1) OR Passing_year = (DATE_FORMAT(CURDATE(), '%Y'))";

										$resultTotal1 = mysqli_query($con, $queryTotal1);
										$rowTotal1 = mysqli_fetch_assoc($resultTotal1);

										?>

										<span class="info-box-number"><?php echo $rowTotal1['total_students']; ?></span>

										<!-- <div class="progress">
											<div class="progress-bar" style="width: 45%"></div>
										</div>
										<span class="progress-description">
											45% Increase in 28 Days
										</span> -->
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

										<?php
										$queryTotal2 = "SELECT COUNT(*) AS total_students FROM students WHERE Passing_year = (DATE_FORMAT(CURDATE(), '%Y')+2)";

										$resultTotal2 = mysqli_query($con, $queryTotal2);
										$rowTotal2 = mysqli_fetch_assoc($resultTotal2);
										?>

										<span class="info-box-number"><?php echo $rowTotal2['total_students']; ?></span>
										<!-- <div class="progress">
											<div class="progress-bar" style="width: 40%"></div>
										</div>
										<span class="progress-description">
											40% Increase in 28 Days
										</span> -->
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-blue">
									<span class="info-box-icon push-bottom"><i data-feather="user"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">IIIrd year Students</span>

										<?php
										$queryTotal3 = "SELECT COUNT(*) AS total_students FROM students WHERE Passing_year = (DATE_FORMAT(CURDATE(), '%Y')+1)";

										$resultTotal3 = mysqli_query($con, $queryTotal3);
										$rowTotal3 = mysqli_fetch_assoc($resultTotal3);
										?>

										<span class="info-box-number"><?php echo $rowTotal3['total_students']; ?></span>
										<!-- <div class="progress">
											<div class="progress-bar" style="width: 85%"></div>
										</div>
										<span class="progress-description">
											85% Increase in 28 Days
										</span> -->
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i data-feather="user"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">IVth year Students</span>

										<?php
										$queryTotal4 = "SELECT COUNT(*) AS total_students FROM students WHERE Passing_year = (DATE_FORMAT(CURDATE(), '%Y'))";

										$resultTotal4 = mysqli_query($con, $queryTotal4);
										$rowTotal4 = mysqli_fetch_assoc($resultTotal4);
										?>

										<span class="info-box-number"><?php echo $rowTotal4['total_students']; ?></span>
										<!-- <div class="progress">
											<div class="progress-bar" style="width: 85%"></div>
										</div>
										<span class="progress-description">
											85% Increase in 28 Days
										</span> -->
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
								<div class="card-head">
									<header>Top Scorers</header>

								</div>
								<div class="card-body">
									<div class="table-responsive">




										<?php
										// Retrieve class-wise result of top 3 students based on the sum of marks



										// Prepare the SQL statement to fetch the top 3 students in each class based on the sum of marks
										$sqlnew = "SELECT students.year_id, students.Name, SUM(marks.marks_obtained) AS total_marks
        									FROM students
        									JOIN marks ON students.Roll_No = marks.Roll_No
        									GROUP BY students.Roll_No
        									ORDER BY students.year_id, total_marks DESC";

										// Execute the statement
										$resultnew = $con->query($sqlnew);

										// Initialize variables
										$currentClass = null;
										$studentCount = 0;

										// Display the result
										while ($rownew = $resultnew->fetch_assoc()) {

											$classId = $rownew['year_id'];
											$studentName = $rownew['Name'];
											$totalMarks = $rownew['total_marks'];

											$queryyear = "SELECT COUNT(subject_id) AS total_subjects
												FROM year_subjects
												WHERE year_id = $classId";

											$resultyear = mysqli_query($con, $queryyear);



											// Check if the class has changed
											if ($currentClass !== $classId) {
												// Close the previous table if it exists
												if ($currentClass !== null) {
													echo "</tbody></table></div></div>";
												}

												$currentClass = $classId;
												$studentCount = 1;

												// Start a new table for the current class
												echo
												"<div class='card-body'>
												<hr style='height: 2px;'>
													<h4 style='font-weight: bolder;'>Year: $classId</h4>
													<hr style='height: 2px;'>
													<div class='table-responsive'>
													
														<table class='table table-striped custom-table table-hover'>
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Total Marks</th>
																</tr>
															</thead>
															<tbody>";
											}

											// Display top 3 students
											if ($studentCount <= 3) {
												echo "<tr><td>$studentName</td>";
												if ($resultyear) {
													$rowyear = mysqli_fetch_assoc($resultyear);
													$totalSubjects = $rowyear['total_subjects'];
													$multipliedValue = $totalSubjects * 60;

													echo "<td>$totalMarks/$multipliedValue</td></tr>";
												}
											}

											$studentCount++;
										}

										// Close the last table if it exists
										if ($currentClass !== null) {
											echo "</tbody></table></div></div>";
										}




										?>

									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- ---------------------------------- -->


					<!-- <div class="row">
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

					</div> -->

					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Activity Feed</header>

								</div>
								<div class="card-body ">
									<ul class="feedBody" style="font-size: 22px;">

										<?php
										include('db.php');

										$selectquery = "SELECT * FROM forms WHERE `Last Date` = CURDATE() + INTERVAL 1 DAY";

										$query = mysqli_query($con, $selectquery);

										$selectquery2 = "SELECT * FROM gfg WHERE `LDTR` = CURDATE() + INTERVAL 1 DAY";

										$query2 = mysqli_query($con, $selectquery2);
										// $nums = mysqli_num_rows($query);

										$selectquery3 = "SELECT * FROM dep_event WHERE `LDTR` = CURDATE() + INTERVAL 1 DAY";

										$query3 = mysqli_query($con, $selectquery3);

										$combinedResults = array_merge($query->fetch_all(MYSQLI_ASSOC), $query2->fetch_all(MYSQLI_ASSOC), $query3->fetch_all(MYSQLI_ASSOC));

										// Repeat the above step for other result sets

										// Sort the combined result set by the last date column
										// usort($combinedResults, function ($a, $b) {
										// 	return strtotime($a['Last Date']) - strtotime($b['LDTR']);
										// });


										foreach ($combinedResults as $res) {


										?>


											<li class="active-feed">

												<h4>
													<span class="feedLblStyle lblFileStyle"><?php echo $res['Role']; ?></span> <?php echo $res['Name']; ?> <br>
													<p class="text-muted">Last Date Tomorrow</p>
													<p class="text-muted">For <?php echo $res['year_name']; ?> year </p>
												</h4>
												<p class="m-b-15 m-t-15">
													<a href="<?php echo $res['Link'] ?>">Click To fill</a>
												</p>
											</li>



										<?php
										}
										?>


									</ul>
								</div>
							</div>
						</div>
						<!-- ------------------------------------------ -->



						<!-- -------------------------------------------- -->

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


		</div>


	</div>

	<!-- start js include path -->
	<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
	<script>
		let table = new DataTable('#myTable');
	</script>
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