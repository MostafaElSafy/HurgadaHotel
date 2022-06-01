
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

                        <button type="button" class="btn btn-secondary btn-lg px-2" data-bs-toggle="modal1" data-bs-target="#Modal1">
                            <img src="../assets/img/star-half.svg" style=" margin:4px ;" alt="">
                            Receptionist Rating
                        </button>

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
        <thead class="dark1">
            <tr>
                <th scope="col"></th>
                <th scope="col"> Receptionist ID</th>
                <th scope="col"> First Name</th>
                <th scope="col"> Last Name</th>
                <th scope="col"> Username </th>
                <th scope="col"> Password</th>
                <th scope="col">Email</th>
                <th scope="col"> Date of birth</th>
                <th scope="col"> Phone Number </th>
                <th scope="col"> Address </th>
                <th scope="col"> National ID</th>
                <th scope="col"> Action </th>
                <th scope="col"> Add Comments </th>

                <th scope="col"> </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row"> 1 </th>
                <td>0001</td>
                <td>Sandra </td>
                <td>Alex</td>
                <td>sandra_alex</td>
                <td>123</td>
                <td>@sandraalex</td>
                <td>5/2/1999</td>
                <td>01125111</td>
                <td>refaat st</td>
                <td>2625462845</td>
                <td>
                    <div class="btn btn-primary btn-sm">Enable</div>
                    <div class="btn btn-danger btn-sm px-3">Disbale</div>
                    <a href='#' title=''><img src='../assets/img/trash-fill.svg' class='img-responsive iconn3'></a>
                    <a href='#' title=''><img src='../assets/img/pencil.svg' class='img-responsive iconn3'></a>
                </td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>0002</td>
                <td>Aline </td>
                <td>Jason</td>
                <td>aline_jason</td>
                <td>264</td>
                <td>@alinejason</td>
                <td>5/9/1999</td>
                <td>01126511</td>
                <td>youssef sebaie st</td>
                <td>2622965445</td>
                <td>
                    <div class="btn btn-primary btn-sm">Enable</div>
                    <div class="btn btn-danger btn-sm px-3">Disable</div>
                    <a href='#' title=''><img src='../assets/img/trash-fill.svg' class='img-responsive iconn3'></a>
                    <a href='#' title=''><img src='../assets/img/pencil.svg' class='img-responsive iconn3'></a>
                </td>


            </tr>
            <tr>
                <th scope="row">3</th>
                <td>0003</td>
                <td>Youssef </td>
                <td> Samy </td>
                <td>youssef_samy</td>
                <td>289</td>
                <td>@youssefsamy</td>
                <td>11/10/1998</td>
                <td>01126511</td>
                <td> ahmed azmy st</td>
                <td>2681965547</td>
                <td>
                    <div class="btn btn-primary btn-sm">Enable</div>
                    <div class="btn btn-danger btn-sm px-3">Disbale</div>
                    <a href='#' title=''><img src='../assets/img/trash-fill.svg' class='img-responsive iconn3'></a>
                    <a href='#' title=''><img src='../assets/img/pencil.svg' class='img-responsive iconn3'></a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary"> Save </button>
    </div>




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

                        <form class="was-validated">

                            <div class="mb-3">
                                Receptionist ID <input type="text" class="form-control" placeholder="Receptionist ID" name="recepID" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="row g-3">
                                <div class="col">
                                    First Name <input type="text" class="form-control" placeholder="First name" name="fname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="col">
                                    Last Name <input type="text" class="form-control" placeholder="Last name" name="lname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="col">
                                    Username <input type="text" class="form-control" placeholder="Username" name="uname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div class="col">
                                    Password <input type="password" class="form-control" placeholder="password" name="password" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="col">
                                    Email <input type="email" class="form-control" placeholder="email" name="email" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <br>
                            <div class="mb-3">
                                Date of birth <input type="date" class="form-control" placeholder="Date of birth" name="dateofbirth" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="mb-3">
                                Phone Number <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="mb-3">
                                Address <input type="text" class="form-control" placeholder="Address" name="address" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                    <div class="mb-3">
                        National ID <input type="text" class="form-control" placeholder="National ID" name="nationalid" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            Role: <select class="form-select is-invalid" id="autoSizingSelect" name="role" required >
                                <option selected disabled value>Choose...</option>
                                <option value="0">Choose Manager or Receptionist</option>
                                <option value="1">Manager</option>
                                <option value="2">Receptionist</option>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>

                            </select>

                            <div class="col">
                                Comments <input type="comments" class="form-control" placeholder="comments" name="comments" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save </button>
                </div>
            </div>
        </div>
>>>>>>> c5eeb9856642019dc48b749ae54fe60120221377
</body>

</html>