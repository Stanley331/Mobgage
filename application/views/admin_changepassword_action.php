<?php 

session_start();

include("dbcon.php");

$cpass = $_POST["cpass"];
$npass = $_POST["npass"];
$rpass = $_POST["rpass"];


/*echo "FName:". $fname."lname:". $lname. "Password:" . $upass ."type:".$utype ."DOB:".$dob . "Gender:".$gender . "Email:". $email. "Mobile:".$mobile. "Address:".$address . "City:".$city . "District:".$district . "Card:".$card . "Number:" . $idnumber ;*/

$user_name=$_SESSION["USER_ID"];

$sql = "update login set  upass='".$rpass."' where upass='".$cpass."' and uname='".$user_name."'";



echo $sql;

 

if(mysqli_query($conn, $sql)){  

if(mysqli_affected_rows($conn) ) {
   echo "Record updated successfully"; 
   header("Location:admin.php"); 
}

else {
  echo "Error: " ;
  header("Location:admin_changepassword.php");
  }
 
}

  
mysqli_close($conn);  


?>
