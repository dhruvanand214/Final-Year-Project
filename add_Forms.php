<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/add_student.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2022 06:34:34 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>CS Portal</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
	<link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="assets/plugins/flatpicker/css/flatpickr.min.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon/logo-half.png" />
	<link rel="stylesheet" href="assets/css/list_cards.css">
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<?php include('header.php'); ?>
		<!-- end header -->

		<!-- end color quick setting -->
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
								<div class="page-title">Add Form</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Fill Form Details</header>

								</div>
								<form action="" method="post">
									<div class="card-body row">
										<!-- <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txttitle" name="formno">
											<label class="mdl-textfield__label">Form number</label>
										</div>
									</div> -->
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="txttitle" name="title">
												<label class="mdl-textfield__label">Title</label>
											</div>
										</div>


										<div class="col-lg-12 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<label class="" style="    color: #191313 !important;
    																		font-size: 13px !important;
    																		border-bottom: 1px solid rgba(0, 0, 0, 0.35);">Year</label>


												<?php
												$s = "select * from years";
												$query = mysqli_query($con, $s);

												?>

												<?php
												$res = mysqli_fetch_all($query, MYSQLI_ASSOC);
												foreach ($res as $r) {

												?>

													<label class="checkbox-label" style="display: block;
    																		margin-bottom: 10px;">
														<input class="mdl-checkbox__input" type="checkbox" name="year[]" value="<?php echo $r['year_id']; ?>">
														<?php echo $r['year_name']; ?>
													</label>


												<?php
												}
												?>

											</div>
										</div>
										

										

										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="txttitle" name="section">
												<label class="mdl-textfield__label">Section</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="txttitle" name="details">
												<label class="mdl-textfield__label">Details</label>
											</div>
										</div>
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="date" id="text" name="date" pattern="\d{4}-\d{2}-\d{2}" placeholder="YYYY-MM-DD">
												<label class="mdl-textfield__label">Last Date</label>
											</div>
										</div>
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="txttitle" name="faculty">
												<label class="mdl-textfield__label">Faculty Incharge</label>
											</div>
										</div>

										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" id="txttitle" name="link">
												<label class="mdl-textfield__label">Link</label>
											</div>
										</div>


										<div class="col-lg-12 p-t-20 text-center">
											<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary" name="submit" value="Submit">
											
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			
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
	<!-- Common js-->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/layout.js"></script>
	<script src="assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<script src="assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="assets/js/pages/date-time/date-time.init.js"></script>
	<!-- dropzone -->
	<script src="assets/plugins/dropzone/dropzone.js"></script>
	<script src="assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- end js include path -->
</body>

</html>

<?php

include('db.php');

if (isset($_POST['submit'])) {
	// $formno = $_POST['formno'];
	$title = $_POST['title'];
	
	$date = $_POST['date'];
	$section = $_POST['section'];
	$details = $_POST['details'];
	$faculty = $_POST['faculty'];
	$link = $_POST['link'];

	if(isset($_POST['year'])){
		$year = $_POST['year'];
		// Convert to an array if it's a single value
		if(!is_array($year)){
		  $year = array($year);
		}
	

	$yearNames = array();
    foreach($year as $yearId){
      $sql = "SELECT year_name FROM years WHERE year_id = $yearId";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
      $yearNames[] = $row['year_name'];
    }
	}
	$yearString = implode(',', $yearNames);

	$insertquery = "INSERT INTO `forms`(`Name`, `year_name`, `Section`, `Details`, `Last Date`, `Link`, `Faculty`) VALUES ('$title','$yearString','$section','$details','$date','$link','$faculty')";

	$res = mysqli_query($con, $insertquery);

	if ($res) {
?>
		<script>
			alert("Data Inserted");
		</script>
	<?php
	} else {
	?>
		<script>
			alert("Data Not Inserted");
		</script>
<?php

	}
}


?>