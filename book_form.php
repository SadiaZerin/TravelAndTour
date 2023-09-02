<?php

    $connection = mysqli_connect('localhost', 'root', "", 'tms');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $hotel = $_POST['hotel'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "insert into booking(name, email,address, location,hotel, guests, arrivals, leaving) values
        ('$name', '$email', '$address', '$location','$hotel', '$guests', '$arrivals', '$leaving')";

       

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong.please try again';
    }

?>