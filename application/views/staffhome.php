<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Satff Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
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
									<li class="current"><a href="staffhome.php">Staff Home</a></li>
									
									<!--<li><a href="bikes.html">Bikes</a></li>
									<li><a href="service.html">Services</a></li>
									<li><a href="staff_editprofile.php">Edit Profile</a></li>-->
									
									<li><a href="staff_changepassword.php">Change Password</a></li>
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
								<img src="images/logo.png" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
			<div class="slider_wrapper ">
				<div id="camera_wrap" class="">
					<div data-src="images/slide.jpg" ></div>
					<div data-src="images/slide1.jpg" ></div>
					<div data-src="images/slide2.jpg"></div>
				</div>
			</div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon1.png" alt="">
								<div class="extra_wrapper">Fast&amp;
									<div class="color1">Safe</div>
								</div>
							</div>
							Your safety is our priority. We guarantee a comprehensive insurance and also an ISI marked helmet. With all new bikes and a strict maintenance policy, you can keep calm and ride ONN!
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon2.png" alt="">
								<div class="extra_wrapper">Best
									<div class="color1">Prices</div>
								</div>
							</div>
							You can count on us for the best bike rental prices. Find a  weekly offers on our site.
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon3.png" alt="">
								<div class="extra_wrapper">Package
									<div class="color1">Delivery</div>
								</div>
							</div>
							Be it everyday commute, road trips and tour packages, riding gears, exclusive bike merch or refurbishing and maintenance - we have them all!
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
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
							<div class="fl1">
								<div class="tmInput">
									<input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
								</div>
								<div class="tmInput">
									<input name="From" placeHolder="From:" type="text" data-constraints="@NotEmpty @Required ">
								</div>
							</div>
							<div class="fl1">
								<div class="tmInput">
									<input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
								</div>
								<div class="tmInput mr0">
									<input name="To" placeHolder="To:" type="text" data-constraints="@NotEmpty @Required">
								</div>
							</div>
							<div class="clear"></div>
							<strong>Time</strong>
							<div class="tmInput">
								<input name="Time" placeHolder="" type="text" data-constraints="@NotEmpty @Required">
							</div>
							<div class="clear"></div>
							<strong>Date</strong>
							<label class="tmDatepicker">
								<input type="text" name="Date"	placeHolder='20/05/2014' data-constraints="@NotEmpty @Required @Date">
							</label>
							<div class="clear"></div>
							<div class="tmRadio">
								
								<input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
								<span>Economy</span>
								<input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Standard</span>
								<input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Luxury</span>
							</div>
							<div class="clear"></div>
							
							
							<div class="clear"></div>
							<div class="tmTextarea">
								<textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
							</div>
							<a href="#" class="btn" data-type="submit">Submit</a>
						</form>
					</div>
					<div class="grid_6 prefix_1">
						<a href="index2.html" class="type"><img src="images/page1_img11.jpg" alt=""><span class="type_caption">Economy</span></a>
						<a href="index2.html" class="type"><img src="images/page1_img22.jpeg" alt=""><span class="type_caption">Standard</span></a>
						<a href="index2.html" class="type"><img src="images/page1_img33.jpg" alt=""><span class="type_caption">Lux</span></a>
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