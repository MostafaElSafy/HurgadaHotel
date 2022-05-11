<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Rooms</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!--top nav style-->
    <link rel="stylesheet" type="text/css" href="Manager_styles.css">
    <link rel="stylesheet" href="../assets/css/MainStyles.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Manager_styles.css">

</head>


<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="Manager_view(QC).php">Home</a>
        <a href="Manage_Rooms.php">Manage Rooms</a>
        <a href="Manage_Receptionist.php">Manage Receptionist</a>
        <a href="Manage_request.php">Manage Request</a>
    </div>

    <div id="main">

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Sea View ", "Garden View", "Others"];
var yValues = [70, 49, 44];
var barColors = [
  "#87CEEB",
  "#355E3B",
  "	#DEB887"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Most common Booked Room Views Chart"
    }
  }
});

</script>

 <!-- Buttons for tables -->
 <h3> Ratings and Reviews </h3>

 <script>
  function showTable()
  {
    document.getElementsByClassName('table table-bordered table-striped table-hover')[0].style.visibility = "visible";
  }
  function hideTable()
  {
   document.getElementsByClassName('table table-bordered table-striped table-hover')[0].style.visibility = "hidden";
  }
</script>
<body onload="javascript:hideTable()">
<input type='button' onClick='javascript:showTable();' value='show'>
<input type='button' onClick='javascript:hideTable();' value='hide'>
<table class='table table-bordered table-striped table-hover '>


<style>
.head{
                background-color:lightskyblue;
                color:white;
     }
</style>
        <tr class="head">
            <th>Guest_ID</th>
            <th>Room_ID</th>
            <th>Rating_ID</th>
            <th>Rating_Room</th>
            <th>Reviews</th>
        </tr>
        <tbody>
        <tr>
            <td>00152</td>
            <td>20</td>
            <td>5-123</td>
            <td>5</td>
            <td>This Hotel is very unique </td>


        </tr>
        <tr>
            <td>00153</td>
            <td>25</td>
            <td>4-123</td>
            <td>4</td>
            <td>This Hotel is awsome </td>
        </tr>

        <tr>
        <td>00154</td>
            <td>28</td>
            <td>2-123</td>
            <td>2</td>
            <td>Bad experiance  </td>
        </tr>
        </tbody>
      </table>

    



      <h3>  Edits and Cancellation </h3>
      <script>
  function showTable()
  {
    document.getElementsByClassName('table table-bordered table-striped table-hover')[0].style.visibility = "visible";
  }
  function hideTable()
  {
   document.getElementsByClassName('table table-bordered table-striped table-hover')[0].style.visibility = "hidden";
  }
</script>
<body onload="javascript:hideTable()">
<input type='button' onClick='javascript:showTable();' value='show'>
<input type='button' onClick='javascript:hideTable();' value='hide'>
      <table class="table table-bordered table-striped table-hover ">
<style>
.head{
                background-color:lightskyblue;
                color:white;
     }
</style>
        <tr class="head">
            <th>Guest_ID</th>
            <th>Edits</th>
            <th>Cancellation</th>
        </tr>
        <tbody>
        <tr>
            <td>00152</td>
            <td>need lamp </td>
            <td>no</td>
          


        </tr>
        <tr>
            <td>00153</td>
            <td>nothing</td>
            <td>x</td>
          
        </tr>

        <tr>
        <td>00154</td>
            <td>need sofa</td>
            <td>no</td>
      
        </tr>
        </tbody>

      </table>
</body>

</html>

