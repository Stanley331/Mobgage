
<!DOCTYPE html>
<html>

<head>
  <style>
    #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;

    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }


    <script>$(document).ready(function() {
        $('.log-btn').click(function() {
            $('.log-status').addClass('wrong-entry');
            $('.alert').fadeIn(500);
            setTimeout("$('.alert').fadeOut(1500);", 3000);
          }

        );

        $('.form-control').keypress(function() {
            $('.log-status').removeClass('wrong-entry');
          }

        );

      }

    );
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
      border-right: 1px solid #bbb;
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


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

  <ul>
    <li><a class="active" href="admin.php">Admin Home</a></li>

    <li><a href="index.html">Log Out</a></li>
  </ul>
  <center>
    <h1>View Account Pay By Admin</h1>
  </center>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h3>Enter Vehicle ID</h3>

      <form class="form-inline" method="POST" action="paybill_admin_vehicleid.php">

        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Vehicle ID</label>
          <input type="text" class="form-control" id="inputPassword2" placeholder=" user no " name="vhid">
        </div>
        <button type="submit" class="btn btn-primary mb-2">View</button>
      </form>

    </div>
    <form class="form-inline" method="POST" action="paybill_admin_date.php">

              <div class="form-group mx-sm-3 mb-2">
                <input class="form-control" type="date" value="2020-10-19" id="example-date-input" name="date">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Show</button>
            </form>
  </div>

  <form method="POST" action="">
    <table id="customers" align="center">
      <tr>
        <th>User ID</th>
        <th>Rent ID</th>
        <th>Vehicle ID</th>
        <th>From Date</th>
        <th>To Date</th>
        <th>Travel Title</th>
        <th>Travel Message</th>
        <th>Hours Used</th>
        <th>Total Paid Amount(Rs:)</th>
        <th>Leaser Amount(60%)</th>
      </tr>

      <!--
      <?php

      /*$sql_2 = "select  distinct rent.rentid,rent.userid,rent.vid,store.biketype,store.company,store.model,store.mileage,store.rent,store.regno,store.bikecc,rent.from_date,rent.to_date,rent.hours,rent.amount from rentlist as rent, vehicle_store as store where rent.userid='".$user_name."'" ;
  */

      //$sql_2 ="select * from rentlist where userid='".$user_name."'";
      $sql_2 = "select * from rentlist";

      $result_2 = mysqli_query($conn, $sql_2);

      if (mysqli_num_rows($result_2) > 0) {
        // output data of each row
        $pp = "";
        while ($row_2 = mysqli_fetch_assoc($result_2)) {
          $rentid = $row_2["rentid"];
          $userid = $row_2["userid"];
          $vid = $row_2["vid"];
          $from_dt = $row_2["from_date"];
          $to_dt = $row_2["to_date"];
          $r_title = $row_2["r_title"];
          $r_purpose = $row_2["r_purpose"];
          $hrs = $row_2["hours"];
          $amt = $row_2["amount"];
          // echo "To date...".$to_dt;
          $to_status = "";
          if (is_null($to_dt)) {
            //echo " ok here..";
            $to_status = "Waiting";
          } else {
            $to_status = $to_dt;
          }

          $hr_status = "";
          if (is_null($hrs)) {
            //echo " ok here..";
            $hr_status = "Waiting";
          } else {
            $hr_status = $hrs;
          }

          $amt_status = "";
          $leaser_amt = "";
          if (is_null($hrs)) {
            //echo " ok here..";
            $leaser_amt = "Waiting";
            $amt_status = "Waiting";
          } else {
            $amt_status = $amt;
            $leaser_amt = ($amt * 60) / 100;
          }



      ?>
          <tr>
            <td><?php echo $userid; ?></td>
            <td><?php echo $rentid; ?></td>
            <td><?php echo $vid; ?></td>
            <td><?php echo $from_dt; ?></td>

            <td><?php echo $to_status; ?></td>

            <td><?php echo $r_title; ?></td>
            <td><?php echo $r_purpose; ?></td>
            <td><?php echo $hr_status; ?></td>
            <td><?php echo $amt_status; ?></td>
            <td><?php echo $leaser_amt ?></td>
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