<?php
include("dbcon.php");
echo "vehicle returns...";

$vid = $_GET["vid"];
$rentid = $_GET["rentid"];

echo "Vehicle ID". $vid;//.", user id:".$uid;

$sql = "update rentlist set  to_date = current_timestamp() where  vid='".$vid."' and rentid ='".$rentid ."'";
//echo $sql;


if(mysqli_query($conn, $sql)){  

if(mysqli_affected_rows($conn) ) {
   echo "Record updated successfully"; 
   //header("location:approve_vehicle_registration.php"); 
}

else {
  echo "Error: " ;
  header("Location:approve_vehicle_registration.php");
  }
 
}


$sql_2 = " select  from_date,to_date  from rentlist where rentid=".$rentid;

  $result_2=mysqli_query($conn, $sql_2); 

  $dt1="";
  $dt2="";

  if(mysqli_num_rows($result_2) > 0) {
  // output data of each row
 
  if($row_2 = mysqli_fetch_assoc($result_2)) {

  	$dt1=$row_2["from_date"];
  	$dt2=$row_2["to_date"];


  }
}



//--------------------calc difference--------------------
//$date1 = strtotime("2020-07-08 16:18:54");  
//$date2 = strtotime("2020-07-19 02:22:17"); 

//echo "<br>Date1....:".$dt1."Date2...:". $dt2."<br>";

$date1 = strtotime($dt1);  
$date2 = strtotime($dt2);  
  
// Formulate the Difference between two dates 
$diff = abs($date2 - $date1);  
  
  
// To get the year divide the resultant date into 
// total seconds in a year (365*60*60*24) 
$years = floor($diff / (365*60*60*24));  
  
  
// To get the month, subtract it with years and 
// divide the resultant date into 
// total seconds in a month (30*60*60*24) 
$months = floor(($diff - $years * 365*60*60*24) 
                               / (30*60*60*24));  
  
  
// To get the day, subtract it with years and  
// months and divide the resultant date into 
// total seconds in a days (60*60*24) 
$days = floor(($diff - $years * 365*60*60*24 -  
             $months*30*60*60*24)/ (60*60*24)); 
  
  
// To get the hour, subtract it with years,  
// months & seconds and divide the resultant 
// date into total seconds in a hours (60*60) 
$hours = floor(($diff - $years * 365*60*60*24  
       - $months*30*60*60*24 - $days*60*60*24) 
                                   / (60*60));  
  
  
// To get the minutes, subtract it with years, 
// months, seconds and hours and divide the  
// resultant date into total seconds i.e. 60 
$minutes = floor(($diff - $years * 365*60*60*24  
         - $months*30*60*60*24 - $days*60*60*24  
                          - $hours*60*60)/ 60);  
  
  
// To get the minutes, subtract it with years, 
// months, seconds, hours and minutes  
$seconds = floor(($diff - $years * 365*60*60*24  
         - $months*30*60*60*24 - $days*60*60*24 
                - $hours*60*60 - $minutes*60));  
  
/* Print the result 
printf("%d years, %d months, %d days, %d hours, "
     . "%d minutes, %d seconds", $years, $months, 
             $days, $hours, $minutes, $seconds);


$min=0.0;

  $min=$minutes/100;


 $total=($days * 24) + $hours + $min;
 //$total= $hours + $min;

 echo "Total.....:".$total;

*/


$min=0.0;

  $min=$minutes/100;


 $diffHours=($days * 24) + $hours + $min;

 echo " Total Hours:".$diffHours;
 





//------------------------calc end----------


$sql_5 = " select  rent from vehicle_store  where vid='".$vid."'";

echo ",SQL 5:..".$sql_5;

  $result_5=mysqli_query($conn, $sql_5); 

  
  $RENT="";

  if(mysqli_num_rows($result_5) > 0) {
  // output data of each row
 
  if($row_5 = mysqli_fetch_assoc($result_5)) {

  	$RENT=$row_5["rent"];
  	


  }
}




$amt=$diffHours *  $RENT;

echo ".....Rent:...".$RENT;
//-------

echo "Final Amount:".$amt;





$sql4 = "update rentlist set  amount = $amt,hours=$diffHours,rent_status='0' where  vid='".$vid."' and rentid ='".$rentid ."'";
echo $sql4;

$sql6 = "update vehicle_store set  rent_status = '0' where  vid='".$vid."'";
echo $sql6;


if(mysqli_query($conn, $sql4)){  

if(mysqli_affected_rows($conn) ) {
   echo "Record updated SUCCESS..."; 
   //header("location:approve_vehicle_registration.php"); 
}

else {
  echo "Error: " ;
  //header("Location:approve_vehicle_registration.php");
  }
 
}

//-----------------------------
if(mysqli_query($conn, $sql6)){  

if(mysqli_affected_rows($conn) ) {
   echo "Record updated Again...SUCCESS..."; 
   header("location:admin.php"); 
}

else {
  echo "Error: " ;
  header("location:admin.php"); 
  
  }
 
}


//----------




mysqli_close($conn);  


?>