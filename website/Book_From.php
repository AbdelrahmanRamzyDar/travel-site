<?php

$connection=sqlite3.connect("C:\Users\abdel\OneDrive\Desktop\website\book.db");



if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $guests=$_POST['guests'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving'];

    $request= "insert into Book_Form(name,email,phone,address,location,guest,arrivals,leaving) values 
    ('$name','$email', '$phone' , '$address' , '$location' , '$guests','$arrivals','$leaving')";

    mysqli_query($connection,$request);

    header('location:Book.php');
    }else{
        echo 'error';
    }



    
















?>