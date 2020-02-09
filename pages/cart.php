
<?php
    session_start();
  
    if (empty($_SESSION['username'])){
        include ('header.php');
    }
    else{
        include ('loggedheader.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <!--Head of the webpage-->
    <head>
        <!--Icon Image that displays in the head of the webpage-->
        <link rel="shortcut icon" href="../images/icon.ico" />
        <!--Title of the page-->
        <title> Favourites - EDC Warehouse </title>
        <!--Meta data set for Unicode acceptance-->
        <meta charset="utf-8"/>
        <!--Meta tag to represent the author of the website-->
        <meta name="author" content="Avhimanhu Sapkota (c7202323)"/>
        <!--Keywords that optimizes the Search Engine-->
        <meta name="keywords" content=" "/>
        <!--Description that optimizes the Search Engine Result-->
        <meta name="description" content=" "/>
        <!--Link to Bootstrap-->
        <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
        <!--Link to Style Sheet Page-->
        <link rel="stylesheet" type="text/css" href="../style/style1.css">
    </head>

    <body>
        <div class="empty-box"></div>    
        <h3 style="text-align:center"> C A R T</h3>
        <hr style="width:5%;border:1.5px solid black" >
        <div class="empty-box"></div>  
        <h3 style="text-align:center;"> 
            C A R T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I S &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U P D A T I N G &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P L E A S E &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S E E &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L A T E R 
        </h3>
        
        <div class="empty-box"></div>
        <hr style="width:5%;border:1.5px solid black" >
        <div class="empty-box"></div>
    </body>
</html>

<?php
    if (empty($_SESSION['username'])){
        include ('footer.html');
    }
    else{
        include ('loggedfooter.php');
    }
?>