  <!--Ajax-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <?php
    session_start();

    include("../db_connect.php");
    include("../functions.php");
?>
<?php

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
        $sanitizedfn=filter_var($fn,FILTER_SANITIZE_STRING);
        $sanitizedln=filter_var($ln,FILTER_SANITIZE_STRING);
        $sanitizedDuration=filter_var($dof,FILTER_SANITIZE_NUMBER_INT);
        $sanitizedPhone=filter_var($phone,FILTER_SANITIZE_NUMBER_INT);
        $sanitizedemail=filter_var($email,FILTER_SANITIZE_EMAIL);
        $sanitizedpass=filter_var($pass,FILTER_SANITIZE_STRING);
        $sanitizednationality=filter_var($nationality,FILTER_SANITIZE_STRING);
        if (filter_var($sanitizedemail, FILTER_VALIDATE_EMAIL)!==false){
            /* preg match: Perform a regular expression match */
            /*validation on firstname*/

                if (!empty($email) && !empty($phone)) {

                    //save to database
                    $guest_id = random_num(6);
                    //$_SESSION['g_id'] =  $guest_id;
                    $query = " INSERT INTO guest(firstname,lastname,email,password,dateofbirth,extramembers,guest_id,phonenumber,nationality,state)
                VALUES ('$fn','$ln','$email','$pass','$dof','$famCount','$guest_id','$phone','$nationality','disable') ";
                    mysqli_query($conn, $query);

                    header("Location: signin.php");
                    die;
                } else {

                    $message = " Didn't write to database";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }else{
                echo'<div class="alert alert-danger" role="alert">
                Eror in data you enter
              </div>';
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

                      <!--required inside the form: meaning we can't submit the sign or sign in page without filling this field-->
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
                                              <input type="text" class="form-control" name="phone" required>
                                          </div>

                                      </div>
                                  </div>
                                  <!-- ///////////////////////////////////Email and passwords////////////////////////////////// -->
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <span class="form-label">Email</span>
                                              <input class="form-control" type="" name="email" required>
                                          </div>
                                      </div>

                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <span class="form-label">Password</span>
                                              <input class="form-control" type="password" name="password" id="pass" required>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <span class="form-label">Confirm password</span>
                                              <input class="form-control" type="password" name="cpassword" id="cpass" required>
                                          </div>
                                      </div>
                                      <script type="text/javascript">
                                          function Validate() {
                                              var password = document.getElementById("pass").value;
                                              var confirmPassword = document.getElementById("cpass").value;
                                              if (password != confirmPassword) {
                                                  alert("Password Unmatch");
                                                  return false;
                                              }
                                              return true;
                                          }
                                      </script>
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
                                              <button type="submit" name="submit" class="submit-btn" style="margin-left: 5%;" onclick="return Validate()">Sign Up</button>
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