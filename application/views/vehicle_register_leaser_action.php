<?php 
session_start();
include("dbcon.php");
$regno=$_SESSION["regno"];

$own_name = $_POST["own_name"];
$own_address = $_POST["own_address"];
$biketype = $_POST["biketype"];
$company = $_POST["company"];
$model = $_POST["model"];
$fueltype = $_POST["fueltype"];
$rent = $_POST["rent"];
$mileage = $_POST["mileage"];
$bikecc = $_POST["bikecc"];
$ins_date = $_POST["ins_date"];
$smoke_date = $_POST["smoke_date"];



echo "Registeration No:". $regno. "Owner Name". $own_name."Owner Address:". $own_address. "Bike Type:" . $biketype ."Company:" . $company ."Model:" . $model ."Fuel Type:".$fueltype ."Rent:".$rent . "Mileage.:". $mileage . "CC:". $bikecc. "Insurance Date:".  $ins_date. "Smoake Date:". $smoke_date;




$sql_3 = "INSERT INTO register_vehicle(regno,own_name,own_address, biketype,company,model,fueltype,rent,mileage,bikecc,ins_date,smoke_date) VALUES ('".$regno."','".$own_name."', '".$own_address."', '".$biketype."','".$company."','".$model."','".$fueltype."','".$rent."','".$mileage."','".$bikecc."', '".$ins_date."' , '".$smoke_date."')";

echo $sql_3;

if ( mysqli_query($conn, $sql_2) ) {
   //header("Location:sample_dest.php");
    //exit; // <- don't forget this!
    header("Location:leaserhome.php");
    echo " reg success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  
mysqli_close($conn);  




?>
