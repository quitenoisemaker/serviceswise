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
    <meta name="description" content="TheAtizanz - .">
    <meta name="author" content="TheAtizanz">
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

    <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="css/admin.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="css/custom.css" rel="stylesheet">

     <style>
  
  .crop{
    
    overflow: hidden;

  }
  .crop img{
    height: 300px;
   width: 400px;
  }
</style>


</head>

<body>
	
	<div id="page" class="theia-exception">
	<?php include ("include/header.php"); ?>
	<!-- /header -->
	
	<main>		
		<div class="">
			<div class="card text-center crop">
		          <div class="card-body"><br><br>
		        <?php 
					$user=trim(strval($_GET['user']));
					$userr= str_replace(_, ' ', $user);
					$sql="select * from user where company_name='".$userr."' ";
					$result=$conn->query($sql);
                	if($result->num_rows >0){
                	while ( $row = $result->fetch_assoc()) {
            		 $profile_pic = $row['profile_pic'];
				 	$photo1= $row['photo1'];
				 	$photo2= $row['photo2'];
				 	$photo3= $row['photo3'];
				 	$profile_id=$row['id'];
		            //<!-- showing the profile pic -->
		           echo "<img src='user_section/profile_image/$profile_pic' class='img-fluid img-responsive w-30 mb-3' style='margin-top:10px;'>";

		            //<!-- showing the user name -->
		           echo "<h3>";
		            echo strtoupper($row['firstname'])." ". strtoupper($row['lastname']);
		            echo "</h3>";
		            
		            //<!-- showing the service -->
		             
		            //<!-- showing the about -->
		          
		           ?>  
		            
		          </div>
		    </div>
 
		</div>
		<!--/hero_in-->
		
		<nav class="secondary_nav sticky_horizontal_2">
			<div class="container">
				<ul class="clearfix">
					<li><a href="#description" class="active">Description</a></li>
                    <!--<li><a href="#sidebar">Location</a></li>-->
					<li><a href="#reviews"></a></li>
				</ul>
			</div>
		</nav>

		<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-12">
						<section id="description">
							<div class="detail_title_1">
								<h1><?php echo strtoupper($row['company_name']); ?></h1>
								<h3 class="address"><?php echo ucwords($row['services']); ?></h3>
							</div>
							<i><?php echo htmlentities(ucfirst($row['about'])); ?></i><br>
							<hr>
							<!-- /row -->
							<div class="opening" style="font-family: serif; font-size: 20px">
                                <div class="ribbon">
                                    <span class="open">Contact</span>
                                </div>
                                <i class="icon-location"></i>
                                <h3>Contact address</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><b><?php echo ucfirst($row['address'])."<br>"; ?> <?php echo ucfirst($row['location'])."<br>"; ?> <?php echo ucfirst($row['country']); ?></b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><b>Phone contact: </b><span><?php echo ucfirst($row['phone']); ?></span></li>
                                            <li><b>Email address:</b> <span><?php echo ucfirst($row['email']); ?></span></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                        	</div>
                        	<hr>					
							<div class="opening">
                               
                                <i class="icon_camera_alt"></i>
                                <h3>Gallery</h3> <br>
                                <div class="wrapper">
									<div class="grid-gallery">
                      				<?php

                      			echo "<ul class='magnific-gallery'>
								<li>
								<figure>
							<img src='user_section/img/$photo1' alt=''>
							<figcaption>
								<div class='caption-content'>
									<a href='user_section/img/$photo1' title='Photo title' data-effect='mfp-zoom-in'>
										<i class='pe-7s-albums'></i>
										<p>My photo</p>
									</a>
								</div>
							</figcaption>
						</figure>
						</li>
						<li>
						<figure>
							<img src='user_section/img/$photo2' alt=''>
							<figcaption>
								<div class='caption-content'>
									<a href='user_section/img/$photo2' title='Photo title' data-effect='mfp-zoom-in'>
										<i class='pe-7s-albums'></i>
										<p>My photo</p>
									</a>
								</div>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src='user_section/img/$photo3' alt=''>
							<figcaption>
								<div class='caption-content'>
									<a href='user_section/img/$photo3' title='Photo title' data-effect='mfp-zoom-in'>
										<i class='pe-7s-albums'></i>
										<p>My photo</p>
									</a>
								</div>
							</figcaption>
						</figure>
					</li>	
				</ul>";
                      	 ?>
			
			              </div>
								</div>
                            </div>
                            <!-- /opening -->
                  
						</section>
						<!-- /section -->
						<!-- /section -->
						<hr>
						<?php /*
								$sql="select id from user where email='".$_SESSION['user_email']."' ";
										$result=$conn->query($sql);
								        if($result->num_rows >0){
								        while ( $row = $result->fetch_assoc()) {
								        	$user_id= $row['id'];
								        }
								    }


							if (isset($_POST['send'])) {
								if ($_SESSION['user_email']) {
									//$profile_id=$row['id'];
									//$user_id= $row['id'];
									//$rating_review=$_POST['rating_review'];
									$review_text=$_POST['review_text'];
									
									if(isset($_POST['rating_review'])){
									  	$rate_index=$_POST['rating_review'];
									  }

									  $sql = $conn->prepare("select profile_id, rater_id from rating where profile_id = ? and rater_id = ?");
									  		$sql->bind_param("ii",$profile_id, $user_id);
									  		$sql->execute();
									  		$result = $sql->get_result();
									  		if ($result->num_rows==1) { 
									  		echo "<script>alert('You've rated this artisan before!')</script>";
									  		exit();
									  		}
									
									if(!empty($review_text)) {
   	
										$sql = $conn->prepare("INSERT INTO rating (profile_id,rater_id,rate_index,comment) VALUES(?,?,?,?)");
											$sql->bind_param("iiis", $profile_id,$user_id,$rate_index,$review_text); 
											if($sql->execute()) {
												//$_SESSION['user_email']=$email;
								
												echo "<script>alert('You review has been submitted succesfully, pending approval!')</script>"; 
												// echo "<script>window.open('admin_section/index.php','_self')</script>";
											}else{
												echo "<script>alert('Error submitting your review, please try again')</script>";
											}
										}else{
											echo "<script>alert('ALl fields required')</script>";
										}
									}else{
										echo "<script>alert('PLEASE LOGIN TO SEND REVIEW ON ARTISAN.')</script>";
									}
							}*/
						 ?>
						 <!--
							<div class="add-review">
								<h5>Leave a Review</h5>
								<form action="" method="post">
									<div class="row">
										<div class="col-md-3"></div>
										<div class="form-group col-md-6">
											<label>Rating </label>
											<div class="custom-select-form">
											<select name="rating_review" id="rating_review" class="wide">
												<option value="1">1 (lowest)</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5" selected>5 (highest)</option>
												
											</select>
											</div>
										</div>
										<div class="col-md-3"></div>

										<div class="col-md-3"></div>
										<div class="form-group col-md-6">
											<label>Your Review</label>
											
											<textarea name="review_text" id="review_text" class="form-control" style="height:130px;resize: none;"></textarea>
											<div class="form-group text-center add_top_20 add_bottom_30">
												<input type="submit" value="Submit" name="send" class="btn_1" id="submit-review">
											</div>
										</div>
										
										<div class="col-md-3"></div>
									</div>
								</form>
							</div>
					</div>
					<!-- /col -->
					
					
				</div>
				<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	<?php  include("include/footer.php") ?>
	<!--/footer-->
	</div>
<?php }}else{
		          	header('location:index.php');
		          } ?>
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
	<script src="js/map_single_restaurant.js"></script>
	<script src="js/infobox.js"></script>
	
	<!-- INPUT QUANTITY  -->
	<script src="js/input_qty.js"></script>
	
	<!-- DATEPICKER  -->
	<script>
    $('input[name="dates"]').daterangepicker({
        "singleDatePicker": true,
        "parentEl": '#input-dates',
        "opens": "left"
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
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
    </div>
   -->
</body>

</html>