<?php 
session_start();
include("dbcon.php");
$user_name=$_SESSION["USER_ID"];

$biketype = $_POST["biketype"];
$company = $_POST["company"];
$model = $_POST["model"];
$mileage = $_POST["mileage"];
$rent = $_POST["rent"];
$regno = $_POST["regno"];
$bikecc = $_POST["bikecc"];
$vid = $_POST["vid"];



echo "Bike Type:". $biketype."Company name:". $company. "Model:" . $model ."Milage:".$mileage ."Rent:".$rent . "Regno..:". $regno . "CC:". $bikecc ;



$sql = "update vehicle_store set  biketype='".$biketype."',company='".$company."',model='".$model."',mileage='".$mileage."', rent='".$rent."',regno='".$regno."',bikecc='".$bikecc."' where userid='".$user_name."' and vid='".$vid."'";



echo $sql;



if(mysqli_query($conn, $sql)){  

	echo "Iam here...";


if(mysqli_affected_rows($conn) ) {
   echo "Record updated successfully"; 
   header("Location:leaserhome.php"); 
}

else {
  echo "Error: " ;
  header("Location:vehicle_register_leaser_edit.php");
  }
 
}

  
mysqli_close($conn);  




?>
