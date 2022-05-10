<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="hurghada_db";
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
/* 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

?> */