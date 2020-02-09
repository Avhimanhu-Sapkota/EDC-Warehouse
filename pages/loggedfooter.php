<!DOCTYPE html>
<html lang="en">
    <!--Head of the webpage-->
    <head>
        <!--Icon Image that displays in the head of the webpage-->
        <link rel="shortcut icon" href="../images/icon.ico" />
        <!--Title of the page-->
        <title> </title>
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

    <!--Body of the webpage-->
    <body>
        <footer class="page-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 mt-md-0 mt-3">
                        <h4 style="text-align: center;"> NAVIGATE </h4>
                        <div class="row">
                            <div class="col-md-6 mt-md-0 mt-3">
                                <ul class="list-nav">
                                    <li>
                                        <a href="index.php"> OVERVIEW </a>
                                    </li>
                                    <li>
                                        <a href="gearforlife.php"> GEAR FOR LIFE </a>
                                    </li>
                                    <li>
                                        <a href="journals.php"> EDC JOURNALS </a>
                                    </li>
                                    <li>
                                        <a href="pocketdumps.php"> POCKET DUMPS </a>
                                    </li>
                                    <li>
                                        <a href="refundpolicy.php"> REFUND POLICY </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <ul class="list-nav">
                                    <li>
                                        <a href="cart.php"> CART </a>
                                    </li>
                                    <li>
                                        <a href="logout.php"> LOG OUT </a>
                                    </li>
                                    <li>
                                        <a href="ourstory.php"> OUR STORY </a>
                                    </li>
                                    <li>
                                        <a href="favourite.php"> FAVOURITES </a>
                                    </li>
                                    <li>
                                    <?php
                                        $user=$_SESSION['username'];
                                        include ('connection.php');
                                        $sql="SELECT USER_NAME, USER_TYPE FROM system_user";
                                        $qry=mysqli_query($db, $sql);
                    
                                        while($row=mysqli_fetch_array($qry)){
                                            $name=$row['USER_NAME'];
                                            $usertype=$row['USER_TYPE'];
                                            if($name==$user && $usertype==1){
                                                echo "<a href='admin.php'> ADMIN </a>";
                                            }
                                        }
                                    ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-3" id="footer-content">
                        <br><br><br>
                        <img src="../images/logo.PNG" alt="EDC Warehouse Logo" width="50%">
                    </div>
                    <div class="col-md-4 mt-md-0 mt-3">
                        <h4 style="text-align: center;"> FOLLOW US </h4>
                        <ul class="list">
                            <li>
                                <a href="https://www.facebook.com/">
                                    <img src="../images/facebook.png" alt="Facebook Icon" height="42em">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/">
                                    <img src="../images/instagram.png" alt="Instagram Icon" height="38em">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">
                                    <img src="../images/twitter.jpg" alt="Twitter Icon" height="38em">
                                </a>
                            </li>
                        </ul>
                        <br><br><h4 style="text-align: center;"> PAY US</h4>
                        <ul class="list">
                            <li>
                                <a href="https://www.mastercard.us/en-us.html">
                                    <img src="../images/mastercard.png" alt="Mastercard Icon" height="38em">
                                </a>
                            </li>
                            <li>
                                <a href="https://esewa.com.np/#/home">
                                    <img src="../images/esewa.png" alt="E-sewa Icon" height="38em">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">
                        EDC&nbsp;&nbsp;&nbsp;WAREHOUSE&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;© 2019/20&nbsp;&nbsp;&nbsp;&nbsp;|
                        &nbsp;&nbsp;&nbsp;&nbsp; AVHIMANHU&nbsp;&nbsp;SAPKOTA
                        &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; ALL&nbsp;&nbsp;RIGHTS &nbsp;&nbsp;RESERVED.<br>
                        <p style="font-size:0.9vw">
                             Some contents and products have been copied from other websites. Please consider this
                             as it is difficult to build an e-commerce website without products (products are bogus)). 
                        </p>
                </div>
            </div>
        </footer>
    </body>    
</html>