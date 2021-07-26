<?php
session_start();
echo " you are welcome";


include("dbcon.php");

$user_name=$_SESSION["USER_ID"];
$vid = $_SESSION["VEHICLE_ID"];

$r_title = $_POST["r_title"];
$r_purpose = $_POST["r_purpose"];


echo "User Name:".$user_name. "Vehicle ID:".$vid."Title:".$r_title."Purpose:".$r_purpose;

$sql= "INSERT INTO rentlist(userid, vid, from_date,r_title,r_purpose,rent_status) VALUES ('".$user_name."', '" .$vid."', current_timestamp(),'". $r_title. "','".$r_purpose."','0')";

$sql_2="update vehicle_store set  rent_status='1' where vid='".$vid."'";

echo "SQL:".$sql;

if (mysqli_query($conn, $sql) and mysqli_query($conn, $sql_2)) {
   //header("Location:sample_dest.php");
    //exit; // <- don't forget this!
    header("Location:customerhome.php");
    echo " reg success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header("Location:request_vehicle_rent_customer_complete.php");
}

mysqli_close($conn);  



?>