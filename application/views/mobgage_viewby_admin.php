
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>

<ul>
  <li><a href="<?php echo base_url();?>Home/adminhome">Back</a></li>
  <li><a href="<?php echo base_url();?>Home/checklogin">LogOut</a></li>
          </ul>
<div class="container">
  <div class="row">
    <div class="col-12">
    <h1 align="center"> View Mobile </h1>

<div class="col-12">
  <a href="<?php echo base_url()?>admin/add_mobile">
  <button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </svg> Add</button>
</a>
</div>
<div class="col-12">
<form method="POST" action="">
<table class="table mt-3">
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
  </thead>
  <tbody>
  <tbody>
											<?php
											$query=$this->db->query("SELECT * FROM mobile_list");
											$catdata = $query->result();
											$i=0;
											foreach($catdata as $row)
											{
												echo '<tr>';
												echo "<td>".$row->mob_id."</td>";
                        echo "<td>".$row->mob_model."</td>";
                        echo "<td>".$row->mob_ram."</td>";
                        echo "<td>".$row->mob_camera."</td>";
                        echo "<td>".$row->mob_battery."</td>";
                        echo "<td>".$row->mob_price."</td>";
                        
												echo '<td> <a href="'.base_url().'admin/update_mobile/'.$row->mob_id.'"> <button type="button" class="btn btn-light">Update</button> <a href="'.base_url().'admin/delete_mobile/'.$row->mob_id.'"> <button type="button" class="btn btn-dark">Delete</button> </a> </td>';
												echo '</tr>';
                      }

											
											?>

											</tbody>
  </tbody> 
</table>
</form>
</div>
    </div>
  </div>
</div>


</body>
</html>
<script>
	$(function () {
		bsCustomFileInput.init();
	});
</script>
