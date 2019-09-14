<?php
	session_start();
	error_reporting(0);
	
 	include ("function/function.php");  
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TheAtizanz | Find well rated artisans in your locality.">
    <meta name="author" content="Ansonika">
    <title>Serviceswise | Find well rated artisans in your locality.</title>
    <!-- Favicons-->
   <link rel="shortcut icon" href="img/sw.JPG" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/sw.JPG">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/sw.JPG">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/sw.JPG">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/sw.JPG">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

	<!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
	<?php include ("include/header.php"); ?>
	<!-- /header -->
	
	<div class="sub_header_in sticky_header">
		
		<!-- /container -->
	</div>
	<!-- /sub_header -->
	
	<main>
		<div class="container margin_60">
			 <div class="row justify-content-center">
				<div class="col-md-5">
					<div id="confirm">
						<div class="icon icon--order-success svg add_bottom_15">
							<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
								<g fill="none" stroke="#8EC343" stroke-width="2">
									<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
									<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
								</g>
							</svg>
						</div>
					<h2>Registration Successful!</h2>
					<div class="text-center add_top_10">Thanks! click on the link to login <strong><a href="login.php">Login here!</a></strong></div>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		
	
	</main>
	<!--/main-->
	
	<?php  include("include/footer.php") ?>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>
	
	<script>
		$('.wish_bt.liked').on('click', function (c) {
			$(this).parent().parent().parent().fadeOut('slow', function (c) {});
		});
	</script>

	<!-- COLOR SWITCHER  -->
	<!-- <script src="js/switcher.js"></script>
	<div id="style-switcher">
		<h6>Color Switcher <a href="#"><i class="ti-settings"></i></a></h6>
		<div>
			<ul class="colors" id="color1">
				<li><a href="#" class="default" title="Default"></a></li>
				<li><a href="#" class="aqua" title="Aqua"></a></li>
				<li><a href="#" class="green_switcher" title="Green"></a></li>
				<li><a href="#" class="orange" title="Orange"></a></li>
				<li><a href="#" class="beige" title="Beige"></a></li>
				<li><a href="#" class="gray" title="Gray"></a></li>
				<li><a href="#" class="green-2" title="Green"></a></li>
				<li><a href="#" class="navy" title="Navy"></a></li>
				<li><a href="#" class="peach" title="Peach"></a></li>
				<li><a href="#" class="purple" title="Purple"></a></li>
				<li><a href="#" class="red" title="Red"></a></li>
				<li><a href="#" class="violet" title="Violet"></a></li>
			</ul>
		</div>
	</div> -->
  
</body>


</html>