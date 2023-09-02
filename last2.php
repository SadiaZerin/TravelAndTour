

<?php

   include 'connect.php';
   if(isset($_POST["form_submitted"])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $tell=$_POST['tell'];


	


	if($con===false){
		die("ERROR: could not connect." . mysqli_connect_error());
	}

   $sql  = "INSERT INTO message (fname,lname,email,phone,tell) VALUES ('$fname','$lname','$email','$phone','$tell')";

	if(mysqli_query($con, $sql))
	{
		echo "Records added successfully.";
	} else{
		echo "ERROR: could not able to execute $sql." . mysqli_error($con);
	}
}

	mysqli_close($con);
?>
