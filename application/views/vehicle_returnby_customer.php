<?php
include("dbcon.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  /*width: 100%;*/
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


  <script>
     $(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });
  </script>
  

</style>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #2f4d7d;
  font-size: 20px;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 26px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #2f4d7d;
}
</style>


</head>
<body>

<ul>
  <li><a class="active" href="admin.php">Admin Home</a></li>
           
            <li><a href="index.html">Log Out</a></li>
          </ul>
  <h1> Rent Vehicle Return By Customer</h1>
<form method="POST" action="">
<table id="customers">
  <tr>
    <th>Rent ID</th>
    <th>User ID</th>
    <th>Vehicle ID</th>
    <!--<th>Bike Type</th>
    <th>Company</th>
    <th>Bike Model</th>
    <th>Bike Mileage</th>
    <th>Bike CC</th>
    <th>Bike Reg.No.</th>
    <th>Bike Rent</th>-->
    <th>Title</th>
    <th>Purpose</th>
    <th>Issue Date</th>
    <th>Return Date</th>
    <th>Amount</th>
    <th>Hours</th>
    <th>Action</th>
  </tr>
  <?php
  /*
  $sql_2 = "select  rent.rentid,rent.userid,rent.vid,store.biketype,store.company,store.model,store.mileage,store.rent,store.regno,store.bikecc,store.rent_status,rent.from_date,rent.to_date from rentlist as rent, vehicle_store as store where rent.vid=store.vid and store.rent_status = '1' and rent.rent_status='0'" ;
  
*/
  $sql= "select * from rentlist";

  $result=mysqli_query($conn, $sql); 

  if(mysqli_num_rows($result) > 0) {
  // output data of each row
  //$pp="";
  while($row = mysqli_fetch_assoc($result)) {
      $rentid=$row["rentid"];
      $userid=$row["userid"];
      $vid=$row["vid"];
      $from_date=$row["from_date"];
      $to_date=$row["to_date"];
      $r_title=$row["r_title"];
      $r_purpose=$row["r_purpose"];
      $amount=$row["amount"];
      $hours=$row["hours"];
      $rent_status=$row["rent_status"];

      
      
      /*if(is_null($to_dt)){
      	$TODT= "Waiting Return";
      }else{
      	$TODT=$to_dt;
      }*/
      

      //$rent_status=$row_2["rent_status"];

      //echo "Rent Status....:".$rent_status;
      //echo " Hai I am here..";

                      
                                

  ?>
  <tr>
  	<td><?php echo $rentid;?></td>
    <td><?php echo $userid;?></td>
    <td><?php echo $vid;?></td>
    <td><?php echo $r_title;?></td> 
    <td><?php echo $r_purpose;?></td>
    <td><?php echo $from_date;?></td>
    <?php
    	if(is_null($to_date)){

    		?>
    		<td>Waiting</td>
    <?php
}else{
?>
    <td><?php echo $to_date;?></td> 
    <?php

}
if(is_null($hours)){
?>
<td>Waiting</td>
<?php
}else{
  ?>
    <td><?php echo $hours;?></td> 
   <?php
}if(is_null($amount)){
  ?> 
  <td>Waiting</td>
  <?php
}else{
  ?>
    <td><?php echo $amount;?></td>
    <?php
}
  ?>
    
    <?php
    	if(is_null($to_date)){

    		?>
    	<td><a href="vehicle_returnby_customer_action.php?vid=<?php echo $vid; ?>&rentid=<?php echo $rentid; ?>">Return Vehicle</a></td>
    		
    		<?php

    	}else{
    ?>

    <td>Returned</td>
     
  <?php
}
  ?>
  </tr>

   <?php
      }
      }


    ?>

                                    
  
  
  
</table>
</form>


</body>
</html>
