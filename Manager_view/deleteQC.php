<?php
 $conn = new mysqli("localhost","root","","hurghada_db");
 if (!$conn){
   die("Connection Failed: " . mysqli_connect_error());
 }
 if(isset($_GET['deleteid']))
 {
     $receptionist_id=$_GET['deleteid'];
     $sql="DELETE FROM receptionist WHERE receptionist_id=$receptionist_id";
     $result=mysqli_query($conn,$sql);
     if($result){
         //echo "deleted successfully";
         header('location:Manage_Receptionist.php');
     }else{
         die(mysqli_error($conn));
     }
 }

?>