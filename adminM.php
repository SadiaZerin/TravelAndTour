<?php
  session_start();
  $x = $_SESSION['fname'];
?>
<?php
   include 'connect.php';
  
  $query="SELECT * FROM user_t";
  $result= mysqli_query($con,$query);
?>
<?php
   include 'connect.php';
   $sql='SELECT * FROM user_t';
   $result1= mysqli_query($con,$sql);
   $customer[]=mysqli_num_rows($result1);
   

   $sql='SELECT * FROM booking';
   $result2= mysqli_query($con,$sql);
   $booking[]=mysqli_num_rows($result2);
   
   $sql='SELECT * FROM package';
   $result3= mysqli_query($con,$sql);
   $pac[]=mysqli_num_rows($result3);

   $sql='SELECT * FROM message';
   $result4= mysqli_query($con,$sql);
   $meg[]=mysqli_num_rows($result4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link rel="stylesheet" href="adminM.css">

     
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
            <i class="fa-solid fa-user fa-2xl"><a href="last.php"></a></i>
             <span class="admin"  >
              <?php
              echo $x;
              ?>
             </span>
             <button style=" background:blueviolet; border-radius:8px; padding:5px 1rem ">
              <a href="profile.php" style="text-decoration:none; color:whitesmoke">Profile</a></button>

            </div>
        </div>






        <h2 class="size">Dashboard</h2>
        <div class="values">
            <div class="val-box">
            <i class="fa-solid fa-user fa-2xl"></i>
            <div>
            <?php
                          if(isset($customer)){
                            foreach($customer as $customer){
                              echo '<h2>'.$customer.'</h2>';
                            }
                        }
                        ?>
                <span>customer</span>
            </div>
            </div>

            <div class="val-box">
            <i class="fa-solid fa-user fa-2xl"></i>
            <div>
            <?php
                          if(isset($booking)){
                            foreach($booking as $booking){
                              echo '<h2>'.$booking.'</h2>';
                            }
                        }
                        ?>
                <span>Booking</span>
            </div>
            </div>

            <div class="val-box">
            <i class="fa-solid fa-user fa-2xl"></i>
            <div>
            <?php
                          if(isset($pac)){
                            foreach($pac as $pac){
                              echo '<h2>'.$pac.'</h2>';
                            }
                        }
                        ?>
                <span>Package</span>
            </div>
            </div>

            <div class="val-box">
            <i class="fa-solid fa-user fa-2xl"></i>
            <div>
            <?php
                          if(isset($meg)){
                            foreach($meg as $meg){
                              echo '<h2>'.$meg.'</h2>';
                            }
                        }
                        ?>
                <span>Messages</span>
            </div>
            </div>
        </div>





        <div class="board">
            <table>
                <thead>
                    <tr>
                          <td>User Id</td>
                          <td>User Type</td>
                          <td> First Name</td>
                          <td> Last Name</td>
                          <td> Email</td>
                    </tr>
                </thead>
                <tbody>
                  

                <tr>

<?php

 while($row= mysqli_fetch_assoc($result))
 {
?>

<td class="id"><?php echo $row['ID'];
?></td>

<td class="type">
<?php ;
echo $row['usertype'];

?>
</td>

<td class="fname">
<?php ;
echo $row['fname'];

?>
</td>

<td class="lname">
<?php ;
echo $row['lname'];

?>
</td>
<td class="email">
<?php ;
echo $row['email'];

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