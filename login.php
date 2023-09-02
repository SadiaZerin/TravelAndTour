<?php
session_start();

include 'connect.php';

if(isset($_POST["submit"])){
    $usertype=$_POST["usertype"];
   $fname= $_POST["fname"];
   $email= mysqli_real_escape_string($con,$_POST["email"]);
   $pass= $_POST["password"];
  
 

   $query = "SELECT * FROM user_t WHERE email='$email'&& password='$pass'";
   $result= mysqli_query($con,$query);
   $row=mysqli_fetch_array( $result);

   if(mysqli_num_rows($result)==0){
      $x[]="User doesn't exist";
     
   }
   else if( $usertype == 'customer'){
    $_SESSION['fname']=$fname;
    $_SESSION['usertype']=$usertype;
    
       header("location:home.php");
   }
   
   else{
    $_SESSION['fname']=$fname;
  
    $_SESSION['usertype']=$usertype;
   
    header('location:adminM.php');
   }

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">


    <style>
        input[name=fname]{
    padding: 7px 7px;
    border: none;
    border-radius: 5px;
    background-color: transparent !important;
    border: 2px solid greenyellow !important;

    height: 20px;
    width: 17vw;
}

input[name=fname]:hover{
    transform: scale(1.1);
    transition: 0.3s;
    border:2px solid aqua;
}
input[placeholder=First_name]{
    
    color:white;
}
@media(max-width:800px){
    
    input[name=fname]{
    
        height: 20px;
        width: 35vw;
    }
}

@media(max-width:400px){

    input[name=fname]{
        height: 20px;
        width: 35vw;
    }
   

}

.innerbox{
    border: 1px solid whitesmoke;
    height: 105vh;
    width: 20vw;
    padding:70px 50px;
    border-radius: 5px;
    box-shadow: 2px 5px  15px rgb(81, 243, 105);
    background-color: rgba(0, 0, 0, 0.369);
    margin-top: 50px;
    margin-bottom: 40px;
   
}


    </style>
</head>




<body>


 <div class="container">
    <div class="box1">
        <img src="green.jpg" >
    </div>
      
    <div class="box2">
        <div class="innerbox" >
           
        <form action="" method="POST">
                  
            <h1>LOGIN</h1>
            <?php
              if(isset($x)){
                  foreach($x as $x){
                    echo '<span class="error-msg">'.$x.'</span>';
                  }
              }
            ?>


            
            <span>Select Usertype</span><br>
                <select name="usertype" style="background-color:#2fea4b; height:30px; width:18vw">
                    <option value="customer">Customer</option>
                   
                   
                    <option value="Admin">Admin</option>
                </select><br>


                <span>Enter Your First Name</span><br>
                <input type="text" name="fname" placeholder="First_Name" required><br>

                <span>Enter Your Email</span><br>
                <input type="text" name="email" placeholder="Email" required><br>

                <span>Enter Your Password</span><br>
                <input type="password" name="password" placeholder="Password" required><br>

              
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>


</div>
</body>
</html>