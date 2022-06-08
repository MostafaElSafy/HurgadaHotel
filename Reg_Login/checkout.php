<?php
session_start();
include("../db_connect.php");
include("../functions.php");
?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>    <!-- This code is to not show notice error in this page i use it instead of  isset function -->

<!-- to ignore el notice messages instead of -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="reservation.css">
</head>

<body class="bg-light">


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
                    <a class="nav-link" href="reservation.php">Room CheckIn</a>
                </span>
                <span class="navbar-text">
                    <a class="nav-link" href="logout.php">Logout</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <h2 class="mt-4">
                Thank You for your stay , See You soon !
            </h2>
        </div>

        <form method="POST" class="row g-3 mt-2">
            <div class="col-md-2">
                <label class="form-label">From</label>
                <input type="date" class="form-control" name="from">
            </div>
            <div class="col-md-2">
                <label class="form-label">To</label>
                <input type="date" class="form-control" name="to">
            </div>

            <div class=" col-md-2">
                <label class="form-label">Room View</label>
                <select class="form-select" aria-label="Default select example" name="view">
                    <option value="sea">Sea View</option>
                    <option value="garden">Garden View</option>

                </select>
            </div>
            <div class=" col-md-2">
                <label class="form-label">Room type</label>
                <select class="form-select" aria-label="Default select example" name="type">
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Triple">Triple</option>
                    <option value="Suite">Suite</option>
                </select>
            </div>

            <div class="col-md-1">
                <label class="form-label">Guests</label>
                <select class="form-select" aria-label="Default select example" name="guests">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            <div class="col-md-3  mt-5">
                <button type="submit" class="btn btn-primary rounded-pill">Check Availabillity</button>
            </div>

            <div class="col-md-3  ">
                <a href="customReserve.php">I have a diffrent plan</a>
            </div>

        </form>

        <hr>
        <!-- ////////////ROOMS///////////////// -->

        <div class="row mt-3">

            <div class="col">
                <h5>
                    Available rooms
                </h5>
            </div>

        </div>
        <div class="row mt-2">

            <div class="container">

                <table class="table table-responsive table-striped table-hover">
                    <thead class="text-center" style="background-color: #0096c7 ; color:  rgba(242, 242, 242, 0.982);; font-weight:500;">
                        <tr>

                            <th scope="col" class="col-lg-1">Room no</th>
                            <th scope="col" class="col-lg-1"> Type</th>
                            <th scope="col" class="col-lg-1"> View</th>
                            <th scope="col" class="col-lg-1">Price</th>
                            <th scope="col" class="col-lg-1">Max persons</th>
                            <th scope="col" class="col-lg-1">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php

                          $conn = new mysqli("localhost", "root", "", "hurghada_db");
                        if (!$conn) {
                            die("Connection Failed: " . mysqli_connect_error());
                        }
                        $query = "SELECT room_id,room_type,room_view,price,max  FROM rooms WHERE room_view='$_POST[view]' AND room_type= '$_POST[type]' AND max >= '$_POST[guests]' ";
                        $result = $conn->query($query);
                        if (!$result)
                        {
                            die("Fatal Query error");
                        }

                        $rows = $result->num_rows;
                        for ($j = 0; $j < $rows; $j++) {

                            $row = $result->fetch_array(MYSQLI_ASSOC);

                            $_SESSION['R_id'] =  $row['room_id'];


                            echo "<tr> <td> " . $row['room_id'] . "</td> <td> " . $row['room_type'] . "</td><td>" . $row['room_view'] . " </td> <td>" . $row['price']
                              . "</td><td>" . $row['max'] . " </td>" . "<td>  <a class='btn btn-outline-primary' href='img.php' role='button'>Reserve</a> </td>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>