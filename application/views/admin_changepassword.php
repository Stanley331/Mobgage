<!DOCTYPE html>
<html>
<head>
  <title>Admin Change Password</title>
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




  <script>
  	 $(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });
  </script>
  <style>
  	@import "compass/css3";
@import url(https://fonts.googleapis.com/css?family=Vibur);
*{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
  font-family:arial;
}
body{background:#FF9000;}
h1{
  color:#ccc;
  text-align:center;
  font-family: 'Vibur', cursive;
  font-size: 50px;
}

.login-form{
  width:350px;
  padding:40px 30px;
  background:#eee;
  @include border-radius(4px);
  margin:auto;
  position: absolute;
  left: 0;
  right: 0;
  top:50%;
  @include translateY(-50%);
}
.form-group{
  position: relative;
  margin-bottom:15px;
}
.form-control{
  width:100%;
  height:50px;
  border:none;
  padding:5px 7px 5px 15px;
  background:#fff;
  color:#666;
  border:2px solid #ddd;
  @include border-radius(4px);
    &:focus, &:focus + .fa{
      border-color:#10CE88;
      color:#10CE88;
    }
}
.form-group .fa{
  position: absolute;
  right:15px;
  top:17px;
  color:#999;
}
.log-status.wrong-entry {
 @include animation( wrong-log 0.3s);
}
.log-status.wrong-entry .form-control, .wrong-entry .form-control + .fa {
  border-color: #ed1c24;
  color: #ed1c24;
}
.log-btn{
  background:#0AC986;
  dispaly:inline-block;
  width:100%;
  font-size:16px;
  height:50px;
  color:#fff;
  text-decoration:none;
  border:none;
  @include border-radius(4px);
}

.link{
  text-decoration:none;
  color:#C6C6C6;
  float:right;
  font-size:12px;
  margin-bottom:15px;
  &:hover{
    text-decoration: underline;
    color:#8C918F;
  }
}
.alert{
  display:none;
  font-size:12px;
  color:#f00;
  float:left;
}
@include keyframes (wrong-log) {
  0%, 100% { left: 0px;}
  20% , 60%{left: 15px;}
  40% , 80%{left: -15px;}
}



  	</style>
</head>
<body>

<header>
        <div class="menu_block ">
          <div class="container_12">
            <div class="grid_12">
              <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                <ul class="sf-menu">
                  <li class="current"><a href="admin.php">Admin Home</a></li>
                  
                  <li><a href="admin_changepassword.php">Change Password</a></li>
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
             
            </h1>
          </div>
        </div>
        <div class="clear"></div>
      </header>


<div class="login-form">
  <form action="admin_changepassword_action.php" method="post">

     
     <div class="form-group ">
       <input type="password" class="form-control" placeholder="Current Password " id="cpass" name="cpass">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="New Password" id="npass" name="npass">
       <i class="fa fa-lock"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Re-Type Password" id="rpass" name="rpass">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
     
     <button type="submit" class="log-btn" >Change</button>
   </form>
     
    
   </div>


</body>
</html>