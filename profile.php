
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link rel="stylesheet" href="adminViewP.css">

    <style>
        .blue{
            display: flex;
             flex-direction:row; 
             width:70vw;
        }
        #adjust{

        width:27vw;

      }
        @media(max-width:700px){
    
         .blue{
            display: flex;
            flex-direction: column;
            margin-left: 2rem;
         }

      #adjust{
        width: 70vw;
      }

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
             <button style=" background:blueviolet; border-radius:6px; padding:5px 1rem ">
              <a href="" style="text-decoration:none;color:white">Profile</a></button>


            </div>
        </div>
       
  
        

<section class="home3">
  <div class="header">
  <h3>Personal Information</h3>
  </div>
  <br>
  <div class="container4">
    <div class="row g-3">
        

        

    
        

        <div class="col-12 col-md-6 col-lg-6">
          <div class="card blue">
            <img src="profile.jpg" id="adjust"  class="card-img-top">
            <div class="card-body" >
              
              





           
                   
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Full Name:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">Nishat Sultana </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Email:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">nishat00@gmail.com
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Phone:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">0170576576
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Address:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">Bashundhara C-block
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Usertype:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">Admin
                            </div>
                        </div>
                       
                        

                    </div>
              
















            </div>
          </div>
       </div>

       
      </div>
    </div>

  </div>
</section>




    </section>
    <script>
        $('#menu-btn').click(function(){
          $('#menu').toggleClass("active");
        })
    </script>
</body>
</html>