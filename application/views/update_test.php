<?php  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "rentabike";

// Create connection

$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "UPDATE login SET upass='baba' WHERE uname='kochi'";

echo "ok here...";


if(mysqli_query($conn, $sql)){  

if(mysqli_affected_rows($conn) ) {
   echo "Record updated successfully";  
}

else {
  echo "Error: " ;
  }
 
}

  
mysqli_close($conn);  
?>  