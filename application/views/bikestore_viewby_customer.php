
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>

<ul>
<li><a href="<?php echo base_url();?>Home/customerhome">Back</a></li>
  <li><a class="active" href="<?php echo base_url();?>Home/checklogin">Logout</a></li>
           
          </ul>
  <h1 align="center"> View Mobiles</h1>
<form method="POST" action="">
<<table class="table mt-3" align="center">
<thead class="thead-dark">
 <tr>
    <th>Mobile ID</th>
    <th>Model</th>
    <th>Ram</th>
    <th>Camera</th>
    <th>Battery</th>
    <th>Price</th>
    <th>     </th>
  </tr>
</thread>

  <?php
                foreach ($e as $ee){?>
                <tr>
                <td> <?php echo $ee['mob_id'] ?> </td>
                <td> <?php echo $ee['mob_model'] ?> </td>
                <td> <?php echo $ee['mob_ram']; ?> </td>
                <td> <?php echo $ee['mob_camera']; ?> </td>
                <td> <?php echo $ee['mob_battery']; ?> </td>
                <td> <?php echo $ee['mob_price']; ?> </td>
                <td><a href ="<?php echo base_url();?>customer/view_product/<?php echo $ee['mob_id'];?>" class="btn btn-dark">Rent Now</a></td>
                 </tr>
                <?php

                    }?>
        
  
  
  
</table>
</form>



</body>
</html>
