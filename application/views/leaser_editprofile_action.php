<?php 
session_start();

include("dbcon.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$dob=$_POST["dob"];
$city=$_POST["city"];

$district=$_POST["district"];

$id_card=$_POST["id_card"];
$idnumber=$_POST["idnumber"];

$user_name=$_SESSION["USER_ID"];


/*echo "FName:". $fname."lname:". $lname. "DOB:".$dob . "Gender:".$gender . $mobile. "Address:".$address . "City:".$city . "District:".$district . "Card:".$id_card . "Number:" . $idnumber ;
*/

echo "FName:". $fname."lname:". $lname. "DOB:".$dob . "Gender:".$gender . $mobile. "Address:".$address . "City:".$city . "District:".$district .  "Number:" . $idnumber. "Card Type:".$id_card ;



$sql = "update user_registration set  fname='".$fname."',lname='".$lname."',dob='".$dob."',gender='".$gender."', mobile='".$mobile."',address='".$address."',city='".$city."',district='".$district."',idcard='".$id_card."',idnumber='".$idnumber."' where email='".$user_name."'";



echo $sql;



if(mysqli_query($conn, $sql)){  

	echo "Iam here...";


if(mysqli_affected_rows($conn) ) {
   echo "Record updated successfully"; 
   header("Location:leaserhome.php"); 
}

else {
  echo "Error: " ;
  header("Location:leaser_editprofile.php");
  }
 
}

  
mysqli_close($conn);  




?>
