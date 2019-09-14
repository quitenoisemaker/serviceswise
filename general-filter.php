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

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

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


	<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


	 <script type="text/javascript">
            var start = 0;
            var limit = 5;
            var reachedMax = false;

            $(window).scroll(function () {
                if ($(window).scrollTop() == $(document).height() - $(window).height())
                    getData();
            });

            $(document).ready(function () {
               getData();
            });

            function getData() {
                if (reachedMax)
                    return;

                $.ajax({
                   url: 'general-filter.php',
                   method: 'POST',
                    dataType: 'text',
                   data: {
                       getData: 1,
                       start: start,
                       limit: limit
                   },
                   success: function(response) {
                        if (response == "reachedMax")
                            reachedMax = true;
                        else {
                            start += limit;
                            $(".results").append(response);
                        }
                    }
                });
            }
        </script>
	
	<div id="page">
		
	<?php include ("include/header.php"); ?>
	<!-- /header -->
	
	<main style="">
		<div id="results">
		   <div class="container" style="padding-top: 8%;">
			   <div class="row">
				   <div class="col-lg-3 col-md-4 col-10">
					   <h4><strong><br>
					<?php 
					$location=$_POST['location'];
					$category=$_POST['category'];
					//$category=strval($_GET['category']);
					$sql="select * from user where location='".$location."' or services='".$category."' ";
					$result=$conn->query($sql);
                	if($result->num_rows >-1){
                		echo htmlentities($result->num_rows);
                	}
                		?>
					   </strong> result(s) found</h4>
				   </div>
				  
				   <div class="col-lg-6 col-md-6 col-2">
				   	<form action="" method="post"><br>
					   <a href="#" class="search_mob btn_search_mobile"></a> <!-- /open search panel -->
						<div class="row no-gutters custom-search-input-2 inner">
							
							<div class="col-lg-6">
								<select class="wide" name="category">
									<option selected="" disabled="">Select from all Categories</option>	
									<?php getCats(); ?>
								</select>
							</div>
							<div class="col-lg-5">
								<div class="wide form-group">
									<select class="wide" name="location">
										<option selected="" disabled="">Choose Location............</option>
										<?php getLoc(); ?>
									</select>
								</div>
							</div>
							
							<div class="col-lg-1">
								<input type="submit" value="Search">
							</div>
						</div>
					</form>
				   </div>
				   
			   </div>
			   <!-- /row -->
			   <form action="" method="post">
				<div class="search_mob_wp">
					<div class="custom-search-input-2">
						<div class="form-group">
							<select class="wide" name="category">
									<option selected="" disabled="">Select from all Categories</option>	
									<?php getCats(); ?>
								</select>
						</div>
						<div class="form-group">
							<select class="wide" name="location">
										<option selected="" disabled="">Choose Location............</option>
										<?php getLoc(); ?>
									</select>
						</div>
						<input type="submit" value="Search">
					</div>
				</div>
				</form>
				<!-- /search_mobile -->
		   </div>
		   <!-- /container -->
	   </div>
	   
		</div>
		

		<div class="container margin_60_35">
			<div class="isotope-wrapper">
			<div class="row">
				
				<?php 
					
					$sql="select * from user where location='".$location."' or services='".$category."' order by RAND() ";
					$result=$conn->query($sql);
                	if($result->num_rows >0){
                	while ( $row = $result->fetch_assoc()) {
            		$_SESSION['company']=$row["company_name"];
            		 $profile_pic = $row['profile_pic'];
				?> 
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item">
					<div class="strip grid">
						<figure class="crop">
							
							<a href="profile.php?user=<?php echo htmlentities(trim(str_replace(' ', _, $row['company_name'])));?>"><?php echo "<img src='user_section/profile_image/$profile_pic' class='img-fluid'>"; ?></a>
							<small><?php echo htmlentities($row["services"]); ?></small>
						</figure>
						<div class="wrapper">
							<h3><a href="profile.php?user=<?php echo htmlentities(trim(str_replace(' ', _, $row['company_name'])));?>"><?php echo htmlentities(strtoupper($row["firstname"]))." ".htmlentities(strtoupper($row["lastname"])); ?></a></h3>
							<p><?php echo substr($row["about"],0,50)."..."; ?></p>
						</div>
						<ul>
							<li>
								<span class="loc_open pe-7s-map-marker"></span>
								<a><?php echo htmlentities($row["location"])?></a>
							</li>
							<li><div class="score"></div></li>
						</ul>
					</div>
				</div>
				
				<?php }}else{ ?>
					
			
				 <div class="well well-sm text-center col-md-12 col-lg-12 col-xl-12">
				 	<h1 class="text-info" style="margin-bottom: 5%; margin-top: 5%;">No Listing Found</h1>
				 </div>
						<?php } ?>
			<!-- /row -->
			</div>
			</div>
			<!--<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>-->
			
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

	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBnG1RgQ8jpVgciCQQyuj50URjMIVl9kDo"></script>
	<script src="js/markerclusterer.js"></script>
	<script src="js/map.js"></script>
	<script src="js/infobox.js"></script>

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