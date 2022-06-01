<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Rooms</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../assets/css/MainStyles.css">
    <link rel="stylesheet" type="text/css" href="Manager_styles.css">
    <link rel="stylesheet" type="text/css" href="navBar.css">

    <!--Navigation Bar-->
    <?php
  include 'NavBar.html';

  ?>

</head>
<body>



<hr>


<div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">Welcome to Manager View!</h1>
                </div>
                </div>
                     
        </div>
                <hr>
                <?php
                $sql = "SELECT firstname, lastname , qc_id FROM qualitycontrol";
                    
                      $result = $conn->query($sql);

                      ?>
                <p class="row justify-content-md-center"class="mbr-text align-center pb-3 mbr-fonts-style display-6">
                    Manager Name: <?php echo $_POST['firstname']; ?><?php echo $_POST['lastname']; ?>
                    <br>
                    Manager ID: <?php echo $_POST['qc_id']; ?>
                  </p>
               
                      
                    
       
    </div>
    
</body>
</html>