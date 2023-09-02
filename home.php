<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>home</title>
    

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
	<title>home</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <link rel="stylesheet"  href="style.css"/>


</head>

<body>


	<section class="header">

		<a href="home.php" class="logo">Tour and travel</a>

		<nav class="navbar">
			<a href="home.php">home</a>
			<a href="about.php">about</a>
			<a href="package.php">package</a>
			<a href="book.php">book</a>

		</nav>
		
		<nav>
		<h2><a href="signup.php" class="signup">sign up</a></h2><br>
		
		<h2><a href="last.php" class="contact">contact us</a></h2>
		
		</nav>

		


		<div id="menu-btn" class="fas fa-bars"></div>
		

	</section>


	<section class="home">
		<div class="swiper home-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide slide" style="background:url(sea.jpg) no-repeat">
				    <div class="content">


                        <span>explore, discover, travel</span>
						<h3 class="new">travel around the world</h3>
						<a href="package.php" class="btn">discover  more</a>
				


				
					</div> 			

				</div>

				<div class="swiper-slide slide" style="background:url(forest1.jpg) no-repeat">
				    <div class="content">


                        <span>explore, discover, travel</span>
						<h3 class="new1">discover the new places</h3>
						<a href="package.php" class="btn">discover  more</a>
				


				
					</div> 			

				</div>

				<div class="swiper-slide slide" style="background:url(hill2.jpg) no-repeat">
				    <div class="content">


                        <span>explore, discover, travel</span>
						<h3 class="new2">make your tour worthwhile</h3>
						<a href="package.php" class="btn">discover  more</a>
				


				
					</div> 			

				</div>



            </div>
			<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>


    <section class="services">

	<h1 class="heading-title">our services</h1>

	<div class="box-container">
		<div class="box">
			<img src="icon1.png" alt="">
			<h3>adventure</h3>
        </div>	
        <div class="box">
			<img src="icon2.png" alt="">
			<h3>Tour guide</h3>
        </div>	
		<div class="box">
			<img src="icon3.png" alt="">
			<h3>trekking</h3>
        </div>			
		<div class="box">
			<img src="icon7.png" alt="">
			<h3>camping</h3>
        </div>	

    </div>

    </section>



	<section class="home-about">
		<div class="image">
			<img src="newabout.jpg" alt="">
        </div>

		<div class="content">
			<h3>about us</h3>
	     	<p>Our mission is to curate journeys that go beyond the ordinary, offering you a chance to connect with the world in meaningful ways. We are dedicated to crafting meticulously planned itineraries that capture the essence of each destination, ensuring you have authentic experiences that resonate long after you return home.</p>
            <a href="about.php" class="btn">read more</a>
		</div>

    </section>





	<section class="home-packages">
		<h1 class="heading-title"> our packages </h1>
		<div class="box-container">
			<div class="box">
				<div class="image">
					<img src="tajmahal.jpeg" alt="">
                </div>
				<div class="content">
					<h3>Adventure & Tour</h3>
					<p> "Don't wait to wander! Secure your adventure-Book Now."</p>
					<a href="book.php" class="btn">book now</a>
                </div>
            </div>

			<div class="box">
				<div class="image">
					<img src="sajek.jpg" alt="">
                </div>
				<div class="content">
					<h3>Explore & Discover</h3>
					<p>"Your dream getaway starts here-Book Now and make it real."</p>
					<a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
		
            </div>
			<div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>
	

	<section class="home-offer">
		<div class="content">
			<h3>upto 50% off</h3>
			<p>It's time to treat yourself-take advantage of discounts up to 50% off of any tour </p>
			<a href="book.php" class="btn">book now</a>
        </div>
    </section>
























   <section class="footer">

     <div class="box-container">

    <div class="box">
		    <h3>quick links </h3>
	        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
			<a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
			<a href="package.php"><i class="fas fa-angle-right"></i> package</a>
			<a href="book.php"><i class="fas fa-angle-right"></i> book</a>

    </div>

	<div class="box">
		    <h3>extra links </h3>
	        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
			<a href="#"> <i class="fas fa-angle-right"></i> about us</a>
			<a href="#"><i class="fas fa-angle-right"></i> private policy</a>
			<a href="#"><i class="fas fa-angle-right"></i> terms of use</a>

    </div>


	<div class="box">
		    <h3>contact info </h3>
	        <a href="#"> <i class="fas fa-phone"></i> 01735711725</a>
			<a href="#"> <i class="fas fa-phone"></i> 01735711564</a>
			<a href="#"> <i class="fas fa-envelope"></i> shazidchowdhury910@gmail.com</a>
			<a href="#"> <i class="fas fa-map"></i> Dhaka, Bangladesh-400104</a>
			

    </div>

	<div class="box">
		    <h3>Follow us </h3>
	        <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
			<a href="#"> <i class="fab fa-twitter"></i> twitter</a>
			<a href="#"> <i class="fab fa-instagram"></i> instagram</a>
			<a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
			

    </div>




    </div>


     <div class="credit"> created by <span>Team Web blast</span> | All rights reserved!!!</div>

    </section>





    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


	<script src="script.js"></script>



</body>


</html>