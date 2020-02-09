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
        <h3 style="text-align:center">VIEW PRODUCT</h3>
        <hr style="width:5%;border:1.5px solid black" >

        <div class="container">
            <div class="row">
                
                <?php
                    include ('connection.php');
                    $productID=$_GET['pid'];
                    $sql="SELECT * FROM product WHERE PRODUCT_ID=$productID";
                    $qry=mysqli_query($db, $sql);
                    
                    while($row=mysqli_fetch_array($qry)){

                        echo"<div class='col-xl-6 col-sm-12'>";
                            echo"<img src='../images/".$row['PRODUCT_IMAGE_NAME']." ' height='100%' width='100%'>";
                        echo"</div>";

                        echo"<div class='col-xl-6 col-sm-12'>";
                            echo"<h2 class='card-title'> ".$row['PRODUCT_NAME']."</h2>";
                            echo"<br><p align='justify'> ".$row['PRODUCT_DESCRIPTION']."<p>";
                            echo"<p>Release Date: ".$row['PRODUCT_RELEASEDATE']."</p>";
                            echo"<p>Product Quantity:  ".(($row['PRODUCT_QUANTITY'])-($row['QUANTITY_SOLD']))."</p>";
                            echo"<h5> Rs. ".$row['PRODUCT_PRICE']."";

                            if($row['PRODUCT_RATING']==1){
                                echo"<br> <h3>
                                        &#9733;&#9734;&#9734;&#9734;&#9734;</h3>";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='desc-fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</div></div>";
                            }
                            else if ($row['PRODUCT_RATING']==2){
                                echo"<br> <h3>
                                        &#9733;&#9733;&#9734;&#9734;&#9734;</h3>";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='desc-fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</div></div>";
                            }
                            else if ($row['PRODUCT_RATING']==3){
                                echo"<br> <h3>
                                        &#9733;&#9733;&#9733;&#9734;&#9734;</h3>";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='desc-fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</div></div>";
                            }
                            else if ($row['PRODUCT_RATING']==4){
                                echo" <br> <h3>
                                         &#9733;&#9733;&#9733;&#9733;&#9734;</h3>";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='desc-fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</div>";
                            }
                            else{
                                echo"<br> <h3>
                                        &#9733;&#9733;&#9733;&#9733;&#9733;</h3>";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='desc-fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</div>";
                            }
                        echo"</h5></div>";
                    } 
                ?>
            </div>
        </div>
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