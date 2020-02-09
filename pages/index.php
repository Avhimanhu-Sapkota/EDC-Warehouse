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
        <title> Home - EDC Warehouse </title>
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
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="carousel-slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" height="100%">
                        <img src="../images/edcslide1.jpg" alt="Timer" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/edcslide2.jpg" alt="Headphone"  width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/edcslide3.jpg" alt="camera"  width="100%">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        <div class="empty-box"></div>    
        <h6 style="text-align:center">Explore Our</h6>
        <h3 style="text-align:center">BEST SELLERS</h3>

        <div class="container">
            <div class="row">
                <?php
                    include ('connection.php');
                    $sql="SELECT * FROM product";
                    $qry=mysqli_query($db, $sql);
                    $i=0;

                    while($row=mysqli_fetch_array($qry)){
                        $i=$i+1;

                        if ($i<=3 && $row['QUANTITY_SOLD']>=8){ //only show 3 items having more than 8 sold quantity.

                            $desc = $row['PRODUCT_DESCRIPTION'];
                            $strcut = substr($desc,0,85);
                            echo "<div class='col-xl-4 col-sm-12'> <div class='card h-100'>";
                                echo"<a href=productview.php?pid=".$row['PRODUCT_ID']."><img class='card-img-top image-fluid' src='../images/".$row['PRODUCT_IMAGE_NAME']." ' alt='' height='100%' width='100%'></a>";
                                echo" <div class='card-body'> <h4 class='card-title'> <a style='color:#17202A' href=productview.php?pid=".$row['PRODUCT_ID'].">".$row['PRODUCT_NAME']."</a></h4>";
                                echo"<h5> Rs. ".$row['PRODUCT_PRICE']."</h5>
                                    <p class='card-text'>"
                                        .$strcut.
                            ".....</p> </div>";

                                if($row['PRODUCT_RATING']==1){
                                    echo"<div class='card-footer'>
                                            <small class='text-muted'>&#9733;&#9734;&#9734;&#9734;&#9734;";
                                            if (!(empty($_SESSION['username']))){
                                                echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";
                                            }
                                            echo"</small>
                                        </div></div>";
                                }
                                else if ($row['PRODUCT_RATING']==2){
                                    echo"<div class='card-footer'>
                                            <small class='text-muted'>&#9733;&#9733;&#9734;&#9734;&#9734;";
                                            if (!(empty($_SESSION['username']))){
                                                echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";
                                            }
                                            echo"</small>
                                        </div></div>";
                                }
                                else if ($row['PRODUCT_RATING']==3){
                                    echo"<div class='card-footer'>
                                            <small class='text-muted'>&#9733;&#9733;&#9733;&#9734;&#9734;";
                                            if (!(empty($_SESSION['username']))){
                                                echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";
                                            }
                                            echo"</small>
                                        </div></div>";
                                }
                                else if ($row['PRODUCT_RATING']==4){
                                    echo"<div class='card-footer'>
                                            <small class='text-muted'>&#9733;&#9733;&#9733;&#9733;&#9734;";
                                            if (!(empty($_SESSION['username']))){
                                                echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";
                                            }
                                            echo"</small>
                                        </div></div>";
                                }
                                else{
                                    echo"<div class='card-footer'>
                                            <small class='text-muted'>&#9733;&#9733;&#9733;&#9733;&#9733;";
                                            if (!(empty($_SESSION['username']))){
                                                echo"<button type='button' name='fav_button' class='fav-button'> Add to Favourite </button>";
                                            }
                                            echo"</small>
                                        </div></div>";
                                }
                            echo"</div>";
                        }
                    }
                ?>
            </div>

            <div class="empty-box" style="height:35px"></div>

            <form>
                <a href="pocketdumps.php" style='color:white;text-decoration:none;'> 
                    <input type="button" class="button" value="VIEW PRODUCTS" style="margin:auto;display:block;"> 
                </a>
            </form>
        </div>   

        <div class="empty-box"></div> 

        <?php
            include('slider3d.php');
        ?>

        <div class="empty-box"></div>
        
        <div class="empty-box"></div>  

        <div class="container-fluid" style="background-color:#E7F2FF;color:black ">
            <div class='empty-box' style="height:35px"></div>
            <h5 style="text-align:center">FIND WHAT PIONEERS CARRY</h5>

            <div class="container">
                <div class="row">
                <?php
                        include ('connection.php');
                        $sql="SELECT * FROM profession";
                        $qry=mysqli_query($db, $sql);
                        $i=0;

                        while($row=mysqli_fetch_array($qry)){
                            $i=$i+1;
                            if ($i<=3){
                                echo "<div class='col-xl-4 col-sm-12'> ";
                                echo"<a href=professionview.php?pfid=".$row['PROFESSION_ID']."><img class='image-fluid rounded-circle z-depth-2' src='../images/".$row['PROFESSION_IMAGE']." ' alt='' height='60%' width='100%'  data-holder-rendered='true'> </a>";
                                echo"<a style='color:#17202A' href=professionview.php?pfid=".$row['PROFESSION_ID']."> <div style='text-align:center'> <h4> <br>".$row['PROFESSION_NAME']."</h4></a>";
                                echo"<p class='card-text'>"
                                        .$row['PROFESSION_DESC'].
                                "</p>";
                                echo" <br><br><br></div></div> ";
                            }
                        }
                    ?>
                </div>

                <div class='empty-box' style="height:35px"></div>

                <form>
                    <a href="gearforlife.php" style='color:white;text-decoration:none;'> 
                        <input type="button" class="button" value="VIEW PROFESSIONS" style="margin:auto;display:block;"> 
                    </a>
                </form>

                <div class='empty-box' style="height:35px"></div>

            </div>
        </div>

        <div class="empty-box"></div> 

        <h6 style="text-align:center">Explore Our</h6><br>
        <h3 style="text-align:center">NEW RELEASES</h3>

        <div class="container">
            <div class="row">
                <?php
                    include ('connection.php');
                    $sql="SELECT * FROM product";
                    $qry=mysqli_query($db, $sql);
                    $i=0;

                    while($row=mysqli_fetch_array($qry)){
                        $i=$i+1;
                        $temp=$row['PRODUCT_ID'];
                        if ($i<=21 &&  $temp > 18){ //only show 3 items having current month. -----------ERRoR 
                            $desc = $row['PRODUCT_DESCRIPTION'];
                            $strcut = substr($desc,0,85);
                            echo "<div class='col-xl-4 col-sm-12'> <div class='card h-100'>";
                                echo"<a href=productview.php?pid=".$row['PRODUCT_ID']."><img class='card-img-top image-fluid' src='../images/".$row['PRODUCT_IMAGE_NAME']." ' alt='' height='100%' width='100%'>";
                                echo" <div class='card-body'> <h4 class='card-title'> <a style='color:#17202A' href=productview.php?pid=".$row['PRODUCT_ID'].">".$row['PRODUCT_NAME']."</a></h4>";
                                echo"<h5> Rs. ".$row['PRODUCT_PRICE']."</h5>
                                    <p class='card-text'>"
                                        .$strcut.
                            ".....</p> </div>";

                            if($row['PRODUCT_RATING']==1){
                                echo"<div class='card-footer'>
                                        <small class='text-muted'>&#9733;&#9734;&#9734;&#9734;&#9734;";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</small>
                                    </div></div>";
                            }
                            else if ($row['PRODUCT_RATING']==2){
                                echo"<div class='card-footer'>
                                        <small class='text-muted'>&#9733;&#9733;&#9734;&#9734;&#9734;";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</small>
                                    </div></div>";
                            }
                            else if ($row['PRODUCT_RATING']==3){
                                echo"<div class='card-footer'>
                                        <small class='text-muted'>&#9733;&#9733;&#9733;&#9734;&#9734;";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</small>
                                    </div></div>";
                            }
                            else if ($row['PRODUCT_RATING']==4){
                                echo"<div class='card-footer'>
                                        <small class='text-muted'>&#9733;&#9733;&#9733;&#9733;&#9734;";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</small>
                                    </div></div>";
                            }
                            else{
                                echo"<div class='card-footer'>
                                        <small class='text-muted'>&#9733;&#9733;&#9733;&#9733;&#9733;";
                                        if (!(empty($_SESSION['username']))){
                                            echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";
                                        }
                                        echo"</small>
                                    </div></div>";
                            }
                            echo"</div>";
                        }
                    }

                ?>
            </div>
        
            <div class="empty-box" style="height:35px"></div>

            <form>
                <a href="pocketdumps.php" style='color:white;text-decoration:none;'> 
                    <input type="button" class="button" value="VIEW PRODUCTS" style="margin:auto;display:block;"> 
                </a>
            </form>

        </div>
        
        <div class="empty-box"></div>
        
        <?php
            include('coverpanel.html');
        ?>

        <div class="empty-box"></div>
        <h3 style="text-align:center">JOURNALS</h3>

        <div class="container">
            <div class="row">
                <?php
                    include ('connection.php');
                    $sql="SELECT * FROM journal";
                    $qry=mysqli_query($db, $sql);
                    $i=0;

                    while($row=mysqli_fetch_array($qry)){
                        $i=$i+1;

                        if ($i<=3){ //only show 3 items.

                            $desc = $row['JOURNAL_BODY'];
                            $strcut = substr($desc,0,85);
                            echo "<div class='col-xl-4 col-sm-12'> 
                                    <div class='card h-100'>";
                                        echo"<a href=journalview.php?jid=".$row['JOURNAL_NO']."><img class='card-img-top image-fluid' src='../images/".$row['JOURNAL_IMAGE']." ' alt='' height='100%' width='100%'></a>";
                                        echo" <div class='card-body'> <h4 class='card-title'> <a style='color:#17202A' href=journalview.php?jid=".$row['JOURNAL_NO'].">".$row['JOURNAL_TITLE']."</a></h4>";
                                            echo"<p class='card-text'>"
                                                .$strcut.
                                                ".....</p>
                                        </div>";
                                        echo"<div class='card-footer'><small> Writer: ".$row['JOURNAL_AUTHOR']."</small>
                                        </div> 
                                    </div>
                                </div>";
                        }
                    }
                ?>
            </div>

            <div class="empty-box" style="height:35px"></div>

            <form>
                <a href="journals.php" style='color:white;text-decoration:none;'> 
                    <input type="button" class="button" value="VIEW JOURNALS" style="margin:auto;display:block;"> 
                </a>
            </form>
        </div> 
        <div class="empty-box"></div>
        <h3 style="text-align:center">FOLLOW US</h3>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-sm-12">
                    <img class="image-fluid" src="../images/portfolio3.jpg" alt="Portfolio Image - Diary" width="100%" height="100%">
                </div>
                <div class="col-xl-4 col-sm-12">
                    <img class="image-fluid" src="../images/portfolio2.jpg" alt="Portfolio Image - Water Bottle" width="100%" height="100%">
                </div>
                <div class="col-xl-4 col-sm-12">
                    <img class="image-fluid" src="../images/portfolio1.jpg" alt="Portfolio Image - Phone with case" width="100%" height="100%"> 
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-12">
                    <img class="image-fluid" src="../images/portfolio8.jpg" alt="Portfolio Image - Compass" width="100%" height="100%"> 
                </div>
                <div class="col-xl-4 col-sm-12">
                    <img class="image-fluid" src="../images/portfolio6.jpg" alt="Portfolio Image - Lady Purse" width="100%" height="100%"> 
                </div>
                <div class="col-xl-4 col-sm-12">
                    <img class="image-fluid" src="../images/portfolio5.jpg" alt="Portfolio Image - Polaroid Camera" width="100%" height="100%"> 
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-12">
                    <img class="image-fluid" src="../images/portfolio7.jpg" alt="Portfolio Image - Bracelets" width="100%" height="100%"> 
                </div>
                <div class="col-xl-4 col-sm-12">
                    <img class="image-fluid" src="../images/portfolio4.jpg" alt="Portfolio Image - Coffee Mug" width="100%" height="100%">
                </div>
                <div class="col-xl-4 col-sm-12">
                    <img class="image-fluid" src="../images/portfolio9.jpg" alt="Portfolio Image - Perfume" width="100%" height="100%">
                </div>
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