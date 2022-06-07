<?php
session_start();

include("../db_connect.php");
include("../functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $fn = $_POST['firstName'];
    $ln = $_POST['lastName'];
    $dof = $_POST['dof'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $famCount = $_POST['familyCount'];
    $nationality = $_POST['nationality'];
    $guest_id;



 /* if ($_SERVER["REQUEST_METHOD"] == "POST") {



    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
       $passerr= "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    } else {
       $passgood = 'Strong password.';
    }


 } */




    if (!empty($email) && !empty($phone)) {

        //save to database
        $guest_id = random_num(20);
        //$_SESSION['g_id'] =  $guest_id;
        $query = " INSERT INTO guest(firstname,lastname,email,password,dateofbirth,extramembers,guest_id,phonenumber,nationality)
        VALUES ('$fn','$ln','$email','$pass','$dof','$famCount','$guest_id','$phone','$nationality') ";
        mysqli_query($conn, $query);

        header("Location: signin.php");
        die;
    } else {

        $message = " Didnt write to database";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hurghada Hotel</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../assets/css/MainStyles.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-image:url('../assets/img/registerBg.jpg')">
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">


                    <!--------------------------------  left side  ya shbab------------------------->
                    <div class="col-md-5 ">
                        <div class="booking-cta">
                            <h1>Hurghada Grand Hotel</h1>
                            <p>Welcome to Hurghada Grand hotel, make yourself comfortable, and get excited for the best Vacation you will ever have. </p>
                        </div>
                    </div>
                    <!---------------------------- right side(form) ----------------------------->
                    <div class="col-md-7 ">
                        <div class="booking-form">
                            <form method="POST">
                                <!-- ///////////////////////////////Personal Data //////////////////////////// -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">First name</span>
                                            <input class="form-control" type="text" name="firstName" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Last name</span>
                                            <input class="form-control" type="text" name="lastName" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Date of Birth</span>
                                            <input class="form-control" type="date" name="dof" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Phone</span>
                                            <input type="text" pattern="[0][0-9]{10}" class="form-control" name="phone"
                                             oninvalid="this.setCustomValidity('please enter a valid phone number')" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- ///////////////////////////////////Email and passwords////////////////////////////////// -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Email</span>
                                            <input class="form-control" type="email" name="email" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Password</span>
                                            <input class="form-control" type="password"
                                             name="password"
                                             required>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Confirm password</span>
                                            <input class="form-control" type="password" name="cpassword" required>
                                        </div>
                                    </div>

                                    <!--///////////////////////////////// family members ////////////////////-->

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label flex-wrap">Family Count</span>
                                            <select class="form-control" name="familyCount">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label flex-wrap">Nationality</span>
                                            <input class="form-control" type="text" name="nationality" required>

                                        </div>
                                    </div>



                                </div>

                                <div class="row">

                                    <div class="col-sm-3 mx-3">
                                        <div class="form-btn">
                                            <button type="submit" name="submit" class="submit-btn" style="margin-left: 5%;">Sign Up</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 d-flex float-end flex-nowrap  mt-4">
                                        <div class="text-muted text-sm-start">

                                        </div>
                                    </div>

                                    <div class="col-sm-6 d-flex float-end flex-nowrap  mt-4">
                                        <div class="text-muted text-sm-start">
                                            Already have an account? <a href="signin.php">Sign in</a>
                                        </div>
                                    </div>

                                </div>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






</body>

</html>