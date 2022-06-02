<?php
$conn = new mysqli("localhost","root","","hurghada_db");
if (!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}
 session_start();
if(isset($_POST['submit'])) {
    $sql="UPDATE rooms set stay='" . $_POST['stay_duration'] . "'reserved='" . $_POST['occupied'] . "' 'roomview='" . $_POST['room_view'] . "''roomtype='" . $_POST['room_type'] . "''money='" . $_POST['price'] . "'WHERE Id='" .  $_GET['roomid'] . "'";
 
    mysqli_query($conn,$sql);
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM rooms WHERE room_id='" . $_GET['roomid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update room Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
 
</div>
<form method="POST" action="main_page.php">
              <div class="row">
                <div class="col">
                <label class="form-label">Room number:</label>
                <input type="text" class="form-control" name="ID" value="<?php echo $row['roomid']; ?>">
                </div>
                <div class="col">
                <label class="form-label">Stay duration:</label>
                <input type="text" class="form-control" name="stay" value="<?php echo $row['stay'];  ?>">
                </div>
              </div>
              <div class="row">
                <div class="col">
                <label class="form-label">Occupied/Booked:</label>
                <div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">Empty</label>
                </div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">Booked</label>
                </div>
                <div class="col">
                <label class="form-label">Price:</label>
                <input type="text" class="form-control" name="price" value="<?php echo $row['money'];  ?>">
                </div>
              </div>  
              <div class="row">
                <div class="col">
                <label class="form-label">Room Type:</label>
                <input type="text" class="form-control" name="type" value="<?php echo $row['roomtype'];  ?>">
                </div>
                <div class="col">
                <label class="form-label">Room view:</label>
                <input type="text" class="form-control" name="view" value="<?php echo $row['roomview'];  ?>">
                </div>
                <input type="submit" name="submit" value="Submit" class="buttom">
              </div>  
            </form>

</body>
</html>