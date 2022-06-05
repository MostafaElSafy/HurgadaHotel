<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php
$conn = new mysqli("localhost","root","","hurghada_db");
if (!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}
$roomid=$_GET['updateid'];
$sql="SELECT * FROM rooms WHERE room_id=$roomid";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['room_id'];
$stay=$row['stay_duration'];
$price=$row['price'];
$type=$row['room_type'];
$view=$row['room_view'];
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $stay=$_POST['stay'];
    $price=$_POST['price'];
    $type=$_POST['type'];
    $view=$_POST['view'];
    $sql="UPDATE rooms SET room_id='$id' ,stay_duration='$stay',price='$price',room_type='$type',room_view='$view' WHERE room_id=$roomid";
    $result=mysqli_query($conn,$sql);
     if($result){
         //echo "updated successfully";
         header('location:main_page.php');
     }else{
         die(mysqli_error($conn));
     }
}
?>
<div class="container my-5">
<form method="post">
  <div class="mb-3">
    <label class="form-label">Room number</label>
    <input type="text" class="form-control" name="id" value=<?php echo $id;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Stay Duration</label>
    <input type="text" class="form-control" name="stay" value=<?php echo $stay;?>>
  </div> 
  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="price" value=<?php echo $price;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Room Type</label>
    <input type="text" class="form-control" name="type" value=<?php echo $type;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Room View</label>
    <input type="text" class="form-control" name="view" value=<?php echo $view;?>>
  </div>
  <button type="submit" class="btn btn-danger" name="canel">Cancel</button>
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
</div>

</body>
</html>
