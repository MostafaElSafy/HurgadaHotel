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
    <!--top nav style-->
    <link rel="stylesheet" type="text/css" href="Manager_styles.css">
    <link rel="stylesheet" href="../assets/css/MainStyles.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Manager_styles.css">

</head>


<body>
<!--<div class="background-image">
    <div class="container">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="Manager_view(QC).php">Home</a>
            <a href="Manage_Rooms.php">Manage Rooms</a>
            <a href="Manage_Receptionist.php">Manage Receptionist</a>
            <a href="Manage_request.php">Manage Request</a>
        </div>
-->
        <div id="main">

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
                document.body.style.backgroundColor = "white";
            }
        </script>

<!--
    </div>
    <div class="MainPage">
        <h1>Manager View</h1>

    </div>-->
    

                    
</body>

</html>
</body>

</html>