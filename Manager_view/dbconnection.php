<?php

// Create connection
$conn = mysqli_connect("localhost" , "username" , " " , "hurghada_db");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>