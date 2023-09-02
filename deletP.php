
<?php
session_start();
   include 'connect.php';
  
  $query="SELECT * FROM package";
  $result= mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link rel="stylesheet" href="deletP.css">
    
     <style>
        #menu .items li:nth-child(5){
           border-left: 4px solid #fff;
               }
               #menu .items li:nth-child(4){
           border-left:none;
               }  
     </style>
     
</head>
<body>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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
             <button style=" background:blueviolet; border-radius:6px; padding:5px 1rem ">
              <a href="" style="text-decoration:none; color:white ">Profile</a></button>


            </div>
        </div>

       
        
           

        <div class="board">
            <table>
                <thead>
                    <tr>
                          <td>Package ID</td>
                          <td>Package Name</td>
                          <td>Package Description</td>
                          <td>Package image</td>
                          <td>Operation</td>
                          
                    </tr>
                </thead>
                <tbody>
                  

 <tr>

<?php

 while($row= mysqli_fetch_assoc($result))
 {
?>

<td class="id" >
<?php echo $row['pID'];
?>
</td>

<td >
<?php ;
echo $row['Pname'];
?>
</td>

<td >
<?php ;

echo $row['PDescription'];
?>
</td>


<td >
<?php ;
echo "<img src= '".$row['image']."' height='85px' width='100px'>";

?>
</td>


<td >
<a href="deletP2.php?id=<?php echo $row['pID']; ?>" class="confirm_delet"> DELET </a>

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





<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</body>
</html>