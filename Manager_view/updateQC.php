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
$receptionist_id=$_GET['updateid'];
$sql="SELECT * FROM receptionist WHERE receptionist_id = $receptionist_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$receptionist_id=$row['receptionist_id'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];
$password=$row['password'];
$email=$row['email'];
$dateofbirth=$row['dateofbirth'];
$phonenumber=$row['phonenumber'];
$address=$row['address'];
$national_id=$row['national_id'];


if(isset($_POST['submit'])){
    $receptionist_id=$_POST['receptionist_id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $dateofbirth=$_POST['dateofbirth'];
    $phonenumber=$_POST['phonenumber'];
    $address=$_POST['address'];
    $national_id=$_POST['national_id'];

    $sql="UPDATE receptionist SET receptionist_id='$receptionist_id' ,firstname='$firstname',lastname='$lastname',username='$username',password='$password',email='$email',dateofbirth='$dateofbirth',phonenumber='$phonenumber',address='$address',national_id='$national_id' WHERE receptionist_id=$receptionist_id";
    $result=mysqli_query($conn,$sql);
     if($result){
         //echo "updated successfully";
         header('location:Manage_Receptionist.php');
     }else{
         die(mysqli_error($conn));
     }
}
?>
<div class="container my-5">
<form method="post">
  <div class="mb-3">
    <label class="form-label">Receptionist ID</label>
    <input type="text" class="form-control" name="receptionist_id" value=<?php echo $receptionist_id;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" name="firstname" value=<?php echo $firstname;?>>
  </div> 
  <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lastname" value=<?php echo $lastname;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" class="form-control" name="username" value=<?php echo $username;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" name="password" value=<?php echo $password;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">E-mail</label>
    <input type="text" class="form-control" name="email" value=<?php echo $email;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Date of Birth</label>
    <input type="text" class="form-control" name="dateofbirth" value=<?php echo $dateofbirth;?>>
  </div> 
  <div class="mb-3">
    <label class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phonenumber" value=<?php echo $phonenumber;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value=<?php echo $address;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">National_id</label>
    <input type="text" class="form-control" name="national_id" value=<?php echo $national_id;?>>
  </div>
  <button type="submit" class="btn btn-danger" name="canel">Cancel</button>
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
</div>

</body>
</html>
