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
        <title> Search - EDC Warehouse </title>
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

     <!--Body of the webpage-->
    <body>
        <div class="empty-box"></div>    
        <h3 style="text-align:center">S O R T E D &nbsp;&nbsp;&nbsp;&nbsp; P R O D U C T S</h3>
        <hr style="width:5%;border:1.5px solid black" >

        <div class="container">
            <div class="row">
                <?php
                    include ('connection.php');
                    
                    if (isset($_POST['sortproudcts'])){
                        if (isset($_POST['alphabet'])){
                            if ($_POST['alphabet'] == "ascending"){
                                $sortby1='ascending';
                                $sql1="SELECT * FROM product ORDER BY PRODUCT_NAME";
                            }
                            else if ($_POST['alphabet'] == "descending"){
                                $sortby1='descending';
                                $sql1="SELECT * FROM product ORDER BY PRODUCT_NAME DESC";
                            }
                            else if ($_POST['alphabet'] == "empty"){
                                $sortby1='';
                                $sql1="SELECT * FROM product WHERE PRODUCT_NAME=''";
                            }
                        }
                        
                        if (isset($_POST['price'])){
                            $sortby2='ok';
                            if ($_POST['price']=="range1"){
                                $lowest="0";
                                $highest="2000";
                            }
                            else if ($_POST['price']=="range2"){
                                $lowest="2000";
                                $highest="5000";
                            }
                            else if ($_POST['price']=="range3"){
                                $lowest="5000";
                                $highest="10000";
                            }
                            else if ($_POST['price']=="range4"){
                                $lowest="10000";
                                $highest="1000000";
                            }
                            else{
                                $sortby2='';
                                $lowest="0";
                                $highest="0";
                            }
                            $sql2="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest";
                        }

                        if (isset($_POST['date'])){
                            if ($_POST['date'] == "newest"){
                                $sortby3="descending";
                                $sql3="SELECT * FROM product ORDER BY PRODUCT_RELEASEDATE DESC";
                            }
                            else if ($_POST['date'] == "oldest"){
                                $sortby3="ascending";
                                $sql3="SELECT * FROM product ORDER BY PRODUCT_RELEASEDATE";
                            }
                            else{
                                $sortby3='';
                                $sql3="SELECT * FROM product WHERE PRODUCT_NAME=''";
                            }
                        }

                        if (!(empty($sortby1)) && empty($sortby2) && empty($sortby3)){
                            $sql=$sql1;
                        }
                        else if (empty($sortby1) &&!(empty($sortby2))  && empty($sortby3)){
                            $sql=$sql2;
                        }
                        else if (empty($sortby1) && empty($sortby2) && !(empty($sortby3))){
                            $sql=$sql3;
                        }
                        else if (!(empty($sortby1)) && !(empty($sortby2)) && empty($sortby3)){
                            if($sortby1=="ascending"){
                                $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_NAME";
                            }
                            else{ 
                                $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_NAME DESC";
                            }
                        }
                        else if (!(empty($sortby1)) && empty($sortby2) && !(empty($sortby3))){
                            if($sortby3=="ascending"){
                                if($sortby1=="ascending"){
                                    $sql=" SELECT * FROM product ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME";
                                }
                                else{
                                    $sql=" SELECT * FROM product ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME DESC";
                                }
                                
                            }
                            else{
                                if($sortby1=="ascending"){
                                    $sql=" SELECT * FROM product ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME";
                                }
                                else{
                                    $sql=" SELECT * FROM product ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME DESC";
                                }
                            }
                        }
                        else if (empty($sortby1)  && !(empty($sortby2)) && !(empty($sortby3))){
                            if ($_POST['price']=="range1"){
                                $lowest="0";
                                $highest="2000";
                                if($sortby3=='ascending'){
                                    $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE";
                                }
                                else{
                                    $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC";
                                }
                                
                            }
                            else if ($_POST['price']=="range2"){
                                $lowest="2000";
                                $highest="5000";
                                if($sortby3=='ascending'){
                                    $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE";
                                }
                                else{
                                    $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC";
                                }
                            }
                            else if ($_POST['price']=="range3"){
                                $lowest="5000";
                                $highest="10000";
                                if($sortby3=='ascending'){
                                    $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE";
                                }
                                else{
                                    $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC";
                                }
                            }
                            else if ($_POST['price']=="range4"){
                                $lowest="10000";
                                $highest="1000000";
                                if($sortby3=='ascending'){
                                    $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE";
                                }
                                else{
                                    $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC";
                                }
                            }
                        }
                        else if(!(empty($sortby1))  && !(empty($sortby2)) && !(empty($sortby3))){
                            if($sortby1=="ascending"){
                                if ($_POST['price']=="range1"){
                                    $lowest="0";
                                    $highest="2000";
                                    if($sortby3=='ascending'){
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME";
                                    }
                                    else{
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME";
                                    }
                                    
                                }
                                else if ($_POST['price']=="range2"){
                                    $lowest="2000";
                                    $highest="5000";
                                    if($sortby3=='ascending'){
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME";
                                    }
                                    else{
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME";
                                    }
                                }
                                else if ($_POST['price']=="range3"){
                                    $lowest="5000";
                                    $highest="10000";
                                    if($sortby3=='ascending'){
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME";
                                    }
                                    else{
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME";
                                    }
                                }
                                else if ($_POST['price']=="range4"){
                                    $lowest="10000";
                                    $highest="1000000";
                                    if($sortby3=='ascending'){
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME";
                                    }
                                    else{
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME";
                                    }
                                }
                            }
                            else{ 
                                if ($_POST['price']=="range1"){
                                    $lowest="0";
                                    $highest="2000";
                                    if($sortby3=='ascending'){
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME DESC";
                                    }
                                    else{
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME DESC";
                                    }
                                    
                                }
                                else if ($_POST['price']=="range2"){
                                    $lowest="2000";
                                    $highest="5000";
                                    if($sortby3=='ascending'){
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME DESC";
                                    }
                                    else{
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME DESC";
                                    }
                                }
                                else if ($_POST['price']=="range3"){
                                    $lowest="5000";
                                    $highest="10000";
                                    if($sortby3=='ascending'){
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME DESC";
                                    }
                                    else{
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME DESC";
                                    }
                                }
                                else if ($_POST['price']=="range4"){
                                    $lowest="10000";
                                    $highest="1000000";
                                    if($sortby3=='ascending'){
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE, PRODUCT_NAME DESC";
                                    }
                                    else{
                                        $sql="SELECT * FROM product WHERE PRODUCT_PRICE BETWEEN $lowest AND $highest ORDER BY PRODUCT_RELEASEDATE DESC, PRODUCT_NAME DESC";
                                    }
                                }
                            }
                        }
                        else{
                            $sql="SELECT * FROM product WHERE PRODUCT_NAME=''";
                            echo"</div> <div class='empty-box' height='980px'></div>";
                            echo"<h3 style='text-align:center'> T H E R E &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N O&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                S U C H&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P R O D U C T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I N &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E D C &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;W A R E H O U S E </h3><br><br>";
                            echo"<h6 style='text-align:center'>PLEASE FIND OTHERS PRODUCTS </h6>";
                            echo" <div class='empty-box' height='80px'></div>";
                        }

                    $qry=mysqli_query($db, $sql);
                    $count=0;

                    while($row=mysqli_fetch_array($qry)){
                        $desc = $row['PRODUCT_DESCRIPTION'];
                            $strcut = substr($desc,0,85);
                            echo "<div class='col-xl-4 col-sm-12'> <div class='card h-100'>";
                                echo"<a href=productview.php?pid=".$row['PRODUCT_ID']."><img class='card-img-top image-fluid' src='../images/".$row['PRODUCT_IMAGE_NAME']." ' alt='' height='100%' width='100%'></a>";
                                echo" <div class='card-body'> <h4 class='card-title'> <a style='color:#17202A' href=productview.php?pid=".$row['PRODUCT_ID'].">".$row['PRODUCT_NAME']."</a></h4>";
                                echo"<h5> Rs. ".$row['PRODUCT_PRICE']."</h5>
                                    <p class='card-text'>"
                                        .$strcut.
                            ".....</p> </div>";
                            $count++;

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
                    else{
                        echo"</div> <div class='empty-box' height='980px'></div>";
                        echo"<h3 style='text-align:center'> T H E R E &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N O&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            S U C H&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P R O D U C T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I N &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E D C &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;W A R E H O U S E </h3><br><br>";
                        echo"<h6 style='text-align:center'>PLEASE FIND OTHERS PRODUCTS </h6>";
                        echo" <div class='empty-box' height='80px'></div>";
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