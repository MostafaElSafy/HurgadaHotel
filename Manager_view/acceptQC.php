<?php
 $conn = new mysqli("localhost","root","","hurghada_db");
 if (!$conn){
   die("Connection Failed: " . mysqli_connect_error());
 }

 if(isset($_GET['acceptid']))
 {
     $id=$_GET['acceptid'];
     $sql="UPDATE guest SET state='active' WHERE guest_id='$id' ";
     $result=mysqli_query($conn,$sql);
     if($result){
         //echo "deleted successfully";
         header('location:Manage_Request.php');//baynfez el function bat3tna w barg3 ll el page el 3ayez aro7ha w bay3mel refresh ll el page
     }else{
         die(mysqli_error($conn));
     }
 }
?>
