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
  <!--top nav style-->
  <link rel="stylesheet" type="text/css" href="Manager_styles.css">
  <link rel="stylesheet" type="text/css" href="stars.css">
  <link rel="stylesheet" href="../assets/css/MainStyles.css">
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
        <div class="container" >
          <h6 class="text-center">Number of people rated a specific product 5 stars</h6>
          <canvas id="barChart" width="250" height="250" ></canvas>
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
        <h6>The Product</h6> ....
        <!--DATABASE-->
        
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
      </div>
    </div>
    <br>

    <!-- Or let Bootstrap automatically handle the layout -->

    <div class="row">

      <div class="col bg-dark text-white">
      <h4 class="mt-4"><img src='../assets/img/chat.png' class='img-responsive iconn3' > Guests Comments </h4>

        <label for="comment">Comments:</label>
        <textarea class="form-control" rows="2" id="comment" name="text" placeholder="write a comment here..."></textarea>
        <div class="d-flex justify-content-between mt-3">
          <button type="button" class="btn btn-info">
            Submit Comment
            <i class="fas fa-long-arrow-alt-right ms-1"></i>
          </button>

        </div>

      </div>
      <div class="col bg-dark text-white"></div>
      <div class="col bg-dark text-white">
        <h4 class="mt-5"><img src='../assets/img/report.png' class="icon" class='img-responsive iconn3' > General Reports</h4><br>
        <p>Most booked Room...</p></i>
        <p>Number of Guests cancelled...</p>
        <p>Number of Guests made edits...</p>

        <label for="comment">Comments:</label>
        <textarea class="form-control" rows="2" id="comment" name="text" placeholder="write a comment here..."></textarea>
        <div class="d-flex justify-content-between mt-3">
          <button type="button" class="btn btn-info">
            Submit Comment
          
          </button>

        </div>
      </div>
    </div>
  </div>


</body>

</html>