<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manager View</title>
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="bower_components/sweetalert2/dist/sweetalert2.min.css">
  <!--top nav style-->
  <link rel="stylesheet" type="text/css" href="Manager_styles.css">
  <link rel="stylesheet" type="text/css" href="stars.css">
  <link rel="stylesheet" href="../assets/css/MainStyles.css">
  <link rel="stylesheet" type="text/css" href="navBar.css">
  <!--Charts-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.js"></script>
  <?php
  include 'NavBar.html';
 
  ?>

</head>

<body>
  <hr>
  <div class="container-fluid mt-3">

    <!-- Control the column width, and how they should appear on different devices -->


    <div class="row">

      <div class="col-sm-4 ">
        <h2 class="text-center">CHART</h2>
        <div class="container">
          <h6 class="text-center">Number of people rated a specific product 5 stars</h6>
          <canvas id="barChart" width="250" height="250"></canvas>
        </div>
        <script>
          jQuery(document).ready(function() {
            var chartDiv = $("#barChart");
            var myChart = new Chart(chartDiv, {
              type: 'pie',
              data: {
                labels: ["Toiletries", "Personal Care", "Bathrobs & Slippers", "Coffee Kit"],
                datasets: [{
                  data: [21, 39, 10, 14],
                  backgroundColor: [
                    "#FF6384",
                    "#4BC0C0",
                    "#FFCE56",
                    "#E7E9ED"
                  ]
                }]
              },
              options: {
                title: {
                  display: true,
                  text: '5 Stars rated Products'
                },
                responsive: true,
                maintainAspectRatio: false,
              }
            });
          });
        </script>

         <!--BATABASE CONNECTION-->

         <?php
                     /* $sql = "SELECT product FROM rooms"; //we need to add products in rooms that is rated by the guests
                    
                      $result = $conn->query($sql);
                      while($row = mysqli_fetch_object($result)){ */
                      ?>
        <h6>The Product</h6>  <?php //echo $_POST['product'];  ?>
        

        <p>is the product that got the highest rate by Most of our guests</p>
      </div>
      <div class="col-sm-3"></div>
      <div class="col-sm-4 ">
        <h2>PRODUCTS RATINGS</h2>
        <h6>choose rating to view Number of guests and their ratings...</h6>


        <div class="rate">

          <input type="radio" id="star5" name="rate" value="5" />
          <label for="star5" title="text">5 stars</label>
          <input type="radio" id="star4" name="rate" value="4" />
          <label for="star4" title="text">4 stars</label>
          <input type="radio" id="star3" name="rate" value="3" />
          <label for="star3" title="text">3 stars</label>
          <input type="radio" id="star2" name="rate" value="2" />
          <label for="star2" title="text">2 stars</label>
          <input type="radio" id="star1" name="rate" value="1" />
          <label for="star1" title="text">1 star</label>
        </div>
        <button type="button" class="btn btn-outline-info" onclick="display()">Display Data</button>
        <div id="result"></div>
      </div>
    </div>
    <script>
      function display() {

        if (document.getElementById('star5').checked) {
          document.getElementById("result").innerHTML = document.getElementById("star5").value +
            " star checked"
            <?php      ?>
            ;
        } else if (document.getElementById('star4').checked) {
          document.getElementById("result").innerHTML = document.getElementById("star4").value +
            " stars checked"
            <?php      ?>
            ;
        } else if (document.getElementById('star3').checked) {
          document.getElementById("result").innerHTML = document.getElementById("star3").value +
            " stars checked"
            <?php      ?>
            ;
        } else if (document.getElementById('star2').checked) {
          document.getElementById("result").innerHTML = document.getElementById("star2").value +
            " stars checked"
            <?php      ?>
            ;
        } else if (document.getElementById('star1').checked) {
          document.getElementById("result").innerHTML = document.getElementById("star1").value +
            " stars checked"
            <?php      ?>
            ;
        } else {
          document.getElementById("disp").innerHTML = "No one selected";
        }
      }
    </script>
    <br>

    <!-- Or let Bootstrap automatically handle the layout -->
    <style>
      .link-muted {
        color: #aaa;
      }

      .link-muted:hover {
        color: #1266f1;
      }
    </style>
    <div class="row">
      <div class="col-md-8 text-white bg-primary">
        <div class="container my-1 py-1">
          <h4 class="mt-5"><img src='../assets/img/chat.png' class='img-responsive iconn3'> Guests Comments </h4>
          <hr>
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10">
              <div class="card text-dark">
                <div class="card-body p-4">
                  <h4 class="mb-0">Recent comments</h4>
                  <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
                  <div class="d-flex flex-start">
                    <div>


                      <!--BATABASE CONNECTION-->

                      <?php
                     /* $sql = "SELECT guest_id , comments FROM ratingandreviews";
                    
                      $result = $conn->query($sql);
                      while($row = mysqli_fetch_object($result)){ */
                      ?>


                      <h6 class="fw-bold mb-1"><?php // echo $row->guest_id;?></h6>
                      <div class="d-flex align-items-center mb-3">
                        <p class="mb-0">
                          <span class="badge bg-success">submitted</span>
                        </p>

                      </div>
                      <p class="mb-0">
                        <?php //echo $row->comments;?>
                      </p>
                      <a href="#!" class="d-flex align-items-center me-3">
                        <i class="far fa-comment-dots me-2"></i>
                        <p class="mb-0">Comment</p>
                      </a>
                      <?php // } ?>
                    </div>
                  </div>
                </div>
                
                <hr class="my-0" />
              </div>
            </div>
          </div>
         
          <hr>
          <label class="form-label" for="addANote" style="color: white;">+ Add a note</label>
          <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
          <div class="d-flex justify-content-between mt-3">
            <button type="button" class="btn btn-info">
              Submit Comment
              <i class="fas fa-long-arrow-alt-right ms-1"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 text-white bg-primary">
        <h4 class="mt-5"><img src='../assets/img/report.png' class="icon" class='img-responsive iconn3'> General Reports</h4>
        <hr>

        
                      <!--BATABASE CONNECTION-->

                      <?php
                     /* $sql = "SELECT * FROM editsandcancellation";  //han3ml table esmo edits and cancellation a hane7sb count total cancelled times and edits
                                                                      //most booked room through database 
                      $result = $conn->query($sql);                     
                      while($row = mysqli_fetch_object($result)){ */
                      ?>

        <p>Most booked Room </p>       <?php     ?></i>  
        <p>Number of Guests cancelled  <?php     ?></p>
        <p>Number of Guests made edits <?php     ?></p>
        <hr>
        <div class="form-outline mb-4">
          <label class="form-label" for="addANote" style="color: white;">+ Add a note</label>
          <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
        </div>
        <button type="button" class="btn btn-info">
        
        <!--<script>
                swal({
          title: 'Are you sure you want to submit this comment?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, submit it!'
        }).then(function () {
          swal(
            'Message Submitted!',
            'success'
          )
        })
        </script>-->
          Submit Comment
        </button>

       
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>