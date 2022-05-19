<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manager View</title>
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <!--top nav style-->
  <link rel="stylesheet" type="text/css" href="Manager_styles.css">
  <link rel="stylesheet" href="../assets/css/MainStyles.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="Manager_styles.css">
  <link rel="stylesheet" type="text/css" href="navigation.css">

</head>


<body>

  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="Manager_view(QC).php">Home</a>
      <a href="Manage_Rooms.php">Manage Rooms</a>
      <a href="Manage_Receptionist.php">Manage Receptionist</a>
      <a href="Manage_request.php">Manage Request</a>
    </div>
  </div>

  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

  <script>
    function openNav() {
      document.getElementById("myNav").style.display = "block";
    }

    function closeNav() {
      document.getElementById("myNav").style.display = "none";
    }
  </script>
  <style>
    div {
      border: 1px solid #ade8f4;
      padding: 8px;
      text-align: center;
    }

    h1 {
      text-align: center;
      text-transform: uppercase;
      color: #023e8a;

    }

    p {
      text-indent: 50px;
      text-align: center;
      letter-spacing: 3px;
    }

    a {
      text-decoration: none;
      color: #023e8a;
      text-align: center;
    }
  </style>

  <div>
    <h1 style="color:black; text-align: center;"> Manage Rooms </h1>
    <p class="basicfont">By: </p>  <!--DATABASE--->
    <p class="basicfont">ID: </p>  <!--DATABASE--->
  </div>

  <!--////////////////// Table Content ////////////////////-->
  <!-- Tab links for Tables -->
  <div class="tab" style=" text-align: center;">
    <button class="tablinks" onclick="openTable(event, 'RR')">Reviews and Ratings</button>
    <button class="tablinks" onclick="openTable(event, 'E_C')">Edits and Cancellation</button>
    <button class="tablinks" onclick="openTable(event, 'Chart')">Charts</button>


    <!--/////////////////// First Table From First Tab (Reviews and Ratings)///////////////////////-->
    <!-- Button to create new user -->

    <div id="RR" class="tabcontent">
      <h3 style="color:black;">Reviews and Ratings</h3>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="  Search by Rating... ">
      <style>
        .tablerow {
          background-color: white;
          color: black;
        }
      </style>
      <div class="pos">
        <table id="myTable">
          <thead class="header" style="background-color:#caf0f8; color:grey; ">
            <tr>
              <th>Guest ID</th>
              <th>Room ID</th>
              <th>Rating ID</th>
              <th>Rating of Room</th>
              <th>Guest Reviews</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $conn = new mysqli("localhost", "root", "", "hurghada_db");
            if (!$conn) {
              die("Connection Failed: " . mysqli_connect_error());
            }
            echo " ";
            $query = "SELECT rating_id, room_id, guest_id, comments, rating_room FROM ratingandreviews ";
            $result = $conn->query($query);
            if (!$result) {
              die("Fatal Query error");
            }
            echo " ";
            $rows = $result->num_rows;
            for ($j = 0; $j < $rows; $j++) {

              $row = $result->fetch_array(MYSQLI_ASSOC);
              echo "<tr class='tablerow'><td> " . $row['rating_id'] . "</td> <td> " . $row['room_id'] .
                "</td><td>" . $row['guest_id'] . " </td><td>" . $row['comments'] . " </td><td>" . $row['rating_room'] . " </td>";
              echo "</tr>";
            }

            ?>
          </tbody>
          <!---- <tr class="tablerow" >
            <td>00152</td>
            <td>20</td>
            <td>5-123</td>
            <td>5</td>
            <td>This Hotel is very unique </td>

          </tr>
          <tr class="tablerow">
            <td>00153</td>
            <td>25</td>
            <td>4-123</td>
            <td>4</td>
            <td>This Hotel is awsome </td>
          </tr>

          <tr class="tablerow">
            <td>00154</td>
            <td>28</td>
            <td>2-123</td>
            <td>2</td>
            <td>Bad experiance </td>
          </tr> ----->

        </table>
      </div>
    </div>

    <!-- Button to create enable and disable receprionist user -->
    <div id="E_C" class="tabcontent">
      <h3 style="color:black;">Edits and Cancellation</h3>
      <input type="text" id="myInput" onkeyup="myFunction1()" placeholder="  Search by ID... ">
      <div class="pos">
        <table id="myTable">
          <thead class="header" style="background-color:#caf0f8; color:grey;">
            <tr>
              <th>Guest_ID</th>
              <th>Edits</th>
              <th>Cancellation</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $conn = new mysqli("localhost", "root", "", "hurghada_db");
            if (!$conn) {
              die("Connection Failed: " . mysqli_connect_error());
            }
            echo " ";
            $query = "SELECT rating_id, room_id, guest_id, comments, rating_room FROM ratingandreviews ";
            $result = $conn->query($query);
            if (!$result) {
              die("Fatal Query error");
            }
            echo " ";
            $rows = $result->num_rows;
            for ($j = 0; $j < $rows; $j++) {

              $row = $result->fetch_array(MYSQLI_ASSOC);
              echo "<tr class='tablerow'><td> " . $row['rating_id'] . "</td> <td> " . $row['room_id'] .
                "</td><td>" . $row['guest_id'] . " </td><td>" . $row['comments'] . " </td><td>" . $row['rating_room'] . " </td>";
              echo "</tr>";
            }

            ?>
          </tbody>

          <!-- <tr class="tablerow">
            <td>00152</td>
            <td>need lamp </td>
            <td>no</td>
          </tr>

          <tr class="tablerow">
            <td>00153</td>
            <td>nothing</td>
            <td>x</td>

          </tr>

          <tr class="tablerow">
            <td>00154</td>
            <td>need sofa</td>
            <td>no</td>

          </tr>-->


        </table>

      </div>
    </div>

    <!-- Button to show receprionist rating above 3.7 -->
    <div class="pos">
      <div id="Chart" class="tabcontent">
        <h3 style="color:black;">Chart of the most booked room view</h3>
        
      
        <h5 style="color:#023e8a;">Most common Booked Room Views Chart</h5>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

        <canvas id="myChart" class="chart"></canvas>
     
        <script>
        
          
          var xValues = ["Sea View ", "Garden View", "Others"];

          var yValues = [70, 49, 44];
          var barColors = [
            "#87CEEB",
            "#355E3B",
            " #DEB887"
          ];

          new Chart("myChart", {
            type: "pie",
            data: {
              labels: xValues,
              datasets: [{
                backgroundColor: barColors,
                data: yValues

              }]
            }
          
          });
        </script>
      </div>
    </div>
    <!--////////////////////////////////-->

    <!-- ////////////////// search function /////////////////-->

    <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {

          td = tr[i].getElementsByTagName("td")[3]; /* column number 4 in table*/
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>

    <!-- ////////////////// search function /////////////////-->

    <script>
      function myFunction1() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {

          td = tr[i].getElementsByTagName("td")[0]; /* column number 4 in table*/
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>

    <!--//////////////// Open table function /////////////////////-->

    <script>
      function openTable(evt, Table) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(Table).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>

  </div>
</body>

</html>