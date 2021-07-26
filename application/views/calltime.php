<?php
include("timediff.php");

//$date1 = strtotime("2020-07-08 16:18:54");  
//$date2 = strtotime("2020-07-09 02:22:17");

$date1 = "2020-07-08 16:18:54";  
$date2 = "2020-07-09 02:22:17";

echo "Time Diff in hours....:".calctimediff($date1,$date2);



?>