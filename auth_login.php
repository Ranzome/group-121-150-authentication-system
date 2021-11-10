<?php
if(!isset($_SESSION)) {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Doclinic - Log in </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(images/auth-bg/bg-4.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">KeyStone Project</h2>
								<p class="mb-0">Sign in to continue.</p>
							</div>
							<div class="p-40">
								<form action="auth_login.php" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" name="user_name" id="user_name" class="form-control ps-15 bg-transparent" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="user_pass" id="user_pass" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" name="login" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="auth_register.php" class="text-warning ms-5">Sign Up</a></p>
								</div>
							</div>
						</div>
						<div>
							<?php

							//connect db
							if (isset($_POST['login']))
								{
									include 'ph/dbcon.php';
							$user_name = $_POST['user_name'];
							$user_pass = $_POST['user_pass'];

							$sql = "SELECT * FROM regtb WHERE user_email = '$user_name' AND user_pass = '$user_pass';";
							$sql_result = mysqli_query ($con, $sql) or die ('request "Could not execute SQL query" '.$sql);
							$user = mysqli_fetch_assoc($sql_result);
								if(!empty($user)){
									$_SESSION['user_info'] = $user['user_email'];
									$message='Logged in successfully';
									header("location:Admin/index.php");
									}
								else{
								$message = 'Wrong email or password.';
														session_destroy();
								//die(header("<location:Admin/index.html?loginFailed=true"));
								}
									echo "<script type='text/javascript'>alert('$message');</script>";
								}


							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>

</body>
</html>
