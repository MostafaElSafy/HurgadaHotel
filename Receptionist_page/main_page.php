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

<body>
  <!--Hanshilha lama mostafa yazbot-->
  <header class="navbar navbar-light   sticky-top flex-md-nowrap p-0 shadow ">

    <span class="navbar-brand mb-0 h1 col-md-3 col-lg-2 me-0 px-5">Profile</span>
    <!---------toggle icon--->
    <button class="navbar-toggler position-absolute d-md-none " id="sidebarMenu" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="navbar-nav  ">
      <div class="nav-item text-nowrap">
        <div class="dropdown  px-5 profileb4 ">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <!-- <img src="https://github.com/mdo.png" alt="" width="26" height="26" class="rounded-circle me-2">-->

            <label style="color: #707070;"> Ahmed</label>
          </a>
          <ul class="dropdown-menu text-small shadow  " style="position: absolute; left: 10% ;" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item text-muted" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-muted" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>

  </header>


<body>
  
<div class="row mt-4 mb-0 mx-4">

<div class="col">
  <h1 class="h3" style="color:#0096c7;"> Rooms</h1>
</div>

</div>

  <main class="col-sm-3  col-sm-12 px-sm-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-wrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
<!---pt:padding top, pb:padding bottom-->
    



      <div class="row">        
        <div class="col-auto">
           <div class="label" style="color:#0096c7;"> Search: </div>
        </div>
        <div class="col">
            <input class="form-control" type="text" name="demo2" id="myInput" class="calinput" />
        </div>
       </div>
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
        <div>
        <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="../assets/img/ic_add_box_24px.png" style=" margin:4px ;" alt="">
          Add
        </button>
      </div>
      </div>












      




    </div>
    
   <div class="pos">
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
          <?php
            $conn = new mysqli("localhost","root","","hurghada_db");
            if (!$conn){
              die("Connection Failed: " . mysqli_connect_error());
            }
            echo'<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Success!</strong> Connected with database successfully.
            </div>';
            $query = "SELECT room_id,room_type,room_view,occupied  FROM rooms ";
            $result = $conn->query($query);
            if (!$result) {
            die ("Fatal Query error");
            }
            echo'<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Success!</strong> Query done successfully.
            </div>';
            $rows = $result->num_rows;
            
            for ($j=0; $j < $rows; $j++) {
              $row = $result->fetch_array(MYSQLI_ASSOC);
              echo "<tr><td> ".$row['room_id']."</td> <td> ".$row['room_type']."</td><td>".$row['room_view']." </td> <td> ".$row['occupied']."</td>";
              echo "<td>
              <div class='row'>
               <div class='col-1'>
              <a data-bs-toggle='modal' id='editbtn' data-bs-target='#exampleModal2' onclick='UpdateDetails('.$row[room_id].')'><img src='../assets/img/ic_border_color_24px.svg' class='img-responsive iconn2'></a>
               </div>
               <div class='col-1'>
               <a href='#' title=''><img src='../assets/img/ic_delete_24px.svg' class='img-responsive iconn3'></a>
               </div>

              </td>";
              echo "</tr>";
              }
          ?>
        </tbody>
      </table>
    </div> 


    <!----------------------------------------- Modal ------------------------->
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
      <th scope="col">Room type</th>
      <th scope="col">  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
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
    </tr>
  </tbody>
</table>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save </button>
          </div>
        </div>
      </div>
    </div>
    <!------------------------------ Modal end ----------------------------->

    <!----------------------------------------- Modal icon edit ------------------------->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title " style="color: #2470dc;" id="exampleModalLabel">Room Edit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container vw-75">
            <form method="POST">
              <div class="row">
                <div class="col">
                <label class="form-label">Room number:</label>
                <input type="text" class="form-control" name="ID" value="<?php echo $row['room_id'];  ?>">
                </div>
                <div class="col">
                <label class="form-label">Stay duration:</label>
                <input type="text" class="form-control" name="stay" value="<?php echo $row['stay_duration'];  ?>">
                </div>
              </div>
              <div class="row">
                <div class="col">
                <label class="form-label">Occupied/Booked:</label>
                <div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">Empty</label>
                </div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">Booked</label>
                </div>
                <div class="col">
                <label class="form-label">Price:</label>
                <input type="text" class="form-control" name="price" value="<?php echo $row['price'];  ?>">
                </div>
              </div>  
              <div class="row">
                <div class="col">
                <label class="form-label">Room Type:</label>
                <input type="text" class="form-control" name="type" value="<?php echo $row['room_type'];  ?>">
                </div>
                <div class="col">
                <label class="form-label">Room view:</label>
                <input type="text" class="form-control" name="view" value="<?php echo $row['room_view'];  ?>">
                </div>
              </div>  
            </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save </button>
            <input type="hidden" id="hiddendata">
          </div>
        </div>
      </div>
    </div>
    <!------------------------------Modal end of the edit icon----------------------------->
 

</body>

</html>