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
	<!-- data tables -->
	<!-- <link href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css" rel="stylesheet"
		type="text/css" /> -->
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon/logo-half.png" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
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
								<div class="page-title">Faculty List</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Faculty</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down"
																href="javascript:;"></a>
															
														</div>
													</div>
													<div class="card-body ">
														
														<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle table-responsive" id="myTable">
															<thead>
																<tr>
																	
																	<th> # </th>
																	<th> Name </th>
																	<th> Email </th>
																	<th> Number </th>
																	<th> Designation </th>
																	<th> Gender </th>
																	<th> Qualification </th>
																	<th> Experience </th>
																	<th>Joining Date</th>
																	<th> Action </th>
																</tr>
															</thead>
															<tbody>

															<?php
                                                include('db.php');
                                                $selectquery = "select * from faculty";
                                                $query = mysqli_query($con, $selectquery);
                                                $nums = mysqli_num_rows($query);
											
$temp = 0;
                                                while ($res = mysqli_fetch_array($query)) {
													$temp = $temp+1;
                                                ?>

																<tr class="odd gradeX">
																	
																	
																	<td class="left"><?php echo $temp; ?></td>
																	<td class="left"><?php echo $res['Name'] ?></td>
																	<td><a href="mailto:<?php echo $res['Email'] ?>">
																	<?php echo $res['Email'] ?>	 </a></td>
																	
																	<td><a href="tel:<?php echo $res['Number'] ?>">
																	<?php echo $res['Number'] ?> </a></td>
																	<td class="left"><?php echo $res['Designation'] ?></td>
																	<td class="left"><?php echo $res['Gender'] ?></td>
																	<td><?php echo $res['Qualifications'] ?></td>
																	<td><?php echo $res['Experience'] ?></td>
																	<td><?php echo $res['Joining_Year'] ?></td>
																	<?php
                                                        if ($_SESSION['ROLE'] == "admin") {

                                                        ?>

                                                            <td>
                                                                <a href="edit_faculty.php?id2=<?php echo $res['S.no'] ?>" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="delete_faculty.php?id2=<?php echo $res['S.no'] ?>" class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>

                                                        <?php
                                                        }
                                                        ?>
																</tr>

																<?php
												}
												?>
																
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
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
    <!-- data tables -->
    <!-- <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js"></script>
	
	<script src="assets/js/pages/table/table_data.js"></script> -->
    <!-- Common js-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/theme-color.js"></script>
    <!-- Material -->
    <!-- <script src="assets/plugins/material/material.min.js"></script> -->
    <!-- end js include path -->
    
</body>


</html>