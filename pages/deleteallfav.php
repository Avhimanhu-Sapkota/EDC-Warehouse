<?php
    ob_start();
    session_start();

    $username=$_SESSION['username'];
    $cookiename = "fav_product".$username;
            
    if (empty($_COOKIE["fav_product".$username])){
        header('Location: favourite.php');
        ob_end_fluch();
    }
    else{
        
        $favID = $_COOKIE["fav_product".$username];
        foreach($favID as $key => $value){
            echo $key ;
            $cookiename="fav_product".$username;
            $fav_name=$cookiename."[$key]";
        
            setcookie($fav_name, $key, time()-(60*60*24*30*6), "/");
        }
        header('Location: favourite.php');
        ob_end_fluch();
    } 
?>

