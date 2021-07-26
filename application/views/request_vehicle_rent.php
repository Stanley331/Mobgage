<?php 

session_start();
include("dbcon.php");

$user_name=$_SESSION["USER_ID"];
$sql = "SELECT * FROM vehicle_store" ;

$retval=mysqli_query($conn, $sql); 

/*
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "User ID :{$row['userid']}  <br> ". "Bike : {$row['biketype']} <br> ".           
         "-----------------------<br>";  
 } 
}else{  
echo "0 results";  
}  
mysqli_close($conn); */
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
}

th, td {
  border: none;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #de4f16; //heading color
  color: white;
}
</style>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
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
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>

    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #de9516; //menu color
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
  background-color: #de9516; //menu color
}

</style>

</head>
<body>
  <ul>
  <li><a class="active" href="customerhome.php">Customer Home</a></li>

  <li><a href="index.html">Log Out</a></li>
</ul>

<h2>Available Vehicles for Rent</h2>
<table>
  <?php
  if(mysqli_num_rows($retval) > 0){ 
    ?>
  <tr>
  <th>User ID</th>
  <th>Bike Type</th>
  <th>Company</th>
  <th>Model</th>
  <th>Mileage</th>
  <th>Rent(/Hr)</th>
  <th>ReGister No</th>
  <th>Bike CC</th>
  </tr>
  <?php
 while($row = mysqli_fetch_assoc($retval)){  
    ?>
  <tr>
  <td><?php echo $row['userid'];?></td>
  <td><?php echo $row['biketype'];?></td>
  <td><?php echo $row['company'];?></td>
  <td><?php echo $row['model'];?></td>
  <td><?php echo $row['mileage'];?></td>
  <td><?php echo $row['rent'];?></td>
  <td><?php echo $row['regno'];?></td>
  <td><?php echo $row['bikecc'];?></td>
  </tr>


  <?php
  //$i=$i+1;
}
}
  ?>
  
</table>

</body>
</html>

<?php
mysqli_close($conn); 
?>
