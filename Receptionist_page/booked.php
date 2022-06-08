<?php
$conn = new mysqli("localhost","root","","hurghada_db");
if (!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}
if(isset($_GET['id2']))
{
    $id3=$_GET['id2'];
    $query="UPDATE rooms SET occupied='1' WHERE room_id='$id3' ";
    $result2=mysqli_query($conn,$query);
    if($result2){
        //echo "deleted successfully";
       header('location:main_page.php');//baynfez el function bat3tna w barg3 ll el page el 3ayez aro7ha w bay3mel refresh ll el page
    }else{
        die(mysqli_error($conn));
    }
}
?>