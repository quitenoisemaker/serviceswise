<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>SPARKER | Premium directory and listings template by Ansonika.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

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
	
	.font-icon-list {
	  padding: 20px 0px 0px 0px;
	  margin-bottom: 20px; }
	
	.font-icon-list:hover {
	  cursor: pointer; }
	
	.font-icon-detail {
	  text-align: center; }
	
	.font-icon-detail span:first-child {
	  display: inline-block;
	  transition: color 150ms linear, background 150ms linear, font-size 150ms linear, width 150ms;
	  padding: 10px 0px;
	  width: 70px;
	  font-size: 48px;
	  color: #1a1a1a;
	  border: 1px solid #eaeaea;
	  border-radius: 3px; }
	
	.font-icon-name {
	  font-size: 13px;
	  margin-top: 15px;
	  display: block;
	  text-align: center;
	  width: 100%;
	  padding: 0;
	  border: 0; }
	
	.font-icon-name:focus, .font-icon-name:active {
	  outline: none; }
	
	.font-icon-code {
	  max-height: 0;
	  overflow: hidden;
	  text-align: center;
	  opacity: 0;
	  transition: max-height 200ms linear, opacity 200ms linear; }
	
	.font-icon-code.show {
	  max-height: 200px;
	  opacity: 1; }
	
	.code-value, .unicode, .unicode-text {
	  background: none;
	  text-align: center;
	  border: none;
	  color: #a0a0a0; }
	
	.code-value {
	  display: block;
	  width: 100%; }
	
	.unicode, .unicode-text {
	  color: #a0a0a0; }
	
	.unicode {
	  float: left;
	  font-family: "Pe-icon-7-stroke";
	  text-align: right;
	  width: 38%;
	  padding-right: 5px; }
	
	.unicode-text {
	  text-align: left;
	  float: left;
	  display: inline-block;
	  width: 100px;
	  border: none; }
	
	.unicode-text:focus,
	.unicode-text:active {
	  outline: none; }
	
	.font-icon-list:hover .font-icon-name,
	.font-icon-list:hover .code-value,
	.font-icon-list:hover .unicode,
	.font-icon-list:hover .unicode-text,
	.font-icon-detail.zeroclipboard-is-hover .font-icon-name,
	.font-icon-detail.zeroclipboard-is-hover + .font-icon-code .code-value,
	.font-icon-detail.zeroclipboard-is-hover + .font-icon-code .unicode,
	.font-icon-detail.zeroclipboard-is-hover + .font-icon-code .unicode-text {
	  cursor: text;
	  color: #1a1a1a; }
	.font-icon-list:hover .font-icon-detail span:first-child,
	.font-icon-detail.zeroclipboard-is-hover span:first-child {
	  color: #fff;
	  background: #1a1a1a; }
	.font-icon-name::-moz-selection,
	.code-value::-moz-selection,
	.unicode::-moz-selection,
	.unicode-text::-moz-selection,
	.font-icon-name::-moz-selection {
	  background: #aadce2;
	  color: #1a1a1a; }
	
	.font-icon-name::selection,
	.code-value::selection,
	.unicode::selection,
	.unicode-text::selection,
	.font-icon-name::selection {
	  background: #aadce2;
	  color: #1a1a1a; }
	
	.font-icon-name::-moz-selection,
	.code-value::-moz-selection,
	.unicode::-moz-selection,
	.unicode-text::-moz-selection,
	.font-icon-name::-moz-selection {
	  background: #aadce2;
	  color: #1a1a1a; }

	</style>

</head>

<body>
	
	<div id="page">
		
	<header class="header_in is_sticky menu_fixed">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div id="logo">
						<a href="index.html">
							<img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<ul id="top_menu">
						<li><a href="admin_section/add-listing.html" class="btn_add" target="_blank">Add Listing</a></li>
						<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
						<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
					</ul>
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
				<li><span><a href="#0">Home</a></span>
					<ul>
						<li><a href="index.html">Home version 1</a></li>
						<li><a href="index-2.html">Home version 2</a></li>
						<li><a href="index-3.html">Home version 3</a></li>
						<li><a href="index-4.html">Home version 4</a></li>
						<li><a href="index-5.html">Home version 5</a></li>
						<li><a href="index-6.html">Home version 6 (GDPR)</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Listings</a></span>
					<ul>
						<li>
							<span><a href="#0">Grid Layout</a></span>
							<ul>
								<li><a href="grid-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
								<li><a href="grid-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
								<li><a href="grid-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
								<li><a href="grid-listings-filterstop.html">Full+Search mobile 2</a></li>
								<li><a href="grid-listings-isotope.html">Full+Isotope filter</a></li>
							</ul>
						</li>
						<li>
							<span><a href="#0">Row Layout</a></span>
							<ul>
								<li><a href="row-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
								<li><a href="row-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
								<li><a href="row-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
								<li><a href="row-listings-filterstop.html">Full+Search mobile 2</a></li>
								<li><a href="row-listings-isotope.html">Full+Isotope filter</a></li>
							</ul>
						</li>
						<li><a href="listing-map.html">Listing Map</a></li>
						<li>
							<span><a href="#0">Detail pages</a></span>
							<ul>
								<li><a href="detail-hotel.html">Detail page 1</a></li>
								<li><a href="detail-restaurant.html">Detail page 2</a></li>
								<li><a href="detail-shop.html">Detail page 3</a></li>
							</ul>
						</li>
                        <li><a href="bookings.html">Bookings - Purchases</a></li>
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="confirm.html">Confirm</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Pages</a></span>
					<ul>
						<li><a href="admin_section/index.html" target="_blank">Admin section</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="account.html">Account</a></li>
						<li><a href="help.html">Help Section</a></li>
						<li><a href="faq.html">Faq Section</a></li>
						<li><a href="wishlist.html">Wishlist page</a></li>
						<li><a href="contacts.html">Contacts</a></li>
						<li>
							<span><a href="#0">Icon Packs</a></span>
							<ul>
								<li><a href="icon-pack-1.html">Icon pack 1</a></li>
								<li><a href="icon-pack-2.html">Icon pack 2</a></li>
								<li><a href="icon-pack-3.html">Icon pack 3</a></li>
								<li><a href="icon-pack-4.html">Icon pack 4</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li><a href="media-gallery.html">Media gallery</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Extra</a></span>
					<ul>
						<li><a href="404.html">404 page</a></li>
						<li><a href="contacts-2.html">Contacts 2</a></li>
						<li><a href="pricing-tables.html">Pricing tables</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="menu-options.html">Menu Options</a></li>
						<li><a href="invoice.html" target="_blank">Invoice</a></li>
						<li><a href="coming_soon/index.html" target="_blank">Coming Soon</a></li>
					</ul>
				</li>
				<li><span><a href="https://themeforest.net/item/sparker-directory-and-listings-template/22716006?ref=ansonika" target="_parent">Buy template</a></span></li>
			</ul>
		</nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->		
	</header>
	<!-- /header -->
	
	<div class="sub_header_in sticky_header">
		<div class="container">
			<h1>Icon pack 2</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
	
	<main>
		<div class="container margin_60">
		<div class="main_title_2">
			<span><em></em></span>
			<h2>Pe Icon Font Stroke Pack</h2>
			<p>More than 220 Icon Fonts with Retina support</p>
		</div>
		
		<div class="row">
        <div class="col-md-12">
                 <input id="chkbx-1" type="checkbox" class="checkbox" style="display:inline">
                <label for="chkbx-1" style="display:inline"> Show Codes</label>
        </div>
        </div>
        <hr>
        <div id="all-icons" class="row">
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-album"></span>
              <input type="text" value="pe-7s-album" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6aa" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6aa" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-arc"></span>
              <input type="text" value="pe-7s-arc" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6ab" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6ab" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-back-2"></span>
              <input type="text" value="pe-7s-back-2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6ac" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6ac" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-bandaid"></span>
              <input type="text" value="pe-7s-bandaid" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6ad" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6ad" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-car"></span>
              <input type="text" value="pe-7s-car" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6ae" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6ae" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-diamond"></span>
              <input type="text" value="pe-7s-diamond" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6af" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6af" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-door-lock"></span>
              <input type="text" value="pe-7s-door-lock" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b0" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b0" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-eyedropper"></span>
              <input type="text" value="pe-7s-eyedropper" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b1" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b1" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-female"></span>
              <input type="text" value="pe-7s-female" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b2" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b2" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-gym"></span>
              <input type="text" value="pe-7s-gym" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b3" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b3" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-hammer"></span>
              <input type="text" value="pe-7s-hammer" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b4" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b4" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-headphones"></span>
              <input type="text" value="pe-7s-headphones" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b5" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b5" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-helm"></span>
              <input type="text" value="pe-7s-helm" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b6" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b6" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-hourglass"></span>
              <input type="text" value="pe-7s-hourglass" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b7" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b7" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-leaf"></span>
              <input type="text" value="pe-7s-leaf" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b8" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b8" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-magic-wand"></span>
              <input type="text" value="pe-7s-magic-wand" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6b9" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6b9" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-male"></span>
              <input type="text" value="pe-7s-male" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6ba" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6ba" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-map-2"></span>
              <input type="text" value="pe-7s-map-2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6bb" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6bb" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-next-2"></span>
              <input type="text" value="pe-7s-next-2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6bc" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6bc" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-paint-bucket"></span>
              <input type="text" value="pe-7s-paint-bucket" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6bd" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6bd" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-pendrive"></span>
              <input type="text" value="pe-7s-pendrive" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6be" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6be" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-photo"></span>
              <input type="text" value="pe-7s-photo" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6bf" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6bf" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-piggy"></span>
              <input type="text" value="pe-7s-piggy" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c0" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c0" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-plugin"></span>
              <input type="text" value="pe-7s-plugin" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c1" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c1" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-refresh-2"></span>
              <input type="text" value="pe-7s-refresh-2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c2" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c2" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-rocket"></span>
              <input type="text" value="pe-7s-rocket" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c3" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c3" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-settings"></span>
              <input type="text" value="pe-7s-settings" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c4" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c4" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-shield"></span>
              <input type="text" value="pe-7s-shield" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c5" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c5" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-smile"></span>
              <input type="text" value="pe-7s-smile" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c6" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c6" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-usb"></span>
              <input type="text" value="pe-7s-usb" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c7" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c7" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-vector"></span>
              <input type="text" value="pe-7s-vector" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c8" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c8" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-wine"></span>
              <input type="text" value="pe-7s-wine" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6c9" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6c9" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-cloud-upload"></span>
              <input type="text" value="pe-7s-cloud-upload" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e68a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe68a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-cash"></span>
              <input type="text" value="pe-7s-cash" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e68c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe68c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-close"></span>
              <input type="text" value="pe-7s-close" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e680" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe680" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-bluetooth"></span>
              <input type="text" value="pe-7s-bluetooth" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e68d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe68d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-cloud-download"></span>
              <input type="text" value="pe-7s-cloud-download" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e68b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe68b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-way"></span>
              <input type="text" value="pe-7s-way" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e68e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe68e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-close-circle"></span>
              <input type="text" value="pe-7s-close-circle" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e681" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe681" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-id"></span>
              <input type="text" value="pe-7s-id" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e68f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe68f" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-angle-up"></span>
              <input type="text" value="pe-7s-angle-up" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e682" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe682" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-wristwatch"></span>
              <input type="text" value="pe-7s-wristwatch" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e690" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe690" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-angle-up-circle"></span>
              <input type="text" value="pe-7s-angle-up-circle" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e683" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe683" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-world"></span>
              <input type="text" value="pe-7s-world" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e691" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe691" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-angle-right"></span>
              <input type="text" value="pe-7s-angle-right" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e684" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe684" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-volume"></span>
              <input type="text" value="pe-7s-volume" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e692" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe692" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-angle-right-circle"></span>
              <input type="text" value="pe-7s-angle-right-circle" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e685" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe685" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-users"></span>
              <input type="text" value="pe-7s-users" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e693" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe693" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-angle-left"></span>
              <input type="text" value="pe-7s-angle-left" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e686" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe686" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-user-female"></span>
              <input type="text" value="pe-7s-user-female" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e694" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe694" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-angle-left-circle"></span>
              <input type="text" value="pe-7s-angle-left-circle" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e687" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe687" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-up-arrow"></span>
              <input type="text" value="pe-7s-up-arrow" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e695" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe695" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-angle-down"></span>
              <input type="text" value="pe-7s-angle-down" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e688" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe688" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-switch"></span>
              <input type="text" value="pe-7s-switch" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e696" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe696" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-angle-down-circle"></span>
              <input type="text" value="pe-7s-angle-down-circle" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e689" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe689" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-scissors"></span>
              <input type="text" value="pe-7s-scissors" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e697" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe697" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-wallet"></span>
              <input type="text" value="pe-7s-wallet" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e600" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe600" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-safe"></span>
              <input type="text" value="pe-7s-safe" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e698" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe698" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-volume2"></span>
              <input type="text" value="pe-7s-volume2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e601" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe601" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-volume1"></span>
              <input type="text" value="pe-7s-volume1" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e602" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe602" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-voicemail"></span>
              <input type="text" value="pe-7s-voicemail" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e603" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe603" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-video"></span>
              <input type="text" value="pe-7s-video" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e604" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe604" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-user"></span>
              <input type="text" value="pe-7s-user" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e605" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe605" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-upload"></span>
              <input type="text" value="pe-7s-upload" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e606" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe606" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-unlock"></span>
              <input type="text" value="pe-7s-unlock" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e607" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe607" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-umbrella"></span>
              <input type="text" value="pe-7s-umbrella" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e608" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe608" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-trash"></span>
              <input type="text" value="pe-7s-trash" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e609" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe609" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-tools"></span>
              <input type="text" value="pe-7s-tools" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e60a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe60a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-timer"></span>
              <input type="text" value="pe-7s-timer" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e60b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe60b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-ticket"></span>
              <input type="text" value="pe-7s-ticket" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e60c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe60c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-target"></span>
              <input type="text" value="pe-7s-target" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e60d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe60d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-sun"></span>
              <input type="text" value="pe-7s-sun" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e60e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe60e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-study"></span>
              <input type="text" value="pe-7s-study" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e60f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe60f" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-stopwatch"></span>
              <input type="text" value="pe-7s-stopwatch" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e610" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe610" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-star"></span>
              <input type="text" value="pe-7s-star" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e611" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe611" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-speaker"></span>
              <input type="text" value="pe-7s-speaker" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e612" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe612" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-signal"></span>
              <input type="text" value="pe-7s-signal" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e613" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe613" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-shuffle"></span>
              <input type="text" value="pe-7s-shuffle" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e614" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe614" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-shopbag"></span>
              <input type="text" value="pe-7s-shopbag" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e615" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe615" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-share"></span>
              <input type="text" value="pe-7s-share" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e616" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe616" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-server"></span>
              <input type="text" value="pe-7s-server" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e617" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe617" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-search"></span>
              <input type="text" value="pe-7s-search" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e618" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe618" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-film"></span>
              <input type="text" value="pe-7s-film" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a5" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a5" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-science"></span>
              <input type="text" value="pe-7s-science" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e619" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe619" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-disk"></span>
              <input type="text" value="pe-7s-disk" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a6" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a6" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-ribbon"></span>
              <input type="text" value="pe-7s-ribbon" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e61a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe61a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-repeat"></span>
              <input type="text" value="pe-7s-repeat" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e61b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe61b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-refresh"></span>
              <input type="text" value="pe-7s-refresh" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e61c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe61c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-add-user"></span>
              <input type="text" value="pe-7s-add-user" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a9" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a9" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-refresh-cloud"></span>
              <input type="text" value="pe-7s-refresh-cloud" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e61d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe61d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-paperclip"></span>
              <input type="text" value="pe-7s-paperclip" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e69c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe69c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-radio"></span>
              <input type="text" value="pe-7s-radio" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e61e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe61e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-note2"></span>
              <input type="text" value="pe-7s-note2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e69d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe69d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-print"></span>
              <input type="text" value="pe-7s-print" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e61f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe61f" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-network"></span>
              <input type="text" value="pe-7s-network" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e69e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe69e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-prev"></span>
              <input type="text" value="pe-7s-prev" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e620" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe620" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-mute"></span>
              <input type="text" value="pe-7s-mute" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e69f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe69f" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-power"></span>
              <input type="text" value="pe-7s-power" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e621" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe621" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-medal"></span>
              <input type="text" value="pe-7s-medal" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a0" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a0" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-portfolio"></span>
              <input type="text" value="pe-7s-portfolio" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e622" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe622" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-like2"></span>
              <input type="text" value="pe-7s-like2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a1" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a1" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-plus"></span>
              <input type="text" value="pe-7s-plus" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e623" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe623" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-left-arrow"></span>
              <input type="text" value="pe-7s-left-arrow" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a2" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a2" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-play"></span>
              <input type="text" value="pe-7s-play" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e624" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe624" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-key"></span>
              <input type="text" value="pe-7s-key" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a3" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a3" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-plane"></span>
              <input type="text" value="pe-7s-plane" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e625" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe625" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-joy"></span>
              <input type="text" value="pe-7s-joy" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a4" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a4" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-photo-gallery"></span>
              <input type="text" value="pe-7s-photo-gallery" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e626" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe626" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-pin"></span>
              <input type="text" value="pe-7s-pin" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e69b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe69b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-phone"></span>
              <input type="text" value="pe-7s-phone" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e627" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe627" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-plug"></span>
              <input type="text" value="pe-7s-plug" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e69a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe69a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-pen"></span>
              <input type="text" value="pe-7s-pen" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e628" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe628" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-right-arrow"></span>
              <input type="text" value="pe-7s-right-arrow" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e699" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe699" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-paper-plane"></span>
              <input type="text" value="pe-7s-paper-plane" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e629" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe629" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-delete-user"></span>
              <input type="text" value="pe-7s-delete-user" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a7" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a7" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-paint"></span>
              <input type="text" value="pe-7s-paint" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e62a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe62a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-bottom-arrow"></span>
              <input type="text" value="pe-7s-bottom-arrow" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e6a8" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe6a8" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-notebook"></span>
              <input type="text" value="pe-7s-notebook" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e62b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe62b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-note"></span>
              <input type="text" value="pe-7s-note" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e62c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe62c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-next"></span>
              <input type="text" value="pe-7s-next" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e62d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe62d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-news-paper"></span>
              <input type="text" value="pe-7s-news-paper" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e62e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe62e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-musiclist"></span>
              <input type="text" value="pe-7s-musiclist" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e62f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe62f" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-music"></span>
              <input type="text" value="pe-7s-music" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e630" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe630" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-mouse"></span>
              <input type="text" value="pe-7s-mouse" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e631" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe631" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-more"></span>
              <input type="text" value="pe-7s-more" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e632" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe632" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-moon"></span>
              <input type="text" value="pe-7s-moon" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e633" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe633" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-monitor"></span>
              <input type="text" value="pe-7s-monitor" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e634" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe634" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-micro"></span>
              <input type="text" value="pe-7s-micro" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e635" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe635" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-menu"></span>
              <input type="text" value="pe-7s-menu" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e636" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe636" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-map"></span>
              <input type="text" value="pe-7s-map" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e637" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe637" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-map-marker"></span>
              <input type="text" value="pe-7s-map-marker" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e638" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe638" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-mail"></span>
              <input type="text" value="pe-7s-mail" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e639" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe639" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-mail-open"></span>
              <input type="text" value="pe-7s-mail-open" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e63a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe63a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-mail-open-file"></span>
              <input type="text" value="pe-7s-mail-open-file" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e63b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe63b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-magnet"></span>
              <input type="text" value="pe-7s-magnet" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e63c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe63c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-loop"></span>
              <input type="text" value="pe-7s-loop" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e63d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe63d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-look"></span>
              <input type="text" value="pe-7s-look" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e63e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe63e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-lock"></span>
              <input type="text" value="pe-7s-lock" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e63f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe63f" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-lintern"></span>
              <input type="text" value="pe-7s-lintern" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e640" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe640" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-link"></span>
              <input type="text" value="pe-7s-link" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e641" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe641" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-like"></span>
              <input type="text" value="pe-7s-like" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e642" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe642" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-light"></span>
              <input type="text" value="pe-7s-light" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e643" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe643" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-less"></span>
              <input type="text" value="pe-7s-less" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e644" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe644" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-keypad"></span>
              <input type="text" value="pe-7s-keypad" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e645" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe645" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-junk"></span>
              <input type="text" value="pe-7s-junk" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e646" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe646" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-info"></span>
              <input type="text" value="pe-7s-info" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e647" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe647" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-home"></span>
              <input type="text" value="pe-7s-home" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e648" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe648" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-help2"></span>
              <input type="text" value="pe-7s-help2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e649" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe649" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-help1"></span>
              <input type="text" value="pe-7s-help1" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e64a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe64a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-graph3"></span>
              <input type="text" value="pe-7s-graph3" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e64b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe64b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-graph2"></span>
              <input type="text" value="pe-7s-graph2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e64c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe64c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-graph1"></span>
              <input type="text" value="pe-7s-graph1" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e64d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe64d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-graph"></span>
              <input type="text" value="pe-7s-graph" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e64e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe64e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-global"></span>
              <input type="text" value="pe-7s-global" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e64f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe64f" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-gleam"></span>
              <input type="text" value="pe-7s-gleam" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e650" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe650" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-glasses"></span>
              <input type="text" value="pe-7s-glasses" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e651" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe651" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-gift"></span>
              <input type="text" value="pe-7s-gift" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e652" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe652" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-folder"></span>
              <input type="text" value="pe-7s-folder" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e653" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe653" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-flag"></span>
              <input type="text" value="pe-7s-flag" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e654" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe654" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-filter"></span>
              <input type="text" value="pe-7s-filter" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e655" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe655" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-file"></span>
              <input type="text" value="pe-7s-file" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e656" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe656" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-expand1"></span>
              <input type="text" value="pe-7s-expand1" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e657" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe657" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-exapnd2"></span>
              <input type="text" value="pe-7s-exapnd2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e658" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe658" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-edit"></span>
              <input type="text" value="pe-7s-edit" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e659" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe659" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-drop"></span>
              <input type="text" value="pe-7s-drop" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e65a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe65a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-drawer"></span>
              <input type="text" value="pe-7s-drawer" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e65b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe65b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-download"></span>
              <input type="text" value="pe-7s-download" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e65c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe65c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-display2"></span>
              <input type="text" value="pe-7s-display2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e65d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe65d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-display1"></span>
              <input type="text" value="pe-7s-display1" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e65e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe65e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-diskette"></span>
              <input type="text" value="pe-7s-diskette" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e65f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe65f" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-date"></span>
              <input type="text" value="pe-7s-date" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e660" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe660" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-cup"></span>
              <input type="text" value="pe-7s-cup" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e661" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe661" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-culture"></span>
              <input type="text" value="pe-7s-culture" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e662" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe662" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-crop"></span>
              <input type="text" value="pe-7s-crop" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e663" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe663" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-credit"></span>
              <input type="text" value="pe-7s-credit" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e664" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe664" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-copy-file"></span>
              <input type="text" value="pe-7s-copy-file" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e665" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe665" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-config"></span>
              <input type="text" value="pe-7s-config" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e666" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe666" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-compass"></span>
              <input type="text" value="pe-7s-compass" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e667" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe667" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-comment"></span>
              <input type="text" value="pe-7s-comment" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e668" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe668" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-coffee"></span>
              <input type="text" value="pe-7s-coffee" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e669" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe669" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-cloud"></span>
              <input type="text" value="pe-7s-cloud" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e66a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe66a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-clock"></span>
              <input type="text" value="pe-7s-clock" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e66b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe66b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-check"></span>
              <input type="text" value="pe-7s-check" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e66c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe66c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-chat"></span>
              <input type="text" value="pe-7s-chat" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e66d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe66d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-cart"></span>
              <input type="text" value="pe-7s-cart" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e66e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe66e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-camera"></span>
              <input type="text" value="pe-7s-camera" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e66f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe66f" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-call"></span>
              <input type="text" value="pe-7s-call" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e670" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe670" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-calculator"></span>
              <input type="text" value="pe-7s-calculator" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e671" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe671" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-browser"></span>
              <input type="text" value="pe-7s-browser" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e672" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe672" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-box2"></span>
              <input type="text" value="pe-7s-box2" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e673" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe673" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-box1"></span>
              <input type="text" value="pe-7s-box1" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e674" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe674" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-bookmarks"></span>
              <input type="text" value="pe-7s-bookmarks" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e675" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe675" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-bicycle"></span>
              <input type="text" value="pe-7s-bicycle" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e676" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe676" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-bell"></span>
              <input type="text" value="pe-7s-bell" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e677" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe677" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-battery"></span>
              <input type="text" value="pe-7s-battery" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e678" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe678" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-ball"></span>
              <input type="text" value="pe-7s-ball" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e679" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe679" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-back"></span>
              <input type="text" value="pe-7s-back" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e67a" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe67a" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-attention"></span>
              <input type="text" value="pe-7s-attention" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e67b" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe67b" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-anchor"></span>
              <input type="text" value="pe-7s-anchor" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e67c" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe67c" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-albums"></span>
              <input type="text" value="pe-7s-albums" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e67d" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe67d" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-alarm"></span>
              <input type="text" value="pe-7s-alarm" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e67e" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe67e" class="unicode-text">
            </fieldset>
          </div>
          <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
            <div class="font-icon-detail"><span class="pe-7s-airplay"></span>
              <input type="text" value="pe-7s-airplay" class="font-icon-name">
            </div>
            <fieldset class="font-icon-code">
              <input type="text" readonly value="e67f" class="code-value">
              <input type="text" readonly maxlength="1" value="" class="unicode">
              <input type="text" value="&amp;#xe67f" class="unicode-text">
            </fieldset>
          </div>
        </div>
	</div>
	<!-- /container -->		
	</main>
	<!--/main-->
	
	<footer class="plus_border">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
						<h3>Quick Links</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_1">
						<ul class="links">
							<li><a href="#0">About us</a></li>
							<li><a href="#0">Faq</a></li>
							<li><a href="#0">Help</a></li>
							<li><a href="#0">My account</a></li>
							<li><a href="#0">Create account</a></li>
							<li><a href="#0">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
						<h3>Categories</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_2">
						<ul class="links">
							<li><a href="#0">Shops</a></li>
							<li><a href="#0">Hotels</a></li>
							<li><a href="#0">Restaurants</a></li>
							<li><a href="#0">Bars</a></li>
							<li><a href="#0">Events</a></li>
							<li><a href="#0">Fitness</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
						<h3>Contacts</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_3">
						<ul class="contacts">
							<li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="ti-headphone-alt"></i>+ 61 23 8093 3400</li>
							<li><i class="ti-email"></i><a href="#0">info@sparker.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
						<h3>Keep in touch</h3>
					</a>
					<div class="collapse show" id="collapse_ft_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="http://www.ansonika.com/sparker/assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
									<input type="submit" value="Submit" id="submit-newsletter">
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><i class="ti-facebook"></i></a></li>
								<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
								<li><a href="#0"><i class="ti-google"></i></a></li>
								<li><a href="#0"><i class="ti-pinterest"></i></a></li>
								<li><a href="#0"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<ul id="footer-selector">
						<li>
							<div class="styled-select" id="lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select" id="currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="img/cards_all.svg" alt=""></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2018 Sparker</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
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
	  $('#chkbx-1').change(function() {
		   if($(this).is(":checked")) {
				$('.font-icon-code').addClass('show');
			  return;
		   }
			$('.font-icon-code').removeClass('show');
		});
	</script>

	<!-- COLOR SWITCHER  -->
	<script src="js/switcher.js"></script>
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

  
</body>


</html>