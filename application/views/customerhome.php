<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Customer Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="<?=base_url(''); ?>images/favicon.ico">
		<link rel="shortcut icon" href="<?=base_url(''); ?>images/favicon.ico" />
		<link rel="stylesheet" href="<?=base_url(''); ?>booking/css/booking.css">
		<link rel="stylesheet" href="<?=base_url(''); ?>css/camera.css">
		<link rel="stylesheet" href="<?=base_url(''); ?>css/owl.carousel.css">
		<link rel="stylesheet" href="<?=base_url(''); ?>css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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
		<script src="<?=base_url(''); ?>js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="<?=base_url(''); ?>booking/js/booking.js"></script>
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
									<li class="current"><a>Customer Home</a></li>
									
									<!--<li><a href="bikes.html">Bikes</a></li>-->
									<li><a href="http://localhost/RentBike_Sample/customer/bikestore_viewby_customer">View Mobiles</a></li>
									<li><a href="<?php echo base_url();?>Home/checklogin">Log-out</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container_12" style="margin-left:40px;margin-top:20px; width:100px">
					<div class="grid_12">
						<h2>
							<a href="index.html">
								<img src="<?=base_url(''); ?>images/mlogo.png" alt="Your Happy Family" style="width:150px">
							</a>
						</h2>
					</div>
				</div>
				<div class="clear"></div>
			</header>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style=" width:1000px; margin-left:300px; margin-top:-600px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/product-img/iphone.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/product-img/poco1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/product-img/moto.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

		<!--END-->
		<div >
			<p class="text-muted" style="font-size:30px;margin-left:150px;margin-top:50px;">
					Deal For the day
			</p><br/>
		</div>

		<div class="row">
			<div class="col-3">
				<div class="card" style="width: 18rem;margin-left:50px">
					<img src="images/p1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text"> <h4 style="color:grey">50% Off of all IPhones</h4></p>
					</div>
				</div>
			</div>

			<div class="col-3">
				<div class="card" style="width: 18rem;margin-left:50px">
					<img src="images/p4.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text"><h4 style="color:grey">Low Cost Emi</h4></p>
					</div>
				</div>
			</div>

			<div class="col-3">
				<div class="card" style="width: 18rem;margin-left:50px">
					<img src="images/p2.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text"><h4 style="color:grey">0% interest on Rented phones</h4></p>
					</div>
				</div>
			</div>

			<div class="col-3">
				<div class="card" style="width: 18rem;margin-left:50px">
					<img src="images/p6.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text"><h4 style="color:grey">Special cash back offers</h4></p>
					</div>
				</div>
			</div>

			
		</div>

		<br/><br/>
		<div class="card bg-dark text-white">
			<img src="images/p10.jpg" class="card-img" alt="...">
		</div>
		
	<!--==============================Content=================================-->
	

	<!--==============================footer=================================-->
	<footer>
		<br/><br/>
		<div class="container_12" style="background:black; height:205px">
			<div class="grid_12">
				<div class="f_phone"><span>Call Us:</span> +91 9718078859 </div>
				<div class="socials">
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-google-plus"></a>
				</div>
				<div class="copy">
					<div class="st1">
						<div class="brand">Mob<span class="color1">G</span>age </div>
						&copy; 2020 | Privacy Policy
					</div> Website designed by Stanley Stephen
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</footer>
	<script>
		$(function () {
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		$(function () {
			$('#bookingForm input, #bookingForm textarea').placeholder();
		});
	</script>
	</body>
</html>