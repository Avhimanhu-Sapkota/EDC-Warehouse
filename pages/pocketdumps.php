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
        <title> Our Story - EDC Warehouse </title>
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
        <img class="image-fluid" src="../images/cover5.jpg" alt="Cover Image" height="300" style="width:100%">
            
        <div class="empty-box"></div>    
        <h3 style="text-align:center">P O C K E T  &nbsp;&nbsp;&nbsp; D U M P S</h3>
        <div class="empty-box" style="height:15px"></div>
        <hr style="width:5%;border:1.5px solid black" >

        <!--Categorize Products-->
        <div class='container'>
            <div class="empty-box" style="height:15px"></div>
        <?php
            include ('connection.php');
            $sql="SELECT * FROM category";
            $qry=mysqli_query($db, $sql);

            echo"<div class='row' style='padding-top:0px;'>";
                echo"<div class='col-xl-6 col-sm-6'> ";
                echo" <div class='empty-box' style='height:35px'></div>
                            <h6 style='text-align:center'>C A T E G O R I Z E &nbsp;&nbsp;&nbsp; P R O D U C T S</h6>
                            <div class='empty-box' style='height:30px'></div>";
                    echo"<div class='row'>";
                            while($row=mysqli_fetch_array($qry)){
                                echo"<div class='col-4'> <div class='card' style='padding:0px'>";
                                    echo"<a href=categoryview.php?cid=".$row['CATEGORY_ID']."><img class='card-img-top image-fluid' src='../images/".$row['CATEGORY_IMAGE']." ' alt='' height='100%' width='100%' onMouseOver='this.style.opacity=0.5' onMouseOut='this.style.opacity=1'>";
                                    echo" <div class='card-body'> <h6 class='card-title' style='margin:0px;font-size:1vw;'> <a style='color:#17202A' href=categoryview.php?cid=".$row['CATEGORY_ID'].">".$row['CATEGORY_NAME']."</a></h6></div>";
                                echo"</div></div>";
                            }
                        echo"
                        </div>";
                echo"</div>";
                echo"<div class='col-xl-6 col-sm-6'>";
                        echo" <div class='empty-box' style='height:35px'></div>
                            <h6 style='text-align:center'>S O R T&nbsp;&nbsp;&nbsp; P R O D U C T S</h6>
                            <div class='empty-box' style='height:30px'></div>
                            <form method='post' name='sortform' action='sortproducts.php' class='sign-up-form'>";
                            echo"<table id='form-table'>";
                            echo"<tr class='table-row'>
                                <tr> <td>ALPHABETICAL ORDER : </td></tr>
                                <tr><td><select name='alphabet' class='textInput'>
                                    <option value='empty'></option>
                                    <option value='ascending'>Ascending</option>
                                    <option value='descending'>Descending</option>
                                    </select>
                                </td></tr>
                            </tr>";
                            echo"<tr class='row'>
                                <tr> <td>PRICE RANGE : </td></tr>
                                <tr><td><select name='price' class='textInput'>
                                    <option value='empty'></option>
                                    <option value='range1'>0-2000</option>
                                    <option value='range2'>2000-5000</option>
                                    <option value='range3'>5000-10000</option>
                                    <option value='range4'>10000 +</option>
                                    </select>
                                </td></tr>
                            </tr>";
                            echo"<tr class='row'>
                                <tr> <td>DATE ORDER : </td></tr>
                                <tr><td><select name='date' class='textInput'>
                                    <option value='empty'></option>
                                    <option value='newest'>Newest to Oldest</option>
                                    <option value='oldest'>Oldest to Newest</option>
                                    </select>
                                </td></tr>
                            </tr>";
                            echo"<tr class='row'> 
                                <td colspan='2' style='text-align:center'>
                                    <div class='empty-box' style='height:30px'></div>
                                        <a href='sortproducts.php' style='color:white;text-decoration:none;'> 
                                            <small><input type='submit' class='button' name='sortproudcts' value='SORT PRODUCTS' style='margin-left:50%'> </small>
                                        </a>
                                    </td>
                                </tr>";
                        echo"</table></form>";
                echo"</div>";
            echo"</div>";
        ?>

        </div>

        <div class="empty-box"></div> 
        <h6 style="text-align:center">TOP PICKS OF THE MONTH</h6>
        
        <!-- TOP PICKS OF THE MONTH -->
        <div class="container">
            <div class="row">
            <?php
                    include ('connection.php');
                    $sql="SELECT * FROM product ORDER BY PRODUCT_ID DESC";
                    $qry=mysqli_query($db, $sql);
                    $i=0;
                    // MANAGE TOP PICKS OF THE MONTH
                    while($row=mysqli_fetch_array($qry)){
                        $i=$i+1;

                        if ($i<=3){
                        $temp=$row['PRODUCT_ID'];
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
                                        if (!(empty($_SESSION['username']))){echo"<a href='addtofav.php?pid=".$row['PRODUCT_ID']."'><button type='button' name='fav_button' class='fav-button'> Add to Favourite </button></a>";echo"<button type='button' name='fav_button' class='fav-button'> Add to Favourite </button>";
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
        </div>
        <div class="empty-box"></div> 
        <?php
            include('slider3d.php');
        ?>
        <div class="empty-box"></div>


        <div class="empty-box" style="height:35px"></div>
        <h6 style="text-align:center">ALL PRODUCTS</h6>
        <!-- ALL PRODUCTS -->
        <div class="container">
            <div class="row">
            <?php
                    include ('connection.php');
                    $sql="SELECT * FROM product";
                    $qry=mysqli_query($db, $sql);

                    while($row=mysqli_fetch_array($qry)){
                        $temp=$row['PRODUCT_ID'];
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