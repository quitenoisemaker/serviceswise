<?php
include ("function/function.php");


if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password=password_hash($password, PASSWORD_DEFAULT);
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$companyname=$_POST['companyname'];
	$address=$_POST['address'];
	$telephone=$_POST['telephone'];
	
	if(isset($_POST['check'])){
		$check=$_POST['check'];
  }
  if(isset($_POST['services'])){
  	$services=$_POST['services'];
  }
  if(isset($_POST['location'])){
  	$location=$_POST['location'];
  }
  if(isset($_POST['country'])){
  	$country=$_POST['country'];
  }

  //check if email already exist
 		$sql = $conn->prepare("select email from user where email = ?");
  		$sql->bind_param("s",$email);
  		$sql->execute();
  		$result = $sql->get_result();
  		if ($result->num_rows==1) {
  		// echo "<script>alert('Email already exist, Thanks')</script>";
  			
  			header('location:account.php');
  		$error_message = "Email already exist, Thanks";
  		// echo "<script>window.open('account.php','_self')</script>";
  		
  		exit();
  		}

  		//check if company name already exist
 		$sql = $conn->prepare("select company_name from user where company_name = ?");
  		$sql->bind_param("s",$companyname);
  		$sql->execute();
  		$result = $sql->get_result();
  		if ($result->num_rows==1) {
  		// echo "<script>alert('Company name already exist, Thanks')</script>";
  		$error_message2 = "Company name already exist, Thanks";
  		// echo "<script>window.open('account.php','_self')</script>";
  		header('location:account.php');
  		exit();
  		}

   if(!empty($email) && !empty($password) && strlen($password)>=8  && !empty($firstname) && !empty($lastname) && !empty($companyname) && isset($_POST['services']) && isset($_POST['location']) && isset($_POST['country']) && isset($_POST['check']) && !empty($address) && !empty($telephone) && is_numeric($telephone)) {
   	

	$sql = $conn->prepare("INSERT INTO user (firstname,lastname,email,password,phone,company_name,services,address,location,country) VALUES (?,?,?,?,?,?,?,?,?,?)");
$sql->bind_param("ssssssssss", $firstname,$lastname,$email,$password,$telephone,$companyname,$services,$address,$location,$country); 
if($sql->execute()) {
	$_SESSION['user_email']=$email;
			// echo "<script>window.open('confirm.php','_self')</script>";
			header('location:confirm.php');
			// echo "<script>window.open('admin_section/index.php','_self')</script>";
		}else{
			// echo "<script>alert('Account not Successful, Thanks')</script>";
			$error_message3 = "Account not Successful, Thanks";

		}

		  }
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <style type="text/css">
    	
    	#error
		{
			margin-top: 20px;
			color:maroon;
			font-family: verdana,sans-serif;
			font-size: 8pt;
		}
    </style>
</head>

