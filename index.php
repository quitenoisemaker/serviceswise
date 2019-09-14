
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

	 <style>
  
  .crop{
    
    overflow: hidden;
  }
  .crop img{
    height: 200px;
    width: 200px;
  }
</style>

</head>

<body>
		
	<div id="page">
		
	<?php include ("include/header.php"); ?>
	
	<main>
		<section class="hero_single version_4" style="background-image: url(img/skillmen4.jpg); background-size: cover">
			<div class="wrapper">
				<div class="container">
					<h3>Find what you need!</h3>
					<p>Discover top artisans near you</p>
					<form method="post" action="general-filter.php">
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<select class="wide form-group" name="category">
									<option value="" selected="" disabled="">What Service are you looking for...?</option>
									<?php getCats(); ?>
								</select>
							</div>
							<div class="col-lg-4">
								<select class="wide form-group" name="location">
									<option value="" selected="" disabled="">OR Search by Location...</option>
									<?php getLoc(); ?>

								</select>							
									
							</div>
							<div class="col-lg-4">
								<input type="submit" value="Search">
							</div>
						</div>
						<!-- /row -->
					</form>
					<ul class="counter">
						<li><strong>
							<?php 
						$sql="select id from location";
					$result=$conn->query($sql);
                	if($result->num_rows >-1){
                		echo htmlentities($result->num_rows);
                	}
                		?>
						</strong> Locations</li>
						<li>Over <strong>1150</strong> Active users</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- /hero_single -->	

		<div class="container-fluid margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Popular Artisans</h2>
				<p>Most sort after artisans</p>
			</div>
		
			<div id="reccomended" class="owl-carousel owl-theme">
				
					<?php  
						$sql="select * from user order by RAND() limit 5";
						$result=$conn->query($sql);
	                	if($result->num_rows >0){
	                	while ( $row = $result->fetch_assoc()) {
	                	$_SESSION['company']=$row["company_name"];
	                	$profile_pic = $row['profile_pic'];
        			?>
        		<div class="item">
					<div class="strip grid">
						<figure class="crop">
							<a href="profile.php?user=<?php echo trim(str_replace(' ', _, $row['company_name']));?>" class=""></a>
							<a href="profile.php?user=<?php echo trim(str_replace(' ', _, $row['company_name']));?>">
								<?php echo "<img src='user_section/profile_image/$profile_pic' class='img-fluid' width='266' height='266'>"; ?>
							</a>
							<small><?php echo $row["services"]; ?></small>
						</figure>
						<div class="wrapper">
							<h3><a href="profile.php?user=<?php echo trim(str_replace(' ', _, $row['company_name']));?>"><?php echo strtoupper($row["firstname"])." ".strtoupper($row["lastname"]); ?></a></h3>
							<p><?php echo substr($row["about"],0,50)."..."; ?></p>
						</div>
						<ul>
							<li><a href="profile.php?user=<?php echo trim(str_replace(' ', _, $row['company_name']));?>"><span class="loc_open">Get more details</span></a></li>
							<li><div class="score"></div></li>
						</ul>
					</div>
				</div>
					<?php }} ?>
				
				<!-- /item -->
			</div>
			<!-- /carousel -->
			<div class="container">
				<!--<div class="btn_home_align"><a href="general-filter.php" class="btn_1 rounded">View all</a></div>-->
			</div>
			<!-- /container -->
		</div>
		<!-- /container -->
		
		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Available Services</h2>
					<p>Select your desired artisan based on the available services.</p>
				</div>
				<div class="row justify-content-center">
					
						<?php
                
				                $sql = "SELECT * FROM category limit 10";
				                $result=$conn->query($sql);
				                while($row = $result->fetch_assoc())
				                  {  $_SESSION['service']=$row["category_name"];


				                  	?>
				                  
				                  	<div class="col-lg-3 col-md-6">

				                  		<a href="grid-listings-filterstop.php?cat=<?php echo htmlentities(str_replace(' ', _, $row['category_name']));?>" class="box_cat_home">
											<i class="icon_menu-circle_alt"></i>
											<!-- <img src="img/icon_home_1.svg" width="65" height="65" alt=""> -->
											<h3><?php echo htmlentities($row["category_name"]); ?></h3>
										</a>

				                  	</div>
				                  	
        				<?php } ?>
							
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->	
		</div>
		<!-- /bg_color_1 -->
		
		<div class="call_section image_bg" style="background-image: url(img/skillmen2.jpg);">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
						<span><em></em></span>
						<h2>How it Works</h2>
						<p style="font-size: 18px">Do you wish to get services rendered to you at the comfort of your home? All you need to do is to search the category session for service you want and type your location.  Yes! As simple as that.</p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box_how wow">
								<i class="pe-7s-search"></i>
								<h3>Search for services offered or by locations</h3>
								<p>Start be searching for various artisans close to your location by selecting from the available dropdown lists.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-info"></i>
								<h3>View location info</h3>
								<p>View vital information about your desired artisan after search.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-like2"></i>
								<h3>Reach or Call</h3>
								<p>Finally, reach out to your choosen artisan from the contact information provided.</p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="account.php" class="btn_1 rounded">Register Now</a></p>
				</div>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->
	<?php  include("include/footer.php") ?>
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