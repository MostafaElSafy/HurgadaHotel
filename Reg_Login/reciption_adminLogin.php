<?php

session_start();

include("../db_connect.php");
include("../functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {


        if ($_POST['email'] == 'admin@gmail.com' && $_POST['password'] == 'admin') {

            header("Location: ../Manager_view/Manager_view(QC).php");
        }
        else
        {

        //read from database
        $query = "select * from receptionist where email = '$email' limit 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: ../Receptionist_page/main_page.php");
                    die;
                }
            }
        }
    }
    } else {
        $logerr = " ";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!----login style sheet connect-->
    <link rel="stylesheet" href="signinStyles.css">

    <title>HurgadGrnd </title>


    <style>
        body {
            background-image: url(../assets/img/loginBG.jpg);
            background-color: #707070;
            background-size: cover;
            height: 100vh;
            align-items: center;
        }

        .wordSide {
            padding: 3%;
            color: whitesmoke;
            size: 10vw;
        }

        .formSide {
            color: #707070;

            background-color: whitesmoke;
            border-radius: 3%;
        }

        .form-control {
            width: 100%;
            border-color: #707070;
            border-radius: 0;
            border-top: none;
            border-left: none;
            border-right: none;
            background-color: whitesmoke;
        }

        .form-control:focus {
            box-shadow: none;
            background-color: whitesmoke;
            border-color: #707070;
        }
    </style>

</head>

<body class="d-flex align-items-center bb">

    <!------BIG- container-->

    <div class="container w-75 h-75 main d-flex justify-content-center ">

        <div class="row d-flex justify-content-center w-50 h-100 d-flex ">

            <!-------Words side----->

            <!-----form side--------->
            <div class="col justify-content-center align-items-center  formSide">


                <div class="row ">
                    <div class="col d-flex justify-content-center mb-4">
                        <img class="img-fluid" src="../assets/img/person-icon.png" alt="">
                    </div>
                </div>


                <div class="row mt-3">

                    <div class="col d-flex justify-content-center">

                        <form method="POST">
                            <h5 class="mb-2" style="font-weight: 700;">
                                Sign In
                            </h5>



                            <div class="mb-3 mt-4">
                                <label for="exampleInputEmail1" class="form-label small">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1">

                            </div>

                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label small">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">


                            </div>


                            <div class="row">

                                <div class="col d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-lg " value="login" style="padding: 0.5%; padding-left: 9%; padding-right: 9%;">Sign in</button>
                                </div>

                            </div>


                    </div>


                    </form>



                </div>
            </div>



        </div>



    </div>



    </div>








</body>

</html>