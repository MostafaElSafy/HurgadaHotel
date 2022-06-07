<?php

session_start();
include("../db_connect.php");
include("../functions.php");

$pay=$_POST['paymentMethod'];

$room_id = $_SESSION['R_id'];
$guest_id= $_SESSION['g_id'] ;

$query = " INSERT INTO reserve(room_id,guest_id,payment,roompending)
VALUES ('$room_id','$guest_id','$_POST[paymentMethod]','pending') ";
mysqli_query($conn, $query);













header("Location: reservation.php");
die;
























?>