
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




</head>
<body>

<ul>       
            <li><a href="<?php echo base_url();?>Home/adminhome">Back</a></li>
            <li><a href="<?php echo base_url();?>Home/checklogin">Log Out</a></li>
          </ul>
  <h1 align="center"> View Customers By Admin</h1>
<form method="POST" action="">
<<table id="customers" align="center">
 <tr>
  <th>User ID</th>
    <th>Name</th>
    <th>Mail id</th>
    <th>Password</th>
    <th>AAdhar no</th>
    <th>Status</th>
  </tr>


 
  
    
  <?php
           foreach ($e as $ee){?>
           <tr>
                <td> <?php echo $ee['user_id'] ?> </td>
                <td> <?php echo $ee['name'] ?> </td>
                <td> <?php echo $ee['mail_id']; ?> </td>
                <td> <?php echo $ee['password']; ?> </td>
                <td> <?php echo $ee['aadhar_no']; ?> </td>
                <td> <?php echo $ee['status']; ?> </td>              
           </tr>
         <?php
      
   } ?>

                                 
  
  
  
</table>
</form>


</body>
</html>
