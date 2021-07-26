<?php
echo "calculate time diff";



// Declare and define two dates 
$dt1="2020-07-08 16:18:54";
$dt2="2020-07-09 05:05:58";

//$date1 = strtotime("2020-07-08 16:18:54");  
//$date2 = strtotime("2020-07-09 05:05:58");  

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
  
// Print the result 
printf("%d years, %d months, %d days, %d hours, "
     . "%d minutes, %d seconds", $years, $months, 
             $days, $hours, $minutes, $seconds);




$min=0.0;

	$min=$minutes/100;


 $total=($days * 24) + $hours + $min;
 //$total= $hours + $min;

 echo "Total.....:".$total;

 

?>