<?php 

session_start();

include("dbcon.php");
$user_name=$_SESSION["USER_ID"];
//echo $user_name;

$sql = "SELECT * FROM user_registration WHERE email = '" . $user_name ."'" ;


$result = mysqli_query($conn, $sql);
$f_name="";
$l_name="";
$mobile="";
$address="";
$city="";
$district="";
$idcard="";
$idnumber="";
if ($result->num_rows > 0) {
  // output data of each row
  if($row = $result->fetch_assoc()) {
    //echo "hai";
    $f_name=$row["fname"];
    $l_name=$row["lname"];
    $mobile=$row["mobile"];
    $address=$row["address"];
    $city=$row["city"];
    $district=$row["district"];
    $idcard=$row["idcard"];
    $idnumber=$row["idnumber"];

    //echo "First Name: " . $row["fname"]. " - Last Name: " . $row["lname"]. "<br>";
  }
} else {
  echo "0 results";
}
//echo " I am here..."
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Edit Staff</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<header>
        <div class="menu_block ">
          <div class="container_12">
            <div class="grid_12">
              <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                <ul class="sf-menu">
                  <li class="current"><a href="staffhome.php">Staff Home</a></li>
                                    
                                    <li><a href="bikes.html">Bikes</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    
                                    
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




    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Staff Profile Edit Form</h2>
                    <form action="staff_editprofile_action.php" method="POST">
                        
                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="fname" value="<?php echo $f_name;?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="lname" value="<?php echo $l_name;?>">
                                </div>
                            </div>
                        </div>

                        

                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date Of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="dob">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mobile Number</label>
                                    <input class="input--style-4" type="text" name="mobile" value="<?php echo $mobile;?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address</label>
                                    <input class="input--style-4" type="address" name="address" value="<?php echo $address;?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">City</label>
                                    <input class="input--style-4" type="text" name="city" value="<?php echo $city;?>">
                                </div>
                            </div>
                        </div>




                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select User District</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    
                                     <select name="district">
                                    <option disabled="disabled" selected="selected" >Select District</option>
                                    <option>Alappuzha</option>
                                    <option>Ernakulam</option>
                                    <option>Idukki</option>
                                    <option>Kannur</option>
                                    <option>Kasaragod</option>
                                    <option>Kollam</option>
                                    <option>Kottayam</option>
                                    
                                    <option>Kozhikode</option>
                                    <option>Malappuram</option>
                                    <option>Palakkad</option>
                                    <option>Pathanamthitta</option>
                                    <option>Thiruvananthapuram</option>
                                    <option>Thrissur</option>
                                    <option>Wayanad</option>
                                    
                                    
                                </select>
                                </div>
                            </div>
                        </div>


                       <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">User ID Card</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <select name="id_card">
                                    <option disabled="disabled" selected="selected" >Select Card</option>
                                    <option value="aadhar">Aadhar</option>
                                    <option value="voter">Voters ID</option>
                                    <option value="license">Driving License</option>
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ID Number</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-4" type="text" name="idnumber" value="<?php echo $idnumber;?>">
                                </div>
                            </div>
                        </div>
                        


                        
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->