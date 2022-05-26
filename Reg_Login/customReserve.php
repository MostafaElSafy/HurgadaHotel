<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="reservation.css">
    <title>Hello, world!</title>
</head>

<body>

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
        <div class="row">
            <div class="col-md-3 ">
                <button class=" btn btn-outline-primary backbutton rounded-pill " type="button " value="Go back!" onclick="history.back()">
                <span class="material-symbols-outlined ">
                        arrow_back
                 </span>
                       </button>
            </div>

        </div>
        <div class="row">
            <h2 class="mt-3">
                What's Your plan ?
            </h2>
        </div>

        <form method="POST" class="row g-3 mt-2">

            <label for="exampleFormControlTextarea1" class="form-label d-flex justify-content-center">Please Specify Your order below and our recipionist will contact you</label>

            <div class="mb-3 col-md-12  d-flex justify-content-center ">
                <textarea class="form-control d-flex justify-content-center" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>



            <div class="col-md-12  mt-2 d-flex justify-content-center" style="margin-right: 7%;">
                <button type="submit" class="btn btn-primary rounded-pill">Check Availabillity</button>
            </div>



        </form>
















        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>