
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Doclinic - Registration </title>
	
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	
	
	<!-- Style-->  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">	
	<link rel="stylesheet" href="css/color_theme.css">
	
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
								<p class="mb-0">Register a new membership</p>
								<p class="mb-0">Group 121-150</p>
															
							</div>
							<div class="p-40">
								<form action="auth_register.php" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="fa fa-user"></i></span>
											<input type="text" name="user_name" id="user_name" class="form-control ps-15 bg-transparent" placeholder="Full Name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="fa fa-email"></i></span>
											<input type="email" name="user_email" id="user_email" class="form-control ps-15 bg-transparent" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="fa fa-phone"></i></span>
											<input type="Phone" name="user_phone" id="user_phone" class="form-control ps-15 bg-transparent" placeholder="Phone Number">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="fa fa-lock"></i></span>
											<input type="password" id="user_pass" name="user_pass" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									
									<div class="row">
										<div class="col-12">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" value="1" name="user_agree">
											<label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" name="user" id="user" class="btn btn-info margin-top-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>				
								<div class="text-center">
									<p class="mt-15 mb-0">Already have an account?<a href="auth_login.php" class="text-danger ms-5"> Sign In</a></p>
								</div>
							</div>
						</div>								
						<div>
						<?php 
							// establishing the MySQLi connection

							include 'ph/dbcon.php';
							//Inserting data into table 
							include 'ph/reg.php';
							?>
						</div>
						
					</div>
				</div>
			</div>			
		</div>
	</div>
	
	<script type='text/javascript'>
		function Validate() {
			var user_password = document.getElementById("user_pass").value;
			var user_repassword = document.getElementById("user_repass").value;
			if (user_password != user_rePassword) {
				alert("Passwords do not match.");
				return false;
			}
			return true;
		}
	</script>
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>	
	
	
</body>
</html>
