<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Custom stlylesheet -->
  <link rel="stylesheet" href="../assets/css/MainStyles.css">
  <link rel="stylesheet" href="style_receptionist.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!--Ajax-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


<!--Navigation bar at the top of the page-->
<body class="bg-light">
  <style>
   .bg-primary
    { background-color: #0096c7 !important;}
  </style>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hurghada Grand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <!-- // lw 3ayzen tdefo 7aga 7toha ka LI hena -->
                <ul class="navbar-nav me-auto  mb-lg-0">
                    <li class="nav-item d-none">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a class="nav-link" href="logout.php">Logout</a>
                </span>
            </div>
        </div>
    </nav>

  </header>
</body>
<!--End of navigation bar-->

<body>
  
<div class="row mt-4 mb-0 mx-4">

<div class="col">
  <h1 class="h3" style="color:#0096c7;"> Rooms </h1>
</div>

</div>

  <main class="col-sm-3  col-sm-12 px-sm-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-wrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
        <!---pt:padding top, pb:padding bottom-->
    


<!--Search Bar that allows searching with any type of data and show only the matching data of what you've searched for in the table-->
      <div class="row">        
        <div class="col-auto">
           <div class="label" style="color:#0096c7;"> Search: </div>
        </div>
        <div class="col">
            <input class="form-control" type="text" name="demo2" id="myInput" class="calinput" />
        </div>
       </div>
<!--JAVASCRIPT Function for Search-->
      <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1) //search 3la el satr dah
        });
      });
     });
    </script>
<!--Add button which allows the receptionist to add room requests-->
        <div>
        <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="../assets/img/ic_add_box_24px.png" style=" margin:4px ;" alt="">
          Add
        </button>
      </div>
      </div>


    </div>
<!--The Table giving it the position in page provided in style_receptionist.css-->
   <div>
      <table class="table table-responsive table-bordered">
        <thead style="background-color: #caf0f8; color: #707070; font-weight: 300; font-style: normal;">
          <tr>
            <th scope="col" class="col-lg-3">Room no</th>
            <th scope="col" class="col-lg-3">Room type</th>
            <th scope="col" class="col-lg-3">Room view</th>
            <th scope='col' class='col-lg-3'>Occupied</th>
            <th scope="col" class="col-lg-12">Action</th>
          </tr>
        </thead>
        <tbody id="myTable">
         <!--Connecting the table that appears to the receptionist with the database-->
          <?php
            $conn = new mysqli("localhost","root","","hurghada_db");
            if (!$conn){
              die("Connection Failed: " . mysqli_connect_error());
            }
           /* echo'<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Success!</strong> Connected with database successfully.
            </div>';*/
            $query = "SELECT room_id,room_type,room_view,occupied  FROM rooms ";
            $result = $conn->query($query);
            if (!$result) {
            die ("Fatal Query error");
            }
            /*echo'<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Success!</strong> Query done successfully.
            </div>';*/
            $rows = $result->num_rows;
            
            for ($j=0; $j < $rows; $j++) {
              $row = $result->fetch_array(MYSQLI_ASSOC);
              $roomid=$row['room_id'];
              echo '<tr><td> '.$row['room_id'].'</td> <td> '.$row['room_type'].'</td><td>'.$row['room_view'].' </td> <td> '.$row['occupied'].'</td>';
              echo '<td>
              <div class="row">
               <div class="col">
              <a  href="update.php?updateid='.$roomid.'"><img src="../assets/img/ic_border_color_24px.svg" class="img-responsive iconn2"</a>
              <a href="delete.php?deleteid='.$roomid.'"><img src="../assets/img/ic_delete_24px.svg" class="img-responsive iconn3"></a>
              </div>
              </div>
              </td>';
              echo "</tr>";
              }
          ?>
         
        </tbody>
      </table>
    </div> 

<!-- Modal(Pop up) upon clicking on add button for the reuqests sent for rooms to be accepted or rejected by the recepitionist-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title " style="color: #2470dc;" id="exampleModalLabel">Rooms Requests</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container vw-75">
            <table class="table">
           
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Room no</th>
      
      <th scope="col">  </th>
    </tr>
  </thead>
  <tbody>
  <?php
            $conn = new mysqli("localhost","root","","hurghada_db");
            if (!$conn){
              die("Connection Failed: " . mysqli_connect_error());
            }
            $query = "SELECT room_id, firstname FROM rooms, guest WHERE rooms.room_id=guest.guest_id";
            $result = $conn->query($query);
            if (!$result) {
            die ("Fatal Query error");
            }
            $rows = $result->num_rows;
            
            for ($j=0; $j < $rows; $j++) {
              $row = $result->fetch_array(MYSQLI_ASSOC);
              $roomid=$row['reserve_id'];
              echo '<tr><td> '.$row['firstname'].'</td> <td> '.$row['room_id'].'</td>';
              echo '<td>
              <div class="row">
               <div class="col">
                <div class="btn btn-primary btn-sm">Accept</div>
                <div class="btn btn-danger btn-sm px-3">Reject</div>
              </div>
              </div>
              </td>';
              echo "</tr>";
              }
            ?>
    <!--<tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td> <div class="btn btn-primary btn-sm">Accept</div></td>
      
      <td> <div class="btn btn-danger btn-sm px-3">Reject</div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td> <div class="btn btn-primary btn-sm">Accept</div></td>
      
      <td> <div class="btn btn-danger btn-sm px-3">Reject</div></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td> <div class="btn btn-primary btn-sm">Accept</div></td>
      
      <td> <div class="btn btn-danger btn-sm px-3">Reject</div></td>
    </tr>----->
  </tbody>
</table>

            </div>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
<!----------------------------------------- Modal end ---------------------------------------------------------------------->




 

</body>

</html>