
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
            <li><a href="<?php echo base_url();?>Home/checklogin">Log Out</a></li>
          </ul>

          <h1 align="center"> Orders</h1>
<form method="POST" action="">
<table id="customers" align="center">
 <tr>
  <th>Order ID</th>
    <th>Customer Id</th>
    <th>Phone id</th>
    <th>Price</th>
    <th>Rent</th>
    <th>Refundable Amount</th>
    <th>Purchased Date</th>
    <th>Return Date</th>
  </tr>

  <?php
			$query=$this->db->query("select * from order_details where purchase_date = '$date'");
			$studata = $query->result();
			$i=1;
			foreach($studata as $row)
				{
					echo "<tr>";
					echo "<td>".$row->order_id."</td>";
          $uquery=$this->db->select('name as cname')->from('register')->WHERE('user_id',$row->user_id)->get();
          $udata = $uquery->row()->cname;
					echo "<td>".$udata."</td>";
          $mquery=$this->db->select('mob_model as mob')->from('mobile_list')->WHERE('mob_id',$row->mob_id)->get();
          $mdata = $mquery->row()->mob;
          echo "<td>".$mdata."</td>";

          $pquery=$this->db->select('mob_price as amt')->from('mobile_list')->WHERE('mob_id',$row->mob_id)->get();
          $pdata = $pquery->row()->amt;
          echo "<td>".$pdata."</td>";
                    echo "<td>".$row->rent."</td>";
                    echo "<td>".$row->ref_amt."</td>";
                    echo "<td>".$row->purchase_date."</td>";
					echo "<td>".$row->return_date."</td>";
					echo "</tr>";

					$i++;
				}
	?>
  
                                    
  

</table>
</form>

</body>
</html>
