<?php

session_start();

require('db.php');

$error = "";

if(isset($_POST['signin'])){
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];

	$sql = "SELECT * FROM login WHERE Username = '$uname' AND password = '$pwd'";

	$result = mysqli_query($con, $sql);

	$count = mysqli_num_rows($result);
	if($count>0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['ROLE'] = $row['role'];
		$_SESSION['IS_LOGIN'] = 'yes';
		header('location:dashboard.php');
	}else{
		$error = "Invalid Username or Password";
	}
}

?>

<!DOCTYPE html>
<html>



<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="assets/css/pages/login.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon/logo-half.png" />
</head>

<body>
	<div class="main">
		<!-- Sing in  Form -->
		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure><img src="assets/img/favicon/logo-half.png" alt="sing up image"></figure>
						<!-- <a href="sign_up.html" class="signup-image-link">Create an account</a> -->
					</div>
					<div class="signin-form">
						<h2 class="form-title"><?php echo $_GET['person'] ?> Login</h2>
						<form class="register-form" id="login-form" method="post">
							<div class="form-group">
								<div class="">
									<input name="uname" type="text" placeholder="User Name"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="pwd" type="password" placeholder="Password"
										class="form-control input-height" /> </div>
							</div>
							
							<div class="form-group form-button">
								<input type="submit" class="btn btn-round btn-primary" name="signin" id="signin"></input>
							</div>
						</form>

						<?php
						echo $error;
						?>
						<!-- <div class="social-login">
							<button class="draw new">Admin Login</button>
						</div> -->
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2022 06:34:25 GMT -->
</html>