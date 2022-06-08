<?php
session_start();
include("../db_connect.php");
include("../functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<title> Manage Receptionist </title>

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
    <link rel="stylesheet" type="text/css" href="navBar.css">

    <?php
    include 'NavBar.html';
    ?>


</head>

<body>

    <!-- Inside the two bars -->
    <hr>

    <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h3> Manage Receptionist </h3>

                </div>
                <!-- add sapce between the two buttons -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end col-md-4 ms-auto">
                    <button type="button" class="btn btn-secondary btn-lg px-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="../assets/img/ic_add_box_24px.png" style=" margin:2px ;" alt="">
                        Create New User



                </div>
            </div>
        </div>
    </div>



    <hr>
    <!--table data and table header are centred-->
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

                <th scope="col"> Receptionist ID</th>
                <th scope="col"> First Name</th>
                <th scope="col"> Last Name</th>
                <th scope="col"> Username </th>
                <th scope="col"> Password</th>
                <th scope="col"> Email</th>
                <th scope="col"> Date of birth</th>
                <th scope="col"> Phone Number </th>
                <th scope="col"> Address </th>
                <th scope="col"> National ID</th>
                <th scope="col"> Action </th>


            </tr>
        </thead>

        <tbody id="myTable">
            <!--Connecting the table that appears to the receptionist with the database-->
            <?php
            $conn = new mysqli("localhost", "root", "", "hurghada_db");
            if (!$conn) {
                die("Connection Failed: " . mysqli_connect_error());
            }

            $query = "SELECT receptionist_id , firstname, lastname , username, password, email, dateofbirth,  phonenumber, address, national_id  FROM receptionist ";
            $result = $conn->query($query);
            if (!$result) {
                die("Fatal Query error");
            }

            $rows = $result->num_rows;

            for ($j = 0; $j < $rows; $j++) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $receptionist_id = $row['receptionist_id'];

                echo '<tr><td> ' . $row['receptionist_id'] . '</td> <td> ' . $row['firstname'] . '</td><td>' . $row['lastname'] . ' </td> <td> ' . $row['username'] . '</td> <td> ' . $row['password'] . '</td><td> ' . $row['email'] . '</td><td> ' . $row['dateofbirth'] . '</td><td> ' . $row['phonenumber'] . '</td><td> ' . $row['address'] . '</td><td> ' .
                    $row['national_id'] . '</td>';

                echo '<td>
              <div class="row">
               <div class="col">
              <a href="updateQC.php?updateid=' . $receptionist_id . '"><img src="../assets/img/ic_border_color_24px.svg" class="img-responsive iconn2"</a>
              <a href="deleteQC.php?deleteid=' . $receptionist_id . '"><img src="../assets/img/ic_delete_24px.svg" class="img-responsive iconn3"></a>
              </div>
              </div>
              </td>';
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    </form>
    <!-------- Modal icon edit [for editing info on reserved rooms]------------------------->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " style="color: #2470dc;" id="exampleModalLabel">Room Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container vw-75">

                        <div class="row">
                            <div class="col">
                                <label class="form-label">Room number:</label>
                                <input type="text" class="form-control" name="ID" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">Stay duration:</label>
                                <input type="text" class="form-control" name="stay" value="">
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
                                <input type="text" class="form-control" name="price" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Room Type:</label>
                                <input type="text" class="form-control" name="type" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">Room view:</label>
                                <input type="text" class="form-control" name="view" value="">
                            </div>
                        </div>

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

    <!--Create New User Form-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " style="color: #2470dc;" id="exampleModalLabel">Create New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container vw-75">


                        <?php
                        if (isset($_POST['submit'])) {

                            $firstname = $_POST["firstname"];
                            if (empty($_POST["firstname"])) {

                                echo '<script>alert ("name is required")</script>';
                            }
                            if (!preg_match("/[a-zA-Z]/", $firstname)) {
                                echo '<script> alert("firstname") </script> ';
                            }

                            $lastname = $_POST["lastname"];
                            if (empty($_POST["lastname"])) {

                                echo '<script>alert ("name is required")</script>';
                            }
                            if (!preg_match("/[a-zA-Z]/", $lastname)) {
                                echo '<script> alert("lastname") </script> ';
                            }
                            $username = $_POST["username"];
                            if (empty($_POST["usernname"])) {
                                echo '<script>alert ("username is required")</script>';
                            }

                            $resultset_1 = mysqli_query($conn, "select * from receptionist where firstname='" . $firstname . "' ");
                            $count = mysqli_num_rows($resultset_1);
                            die;   /* to turn off the connection*/
                            $resultset_2 = mysqli_query($conn, "select * from receptionist where lastname='" . $lastname . "' ");
                            $count = mysqli_num_rows($resultset_2);
                            die;   /* to turn off the connection*/
                            $resultset_3 = mysqli_query($conn, "select * from receptionist where username='" . $username . "' ");
                            $count = mysqli_num_rows($resultset_3);
                            die;   /* to turn off the connection*/
                            

                            if (!preg_match("/^[0-9a-zA-Z]+$/", $password)) {
                            $password = $_POST["password"];
                            if (empty($_POST["password"])) {
                                echo '<script>alert ("password is required")</script>';
                            }

                            $email = $_POST["email"];
                            if (empty($_POST["email"])) {
                                echo '<script>alert ("email is required")</script>';
                            }

                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                echo '<script>alert ("invalid email format")</script>';
                            }


                            $phonenumber = $_POST["phonenumber"];
                            if (empty($_POST["phonenumber"])) {
                                echo '<script>alert ("phone is required")</script>';
                            }

                            $address = $_POST["address"];
                            if (empty($_POST["address"])) {
                                echo '<script>alert ("address is required")</script>';
                            }

                            $resultset_4 = mysqli_query($conn, "select * from receptionist where address='" . $address . "' ");
                            $count = mysqli_num_rows($resultset_4);
                            die; 

                           $dateofbirth = $_POST["dateofbirth"];
                            if (empty($_POST["dateofbirth"])) {
                                echo '<script>alert ("dateofbirth is required")</script>';
                            }

                            $national_id = $_POST["national_id"];
                            if (empty($_POST["national_id"])) {
                                echo '<script>alert ("national_id is required")</script>';
                            }

                        

                            //something was posted
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $email = $_POST['email'];
                            $dateofbirth = $_POST['dateofbirth'];
                            $phonenumber = $_POST['phonenumber'];
                            $address = $_POST['address'];
                            $national_id = $_POST['national_id'];

                            if (!$conn) {
                                die("Connection Failed: " . mysqli_connect_error());
                            }
                            $sql = " INSERT INTO receptionist(firstname,lastname,username, password, email,dateofbirth,phonenumber, address, national_id)
                            VALUES ('$firstname','$lastname','$username','$password','$email','$dateofbirth','$phonenumber','$address','$national_id') ";

                            $result = mysqli_query($conn, $sql);
                        }

                    }
                        ?>

                        <form method="post">
                            <div class="row g-3">
                                <div class="col">
                                    First Name <input type="text" class="form-control" placeholder="First name" name="firstname" required>
                                </div>
                                <div class="col">
                                    Last Name <input type="text" class="form-control" placeholder="Last name" name="lastname" required>
                                </div>
                                <div class="col">
                                    Username <input type="text" class="form-control" placeholder="Username" name="username" required>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div class="col">
                                    Password <input type="password" class="form-control" placeholder="password" name="password" required>
                                </div>
                                <div class="col">
                                    Email <input type="email" class="form-control" placeholder="email" name="email" required>
                                </div>
                            </div>
                            <br>
                            <div class="mb-3">
                                Date of birth <input type="date" class="form-control" placeholder="Date of birth" name="dateofbirth" required>
                            </div>
                            <div class="mb-3">
                                Phone Number <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" required>
                            </div>
                            <div class="mb-3">
                                Address <input type="text" class="form-control" placeholder="Address" name="address" required>
                            </div>
                            <div class="mb-3">
                                National ID <input type="text" class="form-control" placeholder="National ID" name="national_id" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="submit" onclick="validateform()">Save </button>
                            </div>
                    </div>
                </div>


</body>

</html>