<?php 

include("dbcon.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$upass = $_POST["upass"];
$utype = $_POST["utype"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$city=$_POST["city"];
$district=$_POST["district"];
$card=$_POST["card"];
$idnumber=$_POST["idnumber"];

echo "FName:". $fname."lname:". $lname. "Password:" . $upass ."type:".$utype ."DOB:".$dob . "Gender:".$gender . "Email:". $email. "Mobile:".$mobile. "Address:".$address . "City:".$city . "District:".$district . "Card:".$card . "Number:" . $idnumber ;

$sql = "INSERT INTO login (uname, upass, utype,status) VALUES ('".$email."', '" .$upass."', '". $utype. "','0')";

$sql_2 = "INSERT INTO user_registration (email,fname, lname, mobile,address,city,district,idcard,idnumber,dob,gender) VALUES ('".$email."','".$fname."', '".$lname."', '".$mobile."','".$address."','".$city."','".$district."','".$card."','".$idnumber."','".$dob."','".$gender."')";

echo $sql_2;

if (mysqli_query($conn, $sql)   and mysqli_query($conn, $sql_2) ) {
   //header("Location:sample_dest.php");
    //exit; // <- don't forget this!
    header("Location:index.html");
    echo " reg success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);  

?>
