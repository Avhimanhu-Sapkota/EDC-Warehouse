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
        <title> Admin - EDC Warehouse </title>
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
        <h2 style="text-align:center">ADMIN</h2>
        <div class="empty-box"></div>   
        
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-product.php"> <img class="image-fluid" src="../images/product-img.jpg" alt="Product Image" width="100%" height="100%"> </a>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-customer.php"> <img class="image-fluid" src="../images/customer.png" alt="Customer Image" width="100%" height="100%"> </a>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-category.php"> <img class="image-fluid" src="../images/category.jpg" alt="Category Image" width="100%" height="100%"> </a>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-product.php" class="nav-link" style="color:black"><h4 style="text-align:center"> PRODUCTS </h4></a>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-customer.php" class="nav-link" style="color:black"><h4 style="text-align:center"> CUSTOMER </h4></a>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-category.php" class="nav-link" style="color:black"><h4 style="text-align:center"> PRODUCT CATEGORY </h4></a>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-offer.php"> <img class="image-fluid" src="../images/offer.jpg" alt="Offer Image" width="100%" height="100%"> </a>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-profession.php"> <img class="image-fluid" src="../images/profession.jpg" alt="Profession Image" width="100%" height="100%"> </a>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-journal.php"> <img class="image-fluid" src="../images/journal.jpg" alt="Journal Image" width="100%" height="100%"> </a>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-offer.php" class="nav-link" style="color:black"><h4 style="text-align:center"> OFFERS </h4></a>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-profession.php" class="nav-link" style="color:black"><h4 style="text-align:center"> PROFESSION </h4></a>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <a href="manage-journal.php" class="nav-link" style="color:black"><h4 style="text-align:center"> JOURNAL </h4></a>
                </div>
            </div>
        </div> 

        <div class="empty-box"></div>   
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