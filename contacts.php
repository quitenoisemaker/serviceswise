<?php
session_start();
	error_reporting(0);
  include("function/function.php") ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
	
	<div id="page">
		
	<?php  include("include/header.php") ?>
	<!-- /header -->
	
	<div class="sub_header_in sticky_header">
		<div class="container">
			<h1>Contacts Us</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
		
	<main>
		
		<!-- /map -->
		<div class="container margin_60_35">
			<div class="row justify-content-center">
				
				<div class="col-xl-5 col-lg-6 pr-xl-5">
					<div class="main_title_3">
						<span></span>
						<h2>Send us a message</h2>
						<p>WE will be glad to hear from you.</p>
					</div>
					<div id="message-contact"></div>
						<form method="post" action="contacts.php" id="" autocomplete="off">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>First name</label>
										<input class="form-control" type="text" id="" name="fname" value="<?php if (isset($_POST['fname'])) echo($fname); ?>" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Last name</label>
										<input class="form-control" type="text" id="" name="lname" value="<?php if (isset($_POST['lname'])) echo($lname); ?>" required="">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" type="email" id="" name="email_contact" value="<?php if (isset($_POST['email_contact'])) echo($email_contact); ?>" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Telephone</label>
										<input class="form-control" type="text" id="" name="phone_contact" value="<?php if (isset($_POST['phone_contact'])) echo($phone_contact); ?>" required="">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id=""  name="message_contact" style="height:150px; resize: none;"></textarea>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Are you human? 3 + 1 =</label>
										<input class="form-control" type="text" id="" name="verify_contact" value="<?php if (isset($_POST['verify_contact'])) echo($verify_contact); ?>" required="" maxlength="600">
									</div>
								</div>
							</div>
							<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="" name="submit"></p>
						</form>
				</div>
				<div class="col-xl-5 col-lg-6 pl-xl-5">
					<div class="box_contacts">
						<i class="ti-support"></i>
						<h2>Need Help?</h2>
						<a href="#0">+234 4324265622</a> - <a href="#0">help@serviceswise.com</a>
					</div>
					<div class="box_contacts">
						<i class="ti-help-alt"></i>
						<h2>Questions?</h2>
						<a href="#0">+234 324242322</a> - <a href="#0">info@serviceswise.com</a>
					</div>
					<div class="box_contacts">
						<i class="ti-home"></i>
						<h2>Address</h2>
						<a href="#0">PO Box 97845 Baker st. 567, Benin-City<br>Edo - Nigeria.</a>
					</div>
				</div>
			</div>
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
	<!-- /php -->


	<?php
          if (isset($_POST['submit'])) {
          $fname= htmlentities($_POST['fname']);
          $lname= htmlentities($_POST['lname']);
          $email_contact= htmlentities($_POST['email_contact']);
          $phone_contact= htmlentities($_POST['phone_contact']);
          $message_contact= htmlentities($_POST['message_contact']);
          $verify_contact= htmlentities($_POST['verify_contact']);
    
          // if (empty($fname) || empty($lname) || empty($email_contact) || empty($phone_contact) || empty($message_contact) || empty($verify_contact) || $verify_contact!=4) {
          //  echo "<script>alert('One or more field is empty')</script>";
          //     }else{
          //       $to = 'info@serviceswise.com';
          //       $subject = 'Contact form submitted';
          //       $body = $fname. "\n".$message_contact;
          //       $headers = 'From: '.$email_contact;
          //       if (@mail($to, $subject, $body, $headers)) {
                  
          //         echo "<script>alert('Thanks for contacting us. We\'ll be in touch soon.')</script>";
          //       }else{
                  
          //         echo "<script>alert('Sorry, an error occured. Please try again later.')</script>";
          //       }
          //     }

          if(!empty($fname) && !empty($lname) && !empty($email_contact) && !empty($phone_contact) && !empty($message_contact) && $verify_contact==4) {

          	$sql = $conn->prepare("INSERT INTO contactus (firstname,lastname,email,phone,message) VALUES (?,?,?,?,?)");

			$sql->bind_param("sssss", $fname,$lname,$email_contact,$phone_contact,$message_contact);

			if($sql->execute()) {
			// echo "<script>alert('Message Successful, Thanks')</script>";

				echo "<script>swal({
  				title: 'Message Successful, Thanks',
  				icon: 'success',
  				button: 'Ok!',
				})</script>";
			// echo "<script>window.open('admin_section/index.php','_self')</script>";
				}else{
			echo "<script>alert('Message not Successful, Try again')</script>";

		}



          	}else{
          		// echo "<script>alert('Incorrect input, Try again')</script>";

          		echo "<script>swal({
  				title: 'Incorrect input, Please try again',
  				icon: 'warning',
  				button: 'Ok!',
				})</script>";
          	}


              }
          ?>
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBnG1RgQ8jpVgciCQQyuj50URjMIVl9kDo"></script>
	<script src="js/mapmarker.jquery.js"></script>
	<script src="js/mapmarker_func.jquery.js"></script>

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

 