
<?php
session_start();
   include 'connect.php';
  
  $query="SELECT * FROM booking";
  $result= mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link rel="stylesheet" href="orderL.css">

     <style>
        #menu .items li:nth-child(6){
           border-left: 4px solid #fff;
               }
               #menu .items li:nth-child(5){
           border-left:none;
               } 
               #menu .items li:nth-child(4){
           border-left:none;
               }  
     </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <section id="menu">
    <div class="logo">
         <img src="pngTour.png" alt="" width="90px">
         <h3><i>Tour and Travel</i></h3>
      </div>

      <div class="items">
         <li >
            <a href="adminM.php"><i class="fa-solid fa-bars"></i>
            <span>Dashboard</span></a>
        </li>

        <li>
            <a href="customerL.php"><i class="fa-solid fa-person"></i>
            <span>Customer list</span></a>
        </li>
        <li>
            <a href="adminViewP.php"><i class="fa-solid fa-box-open fa-sm"></i></i>
            <span>Package list</span></a>
        </li>
        <li>
            <a href="packageL.php"><i class="fa-solid fa-box-open fa-sm"></i></i>
            <span>Add Package</span></a>
        </li>
        <li>
            <a href="deletP.php"><i class="fa-solid fa-box-open fa-sm"></i></i>
            <span>Delet Package</span></a>
        </li>
        <li>
            <a href="orderL.php"><i class="fa-solid fa-list"></i>
            <span>Order list</span></a>
        </li>
        <li>
            <a href=""><i class="fa-solid fa-comment"></i>
            <span>Messages</span></a>
        </li>
        <li>
            <a href="logout.php"><i class="fa-solid fa-circle-xmark"></i></i>
            <span>Logout</span></a>
        </li>

      </div>
</section>





    <section class="main">
    <div class="nav">
            <div class="p1">
                <div>
                    <i id="menu-btn" class="fa-solid fa-bars"></i>
                </div>
                <div class="search">
                  
                     <input type="text" placeholder="Search">
                </div>
            </div>

            <div class="profile">
            <i class="fa-solid fa-user fa-2xl"></i>
             <span class="admin" >
               <?php
              $x= $_SESSION['fname'];
             
                echo  $x ;
               
               
                ?>
             </span>
             <button style=" background:blueviolet; border-radius:7px; padding:5px 1rem ">
              <a href="profile.php" style="text-decoration:none; color:aliceblue">Profile</a></button>


            </div>
        </div>

       
        
           

        <div class="board">
            <table>
                <thead>
                    <tr>
                          <td> Name</td>
                          <td>Email</td>
                          <td>address</td>
                          <td> Location</td>
                          <td> Hotel</td>
                          <td>Guests Number</td>
                          <td>arrivals</td>
                          <td>leaving</td>
                    </tr>
                </thead>
                <tbody>
                  

                <tr>

<?php

 while($row= mysqli_fetch_assoc($result))
 {
?>

<td class="id"><?php echo $row['name'];
?></td>

<td class="type">
<?php ;
echo $row['email'];

?>
</td>

<td class="fname">
<?php ;
echo $row['address'];

?>
</td>

<td class="lname">
<?php ;
echo $row['location'];

?>
</td>
<td class="email">
<?php ;
echo $row['hotel'];

?>
</td>

<td class="email">
<?php ;
echo $row['guests'];

?>
</td>


<td class="email">
<?php ;
echo $row['arrivals'];

?>
</td>

<td class="email">
<?php ;
echo $row['leaving'];

?>
</td>

</tr>
<?php
}

?>



                </tbody>
            </table>
        </div>
    </section>
    <script>
        $('#menu-btn').click(function(){
          $('#menu').toggleClass("active");
        })
    </script>
</body>
</html>