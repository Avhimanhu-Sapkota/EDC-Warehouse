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
        <h3 style="text-align:center">G E A R&nbsp;&nbsp;&nbsp;F O R&nbsp;&nbsp;&nbsp;L I F E</h3>
        <div class="empty-box" style="height:15px"></div>
        <hr style="width:5%;border:1.5px solid black" >

        <div class="empty-box" style="height:35px"></div>
        <h6 style="text-align:center">FIND WHAT PROFESSIONALS CARRY </h6>

        <div class="container">
                <div class="row">
                    <?php
                        include ('connection.php');
                        $sql="SELECT * FROM profession";
                        $qry=mysqli_query($db, $sql);

                        while($row=mysqli_fetch_array($qry)){
                                echo "<div class='col-xl-4 col-sm-12'> ";
                                echo"<a href=professionview.php?pfid=".$row['PROFESSION_ID']."><img class='image-fluid rounded-circle z-depth-2' src='../images/".$row['PROFESSION_IMAGE']." ' alt='' height='60%' width='100%'  data-holder-rendered='true'> </a>";
                                echo"<a style='color:#17202A' href=professionview.php?pfid=".$row['PROFESSION_ID']."> <div style='text-align:center'> <h4> <br>".$row['PROFESSION_NAME']."</h4></a>";
                                echo"<p class='card-text'>"
                                        .$row['PROFESSION_DESC'].
                                "</p>";
                                echo" <br><br><br></div></div> ";
                            
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