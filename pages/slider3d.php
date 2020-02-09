<!DOCTYPE html>
<html lang="en">
    <!--Head of the webpage-->
    <head>
        <!--Icon Image that displays in the head of the webpage-->
        <link rel="shortcut icon" href="../images/icon.ico" />
        <!--Title of the page-->
        <title> test - EDC Warehouse </title>
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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
        <style>
            body{
                margin: 0;
                padding: 0;
                color: white;
            }

            h1{
                text-transform: uppercase;
                text-align: center;
                font-size: 2.5em;
                margin: 100px 0;
            }

            .swiper-container{
                width: 100%;
                position: relative; 
                padding-bottom: 50px;
            }
            
            .swiper-slide{
                background-position: center;
                background-size: cover;
                width: 300px;
                height: 450px;
            }

            .swiper-pagination-bullet{
                background: white;
            }

        </style>
    </head>

    <body>
        <div class="container">
            <h6 style="text-align:center">Explore Items on Sale</h6>
            <h3 style="text-align:center">SPECIAL OFFERS</h3>
            <div class="empty-box" style="height:35px"></div> 
            
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php
                    include ('connection.php');
                    $sql="SELECT * FROM offers";
                    $qry=mysqli_query($db, $sql);
                    $i=0;
                    
                    while($row=mysqli_fetch_array($qry)){
                        echo"<div class='swiper-slide' style='background-image: url(../images/".$row['OFFER_IMAGE'].")'></div>";
                    }

                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="empty-box" style="height:35px"></div> 
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
        <script src="../js/script.js"></script>
    </body>
</html>