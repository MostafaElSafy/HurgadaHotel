<?php
session_start();
include("../db_connect.php");
include("../functions.php");
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Manager_styles.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Manage Requests</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--style-->
  <link rel="stylesheet" type="text/css" href="Manager_styles.css">
  <link rel="stylesheet" href="../assets/css/MainStyles.css">



  <?php
  include 'NavBar.html';
  ?>

</head>

<body>

  <hr>
  <h4>Guests Requests</h4>

  <hr>
  <style>
        .table td {
            text-align: center;
        }
    </style>
    <style>
        .table th {
            text-align: center;
        }
    </style>

    <div class="tab-pane fade" id="nav-Request" role="tabpanel" aria-labelledby="nav-Request-tab"></div>
    <table class="table table-striped table-hover">
        <thead style="background-color: #0096c7 ; color:  rgba(242, 242, 242, 0.982);; font-weight:500;">
            <tr>

            <th scope="col"> First Name</th>
            <th scope="col"> Last Name</th>
            <th scope="col">E mail</th>
            <th scope="col"> Password</th>
            <th scope="col">Date of Birth</th>
            <th scope="col"> Extra Members</th>
            <th scope="col">Guest ID </th>
            <th scope="col"> Phone Number </th>
            <th scope="col"> Nationality </th>
            <th scope="col"> state </th>
            <th scope="col"> Actions </th>


            </tr>
        </thead>

        <tbody id="myTable">
            <!--Connecting the table that appears to the receptionist with the database-->
            <?php
            $conn = new mysqli("localhost", "root", "", "hurghada_db");
            if (!$conn) {
                die("Connection Failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM guest ";
            $result = $conn->query($query);
            if (!$result) {
                die("Fatal Query error");
            }

            $rows = $result->num_rows;

            for ($j = 0; $j < $rows; $j++) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $guestid = $row['guest_id'];

                echo '<tr><td> ' . $row['firstname'] . '</td> <td> ' . $row['lastname'] . '</td><td>' . $row['email'] . ' </td> <td> ' . $row['password'] . '</td><td> ' . $row['dateofbirth'] . '</td><td> ' . $row['extramembers'] . '</td><td> ' . $row['guest_id'] . '</td><td> ' . $row['phonenumber'] . '</td><td> ' . $row['nationality'] . '</td><td> ' . $row['state'] . '</td>';

                echo '<td>
              <div class="row">
               <div class="col">
               <div><a href="acceptQC.php?acceptid=' . $guestid . '" class="btn btn-primary btn-sm">Accept</a>
                    <a href="rejectQC.php?rejectid=' . $guestid . '" class="btn btn-danger btn-sm px-3">Reject</a>
              </div>
              </div>
              </div>
              </td>';
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
  <!--<div class="tab-pane fade" id="nav-Request" role="tabpanel" aria-labelledby="nav-Request-tab"></div>
  <table class="table table-striped table-hover">
    <thead class="dark1">
      <tr>
        <th scope="col"></th>
        <th scope="col"> First Name</th>
        <th scope="col"> Last Name</th>
        <th scope="col">E mail</th>
        <th scope="col"> Password</th>
        <th scope="col">Date of Birth</th>
        <th scope="col"> Extra Members</th>
        <th scope="col">Guest ID </th>
        <th scope="col"> Phone Number </th>
        <th scope="col"> Nationality </th>
        <th scope="col"> Actions </th>
        
        <th scope="col"> </th>
      </tr>
    </thead>

    <tbody>-->

      <!--Connecting the table that appears to the receptionist with the database-->
      
     <!-- $conn = new mysqli("localhost", "root", "", "hurghada_db");
      if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
      }

      $query = "SELECT * FROM guest ";
      $result=mysqli_query($conn,$query);
      if (!$result) {
        die("Fatal Query error");
      }
      
      $rows = $result->num_rows;

      for ($j = 0; $j < $rows; $j++) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $guest_id = $row['guest_id'];
        echo '<tr><td> ' . $row['firstname'] . '</td> <td> ' . $row['lastname'] . '</td><td>' . $row['email'] . ' </td> <td> ' . $row['password'] . '</td><td> ' . $row['dateofbirth'] . '</td><td> ' . $row['extramembers'] . '</td><td> ' . $row['phonenumber'] . '</td><td> ' . $row['nationality'] . '</td>';
        echo '<td>
              <div class="row">
              <div class="col">
              <button class="btn btn-primary btn-sm">Accept</button>
              <button class="btn btn-danger btn-sm px-3">Reject</button>
              </div>
              </div>
              </td>';
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary">Save </button>
  </div>-->

</body>

</html>