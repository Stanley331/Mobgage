<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sign Up</title>

    <!-- Icons font CSS-->
    <link href="<?=base_url(''); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url(''); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="<?=base_url(''); ?>https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?=base_url(''); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url(''); ?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url(''); ?>css/main.css" rel="stylesheet" media="all">
</head>

<body>

<header>
        <div class="menu_block ">
          <div class="container_12">
            <div class="grid_12">
              <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                <ul class="sf-menu">
                  <li class="current"><a href="leaserhome.php">Home</a></li>
                  
                  
                  <li><a href="index.html">Log Out</a></li>
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




    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Vehicle Registration -LEASER</h2>
                    <form action="<?php echo base_url(); ?>leaser/register_vehicle" method="POST">
                        


                    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Vehicle Registeration Number</label>
                                    <input class="input--style-4" type="text" name="regno">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name of Registered Owner</label>
                                    <input class="input--style-4" type="text" name="own_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Permanent Address</label>
                                    <input class="input--style-4" type="text" name="own_address">
                                </div>
                            </div>
                        </div>





                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select Bike Type</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    
                                    <select name="biketype">
                                    <option  disabled="disabled" value="SCOOTER">Select Bike Type</option>
                                    <option value="SCOOTER">SCOOTER</option>
                                    <option value="STANDARD">STANDARD</option>
                                    <option value="SPORTS">SPORTS</option>
                                    <option value="TOURING">TOURING</option>
                                    <option value="OFFROAD">OFFROAD</option>
                                    
                                    
                                    
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Company Name</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    
                                    <select name="company">
                                    <option   value="BAJAJ">Select Company</option>
                                    <option value="BAJAJ">BAJAJ</option>
                                    <option value="SUZUKI">SUZUKI</option>
                                    <option value="SPORTS">HERO</option>
                                    <option value="ENFIELD">ENFIELD</option>
                                    <option value="VESPA">VESPA</option>
                                    <option value="HONDA">HONDA</option>
                                    
                                    <option value="YAMAHA">YAMAHA</option>
                                    
                                </select>
                                </div>
                            </div>
                        </div>




                        
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Model Name</label>
                                    <input class="input--style-4" type="text" name="model">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Fuel Type</label>
                                    
                                </div>
                            
                            <div class="col-2">
                                <div class="input-group">
                                    
                                    <select name="fueltype">
                                    <option  disabled="disabled" value="PETROL">Select Fuel Type</option>
                                    <option value="PETROL">PETROL</option>
                                    <option value="DIESEL">DIESEL</option>
                                    
                                    
                                    
                                    
                                </select>
                                </div>
                             </div>
                        </div>
                        




                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select Rent(Per Hour)</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    
                                     <select name="rent">
                                    <option disabled="disabled" selected="selected">Select Rent</option>
                                    <?php

                                    $ren=15;
                                    while($ren<250){

                                    ?>
                                    <option><?php echo $ren; ?></option>
                                    
                                    <?php
                                    $ren =$ren+1;
                                      }
                                    ?>
                                    
                                </select>
                                </div>
                            </div>
                        </div>


                       <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select Mileage</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <select name="mileage">
                                    <option disabled="disabled" selected="selected" value="aadhar">Select Mileage</option>
                                    <?php

                                    $mil=10;
                                    while($mil<100){

                                    ?>
                                    <option value="<?php echo $mil; ?>"><?php echo $mil; ?></option>
                                    <?php
                                    $mil =$mil+1;
                                      }
                                    ?>
                                    
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select Bike CC</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <select name="bikecc">
                                    <option disabled="disabled" selected="selected" >Select CC</option>
                                    <?php

                                    $cc=80;
                                    while($cc<1000){

                                    ?>
                                    <option value="<?php echo $cc; ?>"><?php echo $cc; ?></option>
                                    <?php
                                    $cc =$cc+1;
                                      }
                                    ?>
                                    
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Insurance Expiery</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="ins_date">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Smoke Validity Till </label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="smoke_date">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        


                        
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?=base_url(''); ?>vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?=base_url(''); ?>vendor/select2/select2.min.js"></script>
    <script src="<?=base_url(''); ?>vendor/datepicker/moment.min.js"></script>
    <script src="<?=base_url(''); ?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->