<?php
include("dbcon.php");

$sql_2 = " select  from_date,to_date  from rentlist";

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


echo $dt1.",".$dt2;

//$to_time = strtotime("2008-12-13 10:42:00");
$to_time = strtotime($dt2);

//$from_time = strtotime("2008-12-13 10:21:00");
$from_time = strtotime($dt1);

echo round(abs($to_time - $from_time) / 3600,2). " minute";
?>