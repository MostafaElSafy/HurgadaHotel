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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Manager_styles.css">
    <link rel="stylesheet" href="../assets/css/MainStyles.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
  
   

</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
  <a href="Manager_view(QC).php">Home</a>
    <a href="Manage_Rooms.php">Manage Rooms</a>
    <a href="Manage_Receptionist.php">Manage Receptionist</a>
    <a href="Manage_request.php">Manage Request</a>
  </div>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
  /* open */
function openNav() {
  document.getElementById("myNav").style.display = "block";
}

/* Close */
function closeNav() {
  document.getElementById("myNav").style.display = "none";
}

</script>

<style>
div {
  border: 4px solid #ade8f4;
  padding: 200px;
  
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: #023e8a;

}

p {
  text-indent: 50px;
  text-align: center;
  letter-spacing: 3px;
}

a {
  text-decoration: none;
  color: #023e8a;
}
</style>

<div>
  <h1 class="basicfont">Manager View</h1>
  <p class="basicfont">Manager Name: </p>
  <p class="basicfont">ID: </p>
</div>

</body>

</html>