<body>
	
	<div id="page">

		<?php
		 include ("include/header.php");
		 session_start(); ?>
	<!-- /header -->
		
	<div class="sub_header_in sticky_header">
		<div class="container">
			<h1>Account</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
	
	<main>
		<div class="container margin_60">
			<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="client">Already Client</h3>
					<form action="" method="POST">
					<div class="form_container">
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email*">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="pass" id="pass" value="" placeholder="Password*">
						</div>
						<div class="clearfix add_bottom_15">
							<div class="checkboxes float-left">
								<label class="container_check">Remember me
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="float-right"><a id="forgot" href="javascript:void(0);">Lost Password?</a></div>
						</div>
						<div class="text-center"><input type="submit" name="login" value="Log In" class="btn_1 full-width"></div>
						<div id="forgot_pw">
							<form action="" method="post">
							<div class="form-group">
								<input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email" >
							</div>
							<p>A new password will be sent shortly.</p>
							<div class="text-center"><input type="submit" name="resetpass" value="Reset Password" class="btn_1"></div>
							</form>
							<?php
							// Code for forget password

							if (isset($_POST['resetpass'])) {
								$email=$_POST['email_forgot'];
								$sql = $conn->prepare("select * from user where email = ?");
								$sql->bind_param("s",$email);
								$sql->execute();
								$result = $sql->get_result();
								if ($result->num_rows>0) {
							$str="123456789qwertyuiopkjhgafdsmncxc";
							$str=str_shuffle($str);
							$str=substr($str, 0, 10);
							$url="http://osazuwa.com/resetpassword.php?token=$str&email=$email";
								mail($email, "Reset Password", "To reset password please visit this: $url", "from: info@isazuwa.com\r\n");
								$sql = $conn->prepare("UPDATE user SET token=? WHERE email=?");
      							$sql->bind_param("ss",$str, $email);
      							if ($sql->execute()) {
      								echo "<script>swal({
  									title: 'Link sent',
  									text: 'Please check your email',
  									icon: 'warning',
  									button: 'Ok!',
									})</script>";
      							}
								}else{
									echo "<script>swal({
  									title: 'Pls check your input',
  									icon: 'warning',
  									button: 'Ok!',
									})</script>";
								}
							}
							?>
						</div>
						<div class="text-center add_top_10">New to Serviceswise? <strong><a href="account.php">Sign up!</a></strong></div>
					</div>
				</form>

				<?php

						if (isset($_POST['login'])) {
							$user_email=$_POST['email'];
							$user_pass=$_POST['pass'];
							$status=0;
							$sql = $conn->prepare("select * from user where email = ? and status=?");
							$sql->bind_param("si",$user_email,$status);
							$sql->execute();
							$result = $sql->get_result();

							if($result->num_rows>0){
							while($row=$result->fetch_assoc()){
								if (password_verify($user_pass, $row["password"])) {
										$_SESSION['user_email']=$user_email;
										header('location:index.php');
						        echo "<script>alert('You logged in successfully')</script>";
						        echo "<script>window.open('index.php','_self')</script>";

								}else{
										echo "<script>alert('Email/Password combination is incorrect, pls try again')</script>";
								}
							}
							}

			}
					?>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
				<div class="row hidden_tablet">
					<div class="col-md-6">
						<ul class="list_ok">
							<li>Find Locations</li>
							<li>Quality Location check</li>
							
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list_ok">
							<li>Data Protection</li>
							<li>H24 Support</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
			<form action="account.php" method="POST" enctype="multipart/form-data">
					<div class="form_container">

						
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email*" value="">
							<span id="error"><?php if (isset($_POST['submit'])) if(empty($_POST['email'])) echo "Empty! Field required"; ?></span>
							
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" id="password" value="" placeholder="Password (Should be more than 8 characters)*">
							<span id="error"><?php if (isset($_POST['submit'])) if(empty($_POST['password'])) echo "Empty! Field required"; ?></span>
							<span id="error"><?php if (isset($_POST['submit'])) if(strlen($password) <8) echo "Password must be more than 8 characters"; ?></span>
						</div>
				
						
						<div class="private box">
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="first name*" name="firstname" value="<?php if (isset($_POST['firstname'])) echo($firstname); ?>">
										<span id="error"><?php if (isset($_POST['submit'])) if(empty($_POST['firstname'])) echo "Empty! Field required"; ?></span>
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Last Name*" name="lastname" value="<?php if (isset($_POST['lastname'])) echo($lastname); ?>">
										<span id="error"><?php if (isset($_POST['submit'])) if(empty($_POST['lastname'])) echo "Empty! Field required"; ?></span>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Company name*" name="companyname" value="<?php if (isset($_POST['companyname'])) echo($companyname); ?>">
										<span id="error"><?php if (isset($_POST['submit'])) if(empty($_POST['companyname'])) echo "Empty! Field required"; ?></span>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<div class="custom-select-form">
											<select class="wide add_bottom_10" name="services" id="services">
													<option value="" selected disabled="">Select Service offered*</option>
													<?php getCats(); ?>
													<!-- <option value="Edo">Edo</option>
													<option value="Lagos">Lagos</option>
													<option value="Delta">Delta</option> -->
											</select>
										</div>
										<span id="error"><?php if (isset($_POST['submit'])) if(!isset($_POST['services'])) echo "You forgot to select services offered"; ?></span>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Address*" name="address" value="<?php if (isset($_POST['address'])) echo($address); ?>">
										<span id="error"><?php if (isset($_POST['submit'])) if(empty($_POST['address'])) echo "Empty! Field required"; ?></span>
									</div>
									<!-- <div class="form-group">
										<input type="text" class="form-control" placeholder="Full Address*" name="address">
									</div> -->
								</div>
							</div>
							<!-- /row -->
							<div class="row no-gutters">
								<div class="col-12">
									<div class="form-group">
										<div class="custom-select-form">
											<select class="wide add_bottom_10" name="location" id="location">
													<option value="" selected disabled="">Select location*</option>
													<?php getLoc(); ?>
											</select>
										</div>
										<span id="error"><?php if (isset($_POST['submit'])) if(!isset($_POST['location'])) echo "You forgot to select your location"; ?></span>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<div class="custom-select-form">
											<select class="wide add_bottom_10" name="country" id="country">
													<option value="" selected disabled="">Select country*</option>
													<option value="Nigeria">Nigeria</option>
											</select>
										</div>
										<span id="error"><?php if (isset($_POST['submit'])) if(!isset($_POST['country'])) echo "You forgot to select your country"; ?></span>
									</div>
								</div>	
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Telephone e.g 08012345678 *" name="telephone" value="<?php if (isset($_POST['telephone'])) echo($telephone); ?>">
										<span id="error"><?php if (isset($_POST['submit'])) if(empty($_POST['telephone'])) echo "Empty! Field required"; ?></span>
										<span id="error"><?php if (isset($_POST['submit'])) if(!is_numeric($_POST['telephone'])) echo "Incorrect input"; ?></span>
									</div>
								</div>
							</div>
							<!-- /row -->
						</div>
				
						<!-- /azienda -->
						<hr>
						<div class="form-group">
							<label class="container_check">Accept <a href="terms-conditions.php">Terms and conditions</a>
								<input type="checkbox" name="check">
								<span class="checkmark"></span><br>
								<span id="error"><?php if (isset($_POST['submit'])) if(!isset($_POST['check'])) echo "Checkbox Field required"; ?></span>
							</label>
						</div>
						<div class="text-center"><input type="submit" value="Register" name="submit" class="btn_1 full-width"></div>
					</div>
				</form>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
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
	
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

	<!-- COLOR SWITCHER  -->
<!-- 	<script src="js/switcher.js"></script>
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