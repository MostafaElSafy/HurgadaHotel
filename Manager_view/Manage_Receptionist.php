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
function openNav() {
  document.getElementById("myNav").style.display = "block";
}

function closeNav() {
  document.getElementById("myNav").style.display = "none";
}
</script>
<style>
div {
  border: 1px solid #ade8f4;
  padding: 8px;
  text-align: center;
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
  text-align: center;
}

</style>

  <div>
    <h1 style="color:black; text-align: center;"> Manage Receptionist </h1>
  </div>
    <!--<form method="POST" action="Manage_Receptionist.php">
    Name: <input type="text" name="name">
      <br>
    Email : <input type="text" name="email">
      <br>
    Phone Number :<input type="text" name="phone number">
     <br>
     Address:<input type="text" name="address">
     <br>
    National ID:<input type="text" name="national id">
     <br>
    Gender: 
<select gender="gender" name="gender">
<option value="0" > Select your gender </option>
<option value="1" > Male</option>
<option value ="2" > Female</option>
</select>
<br>-->

    <!-- Tab links for Tables -->
    <div class="tab" style=" text-align: center;">
      <button class="tablinks" onclick="openTable(event, 'C_Nuser')" >Create New Receptionist User</button>
      <button class="tablinks" onclick="openTable(event, 'EnableDisable')">Enable and Disable Receptionist Accounts</button>
      <button class="tablinks" onclick="openTable(event, 'Recep_Rating')">Show Receptionist Rating</button>
    </div>

     <!-- Button to create new user -->
    <div id="C_Nuser" class="tabcontent">
      <h3 style="color:#0077b6;">Create New Receptionist User</h3>

<style>
fieldset {
  background-color: #eeeeee;
}

legend {
  background-color:#ade8f4;
  color: grey;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
</style>
</head>

<form action="Manage_Receptionist.php">
 <fieldset>
  <legend>Personalia:</legend>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday"><br><br>
  <label for="address">Address:</label>
  <input type="address" id="address" name="address"><br><br>
  <label for="National ID">National ID:</label>
  <input type="National ID" id="National ID" name="National ID"><br><br>
  Gender: 
<select gender="gender" name="gender">
<option value="0" > Select your gender </option>
<option value="1" > Male</option>
<option value ="2" > Female</option>
</select>
  
  <input type="submit" value="Submit">
 </fieldset>
</form>
    </div>

    <!-- Button to create enable and disable receprionist user -->
    <div id="EnableDisable" class="tabcontent">
      <h3 style="color:black;">Enable and Disable Receptionist Accounts</h3>
    </div>

    <!-- Button to show receprionist rating above 3.7 -->
    <div id="Recep_Rating" class="tabcontent">
      <h3 style="color:black;">Show Receptionist Rating</h3>
    </div>


<!--//////////////// Open table function /////////////////////-->

<script>
      function openTable(evt, Table) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(Table).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>

</body>
</html>