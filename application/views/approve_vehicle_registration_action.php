<?php
session_start();
include("dbcon.php");

$vid="";
$stat="";

//$user_name=$_SESSION["USER_ID"];

echo "reached...";
$vid = $_GET["vid"];
echo "reached...";
$stat = $_GET["stat"];

echo " Vehicle ID:".$vid;
echo " Status:".$stat;
$sql="";

if($stat=="accept"){
  echo "done";
$sql = "update vehicle_store set  status='1' where  vid='".$vid."'";
}elseif ($stat=="reject") {
  $sql = "delete from  vehicle_store  where  vid='".$vid."'";
}
echo "SQL:".$sql;

echo " I am here...";




if(mysqli_query($conn, $sql)){  

if(mysqli_affected_rows($conn) ) {
   echo "Record updated successfully"; 
   header("location:approve_vehicle_registration.php"); 
}

else {
  echo "Error: " ;
  header("Location:approve_vehicle_registration.php");
  }
 
}


  

  
mysqli_close($conn);  



?>