<!-- <?php
include("dbcon.php");
?>  -->
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
  <li><a class="active" href="customerhome.php">Customer Home</a></li>
           
            <li><a href="index.html">Log Out</a></li>
          </ul>
  <center><h1> Vehicle Rent Request By Customer</h1></center>
<form method="POST" action="">
<table id="customers">
  <tr>
    <th>Vehicle ID</th>
    <th>Email</th>
    <th>Bike Type</th>
    <th>Company</th>
    <th>Bike Model</th>
    <th>Bike Mileage(Km/Hr)</th>
    <th>Bike CC</th>
    <th>Bike Reg.No.</th>
    <th>Bike Rent(Rs/Hr)</th>
    <th>Action</th>
  </tr>

  <!--
  <?php
  
  $sql_2 = "SELECT * FROM vehicle_store WHERE rent_status  = '0' and status='1'" ;

  //"SELECT * FROM vehicle_store WHERE rent_status  = '0' and status='1'" ;
  
  $result_2=mysqli_query($conn, $sql_2); 

  if(mysqli_num_rows($result_2) > 0) {
  // output data of each row
  $pp="";
  while($row_2 = mysqli_fetch_assoc($result_2)) {
      $userid=$row_2["userid"];
      $vid=$row_2["vid"];
      $biketype=$row_2["biketype"];

      $company=$row_2["company"];
      $model=$row_2["model"];
      $mileage=$row_2["mileage"];
      $rent=$row_2["rent"];
      $regno=$row_2["regno"];
      $bikecc=$row_2["bikecc"];
      //$stat_1="accept";
      //$stat_2="reject";
                      
                                

  ?>

  
  <tr>
    <td><?php echo $vid;?></td>
    <td><?php echo $userid;?></td>
    <td><?php echo $biketype;?></td>
    <td><?php echo $company;?></td>
    <td><?php echo $model;?></td>
    <td><?php echo $mileage;?></td>
    <td><?php echo $bikecc;?></td>
    <td><?php echo $regno;?></td>
    <td><?php echo $rent;?></td>
     <td><a href="request_vehicle_rent_customer_complete.php?vid=<?php echo $vid; ?>">Request</a></td>
  </tr>

   <?php 

      }
      }


    ?>  
-->
                                    
  
  
  
</table>
</form>


</body>
</html>
