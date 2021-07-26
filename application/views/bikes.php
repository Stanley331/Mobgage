<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bikes</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="<?=base_url(''); ?>images/favicon.ico">
		<link rel="shortcut icon" href="<?=base_url(''); ?>images/favicon.ico" />
		<link rel="stylesheet" href="<?=base_url(''); ?>css/touchTouch.css">
		<link rel="stylesheet" href="<?=base_url(''); ?>css/style.css">
		<script src="<?=base_url(''); ?>js/jquery.js"></script>
		<script src="<?=base_url(''); ?>js/jquery-migrate-1.2.1.js"></script>
		<script src="<?=base_url(''); ?>js/script.js"></script>
		<script src="<?=base_url(''); ?>js/superfish.js"></script>
		<script src="<?=base_url(''); ?>js/jquery.ui.totop.js"></script>
		<script src="<?=base_url(''); ?>js/jquery.equalheights.js"></script>
		<script src="<?=base_url(''); ?>js/jquery.mobilemenu.js"></script>
		<script src="<?=base_url(''); ?>js/jquery.easing.1.3.js"></script>
		<script src="<?=base_url(''); ?>js/touchTouch.jquery.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				$('.gallery a.gal').touchTouch();
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
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="index.html">Home</a></li>
									<li><a href="aboutus.html">About</a></li>
									<li><a href="bikes.html">Bikes</a></li>
									<li><a href="service.html">Services</a></li>
									<li><a href="contact.html">Contacts</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="signup.html">Sign-up</a></li>
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
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
				<div class="container_12">
					<div class="grid_12">
						<h3>Economy</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="<?=base_url(''); ?>images/big1.jpg" class="gal"><img src="<?=base_url(''); ?>images/page3_img11.jpg" alt=""></a></div>
						<div class="grid_4"><a href="<?=base_url(''); ?>images/big2.jpg" class="gal"><img src="<?=base_url(''); ?>images/page3_img22.jpg" alt=""></a></div>
						<div class="grid_4"><a href="<?=base_url(''); ?>images/big3.jpg" class="gal"><img src="<?=base_url(''); ?>images/page3_img33.jpg" alt=""></a></div>
					</div>
					<div class="grid_12">
						<h3>Standard</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="<?=base_url(''); ?>images/big4.jpg" class="gal"><img src="<?=base_url(''); ?>images/page3_img44.jpg" alt=""></a></div>
						<div class="grid_4"><a href="<?=base_url(''); ?>images/big5.jpg" class="gal"><img src="<?=base_url(''); ?>images/page3_img55.jpeg" alt=""></a></div>
						<div class="grid_4"><a href="<?=base_url(''); ?>images/big6.jpg" class="gal"><img src="<?=base_url(''); ?>images/page3_img66.jpg" alt=""></a></div>
					</div>
					<div class="grid_12">
						<h3>Lux</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="<?=base_url(''); ?>images/big7.jpg" class="gal"><img src="<?=base_url(''); ?>images/page3_img77.jpg" alt=""></a></div>
						<div class="grid_4"><a href="<?=base_url(''); ?>images/big8.jpg" class="gal"><img src="<?=base_url(''); ?>images/page3_img88.jpg" alt=""></a></div>
						<div class="grid_4"><a href="<?=base_url(''); ?>images/big9.jpg" class="gal"><img src="<?=base_url(''); ?>images/page3_img99.jpg" alt=""></a></div>
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
						<div class="brand">Your<span class="color1">B</span>ike </div>
						&copy; 2020	| Privacy Policy</div> Website designed by Gayathri
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>