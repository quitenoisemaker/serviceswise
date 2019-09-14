<?php 
	include ('db/db.php');
	//session_start();
?>
<header class="header_in is_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div id="logo">
						<a href="index.php" class="navbar-brand" ><i style="color: green;">SERVICES</i><span style="color: gold">WISE</span></a>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<!-- <ul id="top_menu">
						<li><a href="admin_section/add-listing.html" class="btn_add" target="_blank">Add Listing</a></li>
						<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
						<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
					</ul> -->
					<!-- /top_menu -->
					<a href="#menu" class="btn_mobile">
						<div class="hamburger hamburger--spin" id="hamburger">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</a>
					<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="index.php">Home</a></span></li>
				<li><span><a href="about.php">About</a></span></li>
				<?php if (!isset($_SESSION['user_email'])) { ?>

				<li><span><a href="account.php">Account</a></span></li>
				<?php }else {
		            $user=$_SESSION['user_email'];
		            $sql = $conn->prepare("select firstname, lastname from user where email = ?");
		            $sql->bind_param("s",$user);
		            $sql->execute();
			          $result = $sql->get_result();
			          while($row=$result->fetch_assoc()){
			          $fname = $row['firstname'];
			          $lname = $row['lastname']; 
			    ?>

				<li><a href="user_section/user_account.php" class="btn_add"><?php echo "Welcome". " ". htmlentities(ucwords($fname))." ". htmlentities(ucwords($lname));  ?></a>
				</li>
				<?php }} ?>
				<!-- <li><span><a href="media-gallery.html">Media gallery</a></span></li> -->
				<li><span><a href="faq.php">Faq Section</a></span></li>
				<li><span><a href="contacts.php">Contacts</a></span></li>
			</ul>
		</nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->		
	</header>
	<!-- /header -->