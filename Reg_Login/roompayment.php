<?php
session_start();
include("../db_connect.php");
include("../functions.php");
?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!-- This code is to not show notice error in this page i use it instead of  isset function -->

<!-- to ignore el notice messages instead of -->

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Payment!</title>
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
          <a class="nav-link" href="logout.php">Logout</a>
        </span>
      </div>
    </div>
  </nav>


  <div class="container">
    <main>

      <div class="row">
        <div class="col-md-3 ">
          <button class=" btn btn-outline-primary backbutton rounded-pill " type="button " value="Go back!" onclick="history.back()">
            <span class="material-symbols-outlined ">
              arrow_back
            </span>
          </button>
        </div>

      </div>

      <form class="needs-validation mt-4" novalidate>

        <h4 class="mb-3 text-primary">Payment</h4>
        <hr>
        <div class="my-3">
          <div class="form-check">
            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
            <label class="form-check-label" for="credit">Credit card</label>
          </div>
          <div class="form-check">
            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
            <label class="form-check-label" for="debit">Debit card</label>
          </div>

        </div>

        <div class="row gy-3">
          <div class="col-md-6">
            <label for="cc-name" class="form-label">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>

          <div class="col-md-6">
            <label for="cc-number" class="form-label">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>

          <div class="col-md-3">
            <label for="cc-expiration" class="form-label">Expiration</label>
            <input type="date" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>

          <div class="col-md-3">
            <label for="cc-cvv" class="form-label">CVV</label>
            <input type="number" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>

        <hr class="my-4">
        <div class="row d-flex justify-content-center">
          <div class="col d-flex justify-content-center">
            <button class="w-25 btn btn-primary btn-lg mt-3 " type="submit">Pay Now!</button>
          </div>
        </div>

      </form>

  </div>
  </main>


  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>