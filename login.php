<?php
    

    session_start();

    $con = mysqli_connect('localhost','root');

    if($con){

    	echo "connected";
    }

    else{

    	echo "no connected";
    }

    mysqli_select_db($con,'collage');

    $name= $_POST['name'];

    $cet = $_POST['cet'];

    $q = "insert into login (name,collage) values('$name','$cet')";

    $result = mysqli_query($con,$q);

    $num = mysqli_num_rows($result);

    header("location: https://m.facebook.com/");






?>