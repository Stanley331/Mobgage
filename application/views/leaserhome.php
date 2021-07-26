<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Leaser Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="<?=base_url(''); ?>images/favicon.ico">
		<link rel="shortcut icon" href="<?=base_url(''); ?>images/favicon.ico" />
		<link rel="stylesheet" href="<?=base_url(''); ?>booking/css/booking.css">
		<link rel="stylesheet" href="<?=base_url(''); ?>css/camera.css">
		<link rel="stylesheet" href="<?=base_url(''); ?>css/owl.carousel.css">
		<link rel="stylesheet" href="<?=base_url(''); ?>css/style.css">
		<script src="<?=base_url(''); ?>js/jquery.js"></script>
		<script src="<?=base_url(''); ?>js/jquery-migrate-1.2.1.js"></script>
		<script src="<?=base_url(''); ?>js/script.js"></script>
		<script src="<?=base_url(''); ?>js/superfish.js"></script>
		<script src="<?=base_url(''); ?>js/jquery.ui.totop.js"></script>
		<script src="<?=base_url(''); ?>js/jquery.equalheights.js"></script>
		<script src="<?=base_url(''); ?>js/jquery.mobilemenu.js"></script>
		<script src="<?=base_url(''); ?>js/jquery.easing.1.3.js"></script>
		<script src="<?=base_url(''); ?>js/owl.carousel.js"></script>
		<script src="<?=base_url(''); ?>js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
			<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="leaserhome.php">Leaser Home</a></li>
									
									<!--<li><a href="bikes.html">Bikes</a></li>
									<li><a href="service.html">Services</a></li>-->
									<li><a href="vehicle_register_leaser_edit.php">Edit Vehicle Details</a></li>
									<li><a href="vehicle_register_leaser.php">Register Vehicle</a></li>
									<li><a href="paybill_viewby_leaser.php">View Payments</a></li>

									<li><a href="leaser_editprofile.php">Edit Profile</a></li>
									
									<li><a href="leaser_changepassword.php">Change Password</a></li>
									<li><a href="index.html">Log-out</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.html">
								<img src="<?=base_url(''); ?>images/logo.png" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
			<div class="slider_wrapper ">
				<div id="camera_wrap" class="">
					<div data-src="<?=base_url(''); ?>images/slide.jpg" ></div>
					<div data-src="<?=base_url(''); ?>images/slide1.jpg" ></div>
					<div data-src="<?=base_url(''); ?>images/slide2.jpg"></div>
				</div>
			</div>
			<div class="container">
				
				
		
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="banner">
				<div class="maxheight">
					<div class="banner_title">
						<img src="images/icon2.png" alt="">
						<div class="extra_wrapper">Best
							<div class="color1">Prices</div>
						</div>
					</div>
					You can count on us for the best bike rental prices. Find a weekly offers on our site.
					
				</div>
			</div>
		</div>
	</div>
			</div>
			<div class="c_phone">
				<div class="container_12">
					<div class="grid_12">
						<div class="fa fa-phone"></div>+91 94475 45213
						<span>ORDER NOW!</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
				<div class="container_12">
					<div class="grid_5">
						<h3>Booking Form</h3>
						<form id="bookingForm">
							<div class="grid_5">
						<h3>Contact Info</h3>
						<div class="map">
							<div class="text1 color2">Free  to cantact us...</div>
							<p>Don’t forget, 24/7 support is available for Bike Rent Service <span class="color1"></span> </p>
							
							<address>
								<dl>
									<dt>Kriyappilil House  <br>
										Nettoor P O ,<br>
										Ernakulam.
									</dt>
									<dd><span>Telephone:</span> +91 94475 45213</dd>
									<dd><span>FAX:</span> +1 800 889 9898</dd>
									<dd>E-mail: <a href="#" class="color1">imca-161@scmsgroup.org</a></dd>
								</dl>
							</address>
						</div>
					</div>
							
						</form>
					</div>
					<div class="grid_6 prefix_1">
						<a href="index2.html" class="type"><img src="<?=base_url(''); ?>images/page1_img11.jpg" alt=""><span class="type_caption">Economy</span></a>
						<a href="index2.html" class="type"><img src="<?=base_url(''); ?>images/page1_img22.jpeg" alt=""><span class="type_caption">Standard</span></a>
						<a href="index2.html" class="type"><img src="<?=base_url(''); ?>images/page1_img33.jpg" alt=""><span class="type_caption">Lux</span></a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> +91 94475 45213</div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">Tour<span class="color1">B</span>ike </div>
						&copy; 2020	| Privacy Policy </div> Website designed by Athul
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>