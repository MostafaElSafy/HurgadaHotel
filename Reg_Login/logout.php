<?php

session_start();

if(isset($_SESSION['user_id'])) // if session have value inside it
{
	unset($_SESSION['user_id']); // bnremove el gowaha
}
header("Location: signin.php"); // w bnrg3 lel login php
die;

