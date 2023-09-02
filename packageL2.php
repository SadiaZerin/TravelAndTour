<?php
  include 'connect.php';

  if(isset($_POST["check-submit-button"])){
     $Pname=$_POST["Pakage-name"];

     $query = "SELECT * FROM package WHERE Pname='$Pname'";
      $result1= mysqli_query($con,$query);
     

      if(mysqli_num_rows($result1)>0){
         echo "Package is already existed!!!";
        
      }
      else{
        
        echo "valid";
      }
     
  }
?>