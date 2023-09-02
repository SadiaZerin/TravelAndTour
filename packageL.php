

<?php
session_start();
 include 'connect.php';
   if(isset($_POST["submit"])){
      
      $Pname= $_POST["Pname"];
      $PDescription= $_POST["PDescription"];
      $image = $_FILES["image"]['name'];
      $temp= $_FILES["image"]["tmp_name"];
      $folder = "image/" .$image;

      $query = "SELECT * FROM package WHERE Pname='$Pname'";
      $result1= mysqli_query($con,$query);

      if(mysqli_num_rows($result1)>0){
         $x[]="Package Already existed!";
        
      }
      else{
        
            $query2="INSERT INTO package (Pname,PDescription,image)VALUES ('$Pname','$PDescription',' $folder')";
           $r= mysqli_query($con,$query2);
            if($r){
              move_uploaded_file( $temp,$folder);

            }
        
      }
  }
  
   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link rel="stylesheet" href="packageL.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <style>
        #menu .items li:nth-child(4){
           border-left: 4px solid #fff;
               }
               #menu .items li:nth-child(1){
           border-left:none;
               }  
     </style>
     
</head>
<body>

    <section id="menu">
    <div class="logo">
         <img src="pngTour.png" alt="" width="90px">
         <h4><i>Tour and Travel</i></h4>
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
             <button style=" background:blueviolet; border-radius:6px; padding:4px .8rem ">
              <a href="" style="text-decoration:none ;color:white">Profile</a></button>


            </div>
        </div>

       

        <h3 class="size">ADD PACKAGE</h3>



 <div class="values">


<div class="card" style="width: 22rem; height:22rem; background:wheat;  box-shadow: 2px 1px 7px black;">
  <div class="card-body">
  
  <form action="" method="POST"  enctype="multipart/form-data" >
  <div class="mb-3">
    <label>Package Name</label>
    <input type="text" name="Pname" class="form-control check-name" id="exampleInputEmail1 " aria-describedby="emailHelp">
    <small class="error-meg" style="color:red;"></small>
   
  <div class="mb-3">
    <label >Package Description</label>
    <input type="text" name="PDescription"  class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label >Package image</label>
    <input type="file" name="image"  class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit"  name="submit" style="background: black; border:1px solid black" class="btn btn-primary">Submit</button>
</form>

  </div>
</div>
  
        
    
    </section>
    <script>
        $('#menu-btn').click(function(){
          $('#menu').toggleClass("active");
        })
    </script>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $('.check-name').keyup(function () { 
        
        var name=$('.check-name').val();
        $.ajax({
           
            url: "packageL2.php",
            method:'POST',
            data: {
                "check-submit-button":1,
                "Pakage-name":name,
            },
           
            success: function (response) {
                //alert(response);
               $('.error-meg').text(response);
            }
        });
    });
});
</script>
</body>
</html>


