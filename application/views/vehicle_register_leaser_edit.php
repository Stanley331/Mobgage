<?php 

session_start();

include("dbcon.php");
$user_name=$_SESSION["USER_ID"];
//echo $user_name;

$sql = "SELECT * FROM vehicle_store WHERE userid = '" . $user_name ."'" ;


$result = mysqli_query($conn, $sql);

$biketype="";
$company="";
$model="";
$mileage="";
$rent="";
$regno="";
$bikecc="";

if ($result->num_rows > 0) {
  // output data of each row
  if($row = $result->fetch_assoc()) {
    //echo "hai";
    //$biketype=$row["biketype"];
    $company=$row["company"];
    //$model=$row["model"];
    $mileage=$row["mileage"];
    $rent=$row["rent"];
    $regno=$row["regno"];
    $bikecc=$row["bikecc"];
    

    //echo "First Name: " . $row["fname"]. " - Last Name: " . $row["lname"]. "<br>";
  }
} else {
  echo "0 results";
}

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
    <title>Edit Vehicle</title>

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

<script>
function ajaxFunction(str)
{
var xmlHttp;
 
str = document.getElementById("vid").value;
//alert(str)
String.prototype.trim = function () {
    return this.replace(/^\s*/, "").replace(/\s*$/, "");
}
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
        try
        {
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            try
            {
                xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e)
            {
                alert("Your browser does not support AJAX!");
                return false;
            }
        }
  }
  xmlHttp.onreadystatechange=function()
    {
    if(xmlHttp.readyState==4)
      {
      //alert(xmlHttp.responseText);
      var xp=new String(xmlHttp.responseText);
   
       
       
      // alert("ok....:"+xp);
      var xp1=xp.trim();
      //alert(xp1);
      var result=xp1.split(" ");
    document.form1.model.value=result[0];
    document.form1.regno.value=result[1];
  



 
    }
    }
    url = "leaser_vehicles_ajax.php?stat="+str+"&sid="+Math.random();
    //alert(url)
    xmlHttp.open("GET",url,true);
  xmlHttp.send(null);
  //alert(str);
  //document.getElementById("seldata")
  
  
  }
</script>

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
                    <h2 class="title">Update Vehicle Registration -LEASER</h2>
                    <form name="form1" action="vehicle_register_leaser_edit_action.php" method="POST">
                        

                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select ID</label>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group" >
                                    
                                    <select name="vid" id="vid" onchange="ajaxFunction(this.value);">
                                        <option>Select ID</option>
                                        <?php
                                        echo "haiiiiiiiiiiiiiiii";
                                        $sql_2 = "SELECT * FROM vehicle_store WHERE userid = '" . $user_name ."'" ;
                                        //$result_2 = mysqli_query($conn, $sql);
                                        $result_2=mysqli_query($conn, $sql_2); 

                                        if(mysqli_num_rows($result_2) > 0) {
                                            // output data of each row
                                            $pp="";
                                            while($row_2 = mysqli_fetch_assoc($result_2)) {
                                                $pp=$row_2["vid"];
                                                //$biketype=$row_2["biketype"];

                                                echo $pp;
                                            

                                        ?>
                                    <option ><?php echo $pp;?></option>
                                    <?php
                                    }
                                        }


                                        ?>

                                    ?>
                                    
                                    
                                    
                                    
                                </select>
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
                                    
                                    <select name="biketype" id="biketype">
                                    <option  disabled="disabled" ><?php echo $biketype;?></option>
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
                                    <option  disabled="disabled" ><?php echo $company;?></option>
                                    <option value="SCOOTER">BAJAJ</option>
                                    <option value="STANDARD">SUZUKI</option>
                                    <option value="SPORTS">HERO</option>
                                    <option value="TOURING">ENFIELD</option>
                                    <option value="OFFROAD">VESPA</option>
                                    <option value="OFFROAD">HONDA</option>
                                    
                                    <option value="OFFROAD">YAMAHA</option>
                                    
                                </select>
                                </div>
                            </div>
                        </div>




                        
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Model Name</label>
                                    <input class="input--style-4" type="text" name="model" id="model" value="<?php echo $model;?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Registration No.</label>
                                    <input class="input--style-4" type="text" name="regno" >
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
                                    <option disabled="disabled" ><?php echo $rent;?></option>
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
                                    <option disabled="disabled"><?php echo $mileage;?></option>
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
                                    <option disabled="disabled"  ><?php echo $bikecc;?></option>
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

                        
                        


                        
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
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