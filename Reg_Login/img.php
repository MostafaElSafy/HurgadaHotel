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
                    <a class="nav-link" href="logout.php">Logout</a>
                </span>
            </div>
        </div>
    </nav>



    <div class="container mt-1">

    <div class="row mb-2">
        <div class="col-md-3 mb-2 ">
          <button class=" btn btn-outline-primary backbutton rounded-pill " type="button " value="Go back!" onclick="history.back()">
            <span class="material-symbols-outlined ">
              arrow_back
            </span>
          </button>
        </div>

      </div>
        <h2 class="mb-4">Please Upload each guest national ID if there any.</h2>

        <form action="upload.php" method="post" enctype="multipart/form-data">


            <div class="mb-1 mt-2">

                <input class="form-control" name="my_image" type="file" id="formFile">
            </div>


            <?php if (isset($_GET['error'])) : ?>
                <p><?php echo $_GET['error']; ?></p>
            <?php endif ?>


            <div class="row">
                <div class="col d-flex justify-content-center ">


                    <input class="btn btn-primary mx-2" type="submit" name="submit" value="Upload">

                    <a class="btn btn-outline-success" href="roompayment.php" role="button">Proceed to Checkout</a>

                </div>
            </div>



        </form>



    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>