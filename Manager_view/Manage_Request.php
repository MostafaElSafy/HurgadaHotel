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
<!-- ADD Button Creation-->
<div> 
        <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="../assets/img/ic_add_box_24px.png" style=" margin:4px ;" alt=" ">
          Requests waiting to Accept 
        </button>
</div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <!-- Using class "modal-dialog modal-lg " to show the table in large sizing-->
        <div class="modal-dialog modal-fullscreen"> 
          
        <div class="modal-content">  <!--content of the model-->
          <div class="modal-header">
            <h5 class="modal-title " style="color: #2470dc;" id="exampleModalLabel"> Requests from Clients </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container vw-75">

  <table class="table">
  <thead>
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
      <th scope="col"> Accept </th>
      <th scope="col"> Reject </th>

      <th scope="col">  </th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row"> 1 </th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>123</td>
      <td>5/11/2000</td>
      <td>2</td>
      <td>001</td>
      <td>01111111</td>
      <td>Egyptian</td>
      <td><div class="btn btn-primary btn-sm">Accept</div></td>
     <td><div class="btn btn-danger btn-sm px-3">Reject</div></td>

      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>128</td>
      <td>5/2/2000</td>
      <td>3</td>
      <td>002</td>
      <td>01122111</td>
      <td>Chinese</td>
      <td><div class="btn btn-primary btn-sm">Accept</div></td>
     <td><div class="btn btn-danger btn-sm px-3">Reject</div></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="1">Larry </td>
     <td>Bird</td> 
      <td>@twitter</td>
      <td>123</td>
      <td>5/8/2000</td>
      <td>1</td>
      <td>003</td>
      <td>01133111</td>
      <td>American</td>
      <td><div class="btn btn-primary btn-sm">Accept</div></td>
     <td><div class="btn btn-danger btn-sm px-3">Reject</div></td>
    </tr>
  
     
  </tbody>
  
</table>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save </button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>

