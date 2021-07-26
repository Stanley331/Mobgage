
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
  <li><a class="active" href="http://localhost/RentBike_Sample/Home/">Admin Home</a></li>
           
            <li><a href="http://localhost/RentBike_Sample/Home/">Log Out</a></li>
          </ul>
<div class="container">
  <div class="row">
    <div class="col-12">
    <h1 align ="center"> Update Mobile </h1>
    <form method ="post" action="<?php echo base_url()?>admin/reg_mobile">
  <div class="form-group">
    <label for="exampleInputEmail1">Model</label>
    <input type="text" name="Model" value="<?php echo $model?>" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ram</label>
    <input type="text" name="Ram" value="<?php echo $ram?>"  class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Camera</label>
    <input type="text" name="Camera" value="<?php echo $camera?>"  class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Battery</label>
    <input type="text" name="Battery" value="<?php echo $battery?>" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" name="Price" value="<?php echo $price?>"  class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
