<?php 

session_start();

include("dbcon.php");
$user_name=$_SESSION["USER_ID"];
//echo $user_name;
$vid = $_GET["stat"];

$sql = "SELECT * FROM vehicle_store WHERE vid = '".$vid."'"  ;


$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
	$ids="";
  if($row = mysqli_fetch_assoc($result)) {
  	echo $row['model'].' '.$row['regno'];
  	echo $ids;

}
}
?>