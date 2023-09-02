<?php
  include 'connect.php';

  
     $Pname=$_GET["id"];

     $query = "DELETE FROM package WHERE pID='$Pname'";
      $result= mysqli_query($con,$query);
     
     header("Location: http://localhost/finalproject/deletP.php");
  
?>