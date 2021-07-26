<?php 
session_start();
include("dbcon.php");
$u_name = $_POST["uname"];
$u_pass = $_POST["upass"];

echo "Name:". $u_name."Password:". $u_pass;


$sql = "SELECT * FROM login WHERE uname = '" . $u_name ."' AND upass = '" . $u_pass ."'" ;
//$sql = "SELECT * FROM login WHERE uname = 'amal' AND upass = 'kumar'" ;

//$sql = "SELECT * FROM login WHERE uname='anish'";

$result = mysqli_query($conn, $sql);
echo " I am here...";


if (mysqli_num_rows($result) > 0) {
	echo "login success";
	 if($row = $result->fetch_assoc()) {
    echo "User ID: " . $row["uname"]. " - User Type : " . $row["utype"];
    $_SESSION["USER_ID"] = $u_name;

    if($row["utype"]=="admin"){
    	echo " admin user..." ;
    	header("Location:admin.php");
    }elseif($row["utype"]=="customer") {
      echo "Customer user..." ;
      header("Location:customerhome.php");
    }elseif($row["utype"]=="leaser") {
      echo "Customer user..." ;
      header("Location:leaserhome.php");
    }elseif($row["utype"]=="staff") {
      echo "Customer user..." ;
      header("Location:staffhome.php");
    }

  }
	//header("Location:index.html");
    //exit; // <- don't forget this!
  
} else {
  echo "login failed..";
   header("Location:login.html");
}


?>
