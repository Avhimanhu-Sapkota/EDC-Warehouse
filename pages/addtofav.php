<?php
    
    ob_start();
    session_start();

    $username=$_SESSION['username'];
    $productID= $_GET['pid'];
    
    $cookiename = "fav_product".$username;
    $fav_name=$cookiename."[$productID]";
    echo $fav_name;
    setcookie($fav_name, $productID, time()+(60*60*24*30*6), "/");
    header('Location: favourite.php');
    ob_end_fluch();
    
?>