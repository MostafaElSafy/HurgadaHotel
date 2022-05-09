<?php include_once 'db_connect.php'?>


<?php
$usr = $_POST['username'];
$pass = $_POST['password'];

$sql = " INSERT INTO users(username,password) VALUES ('$usr','$pass') "; /* Query 3shan tgeb kolo */
mysqli_query($conn, $sql);  /* btwsl el querey bl database */

header("Location: merg.php")



?>