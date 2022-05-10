<?php include_once '../db_connect.php'?>

<?php
$fn = $_POST['firstName'];
$ln = $_POST['lastName'];
$dof = $_POST['dof'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['password'];
$famCount = $_POST['familyCount'];
$nationality = $_POST['nationality'];
$guest_id;


$sql = " INSERT INTO guest(firstname,lastname,email,password,dateofbirth,extramembers,guest_id,phonenumber,nationality) 
VALUES ('$fn','$ln','$email','$pass','$dof','$famCount','$guest_id','$phone','$nationality') "; 

$results = mysqli_query($conn, $sql);  /* btwsl el querey bl database */


if (mysqli_num_rows($results) == 0) {
 echo " query error";
} else {
    echo " query tmam";
}

header("Location: index.php");

?>