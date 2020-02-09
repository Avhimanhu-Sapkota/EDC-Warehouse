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
        <title> Journals - EDC Warehouse </title>
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
        <img class="image-fluid" src="../images/cover3.jpg" alt="Cover Image" height="300" style="width:100%">
            
        <div class="empty-box"></div>    
        <h6 style="text-align:center">Explore Our</h6>
        <h3 style="text-align:center">J O U R N A L S</h3>

        <div class="container">
            <div class="row">
                <?php
                    include ('connection.php');
                    $sql="SELECT * FROM journal";
                    $qry=mysqli_query($db, $sql);

                    while($row=mysqli_fetch_array($qry)){
                        $desc = $row['JOURNAL_BODY'];
                        $strcut = substr($desc,0,85);
                        echo "<div class='col-xl-4 col-sm-12'> 
                            <div class='card h-100'>";
                            echo"<a href=journalview.php?jid=".$row['JOURNAL_NO']."><img class='card-img-top image-fluid' src='../images/".$row['JOURNAL_IMAGE']." ' alt='' height='100%' width='100%'></a>";
                            echo" <div class='card-body'> <h4 class='card-title'> <a style='color:#17202A' href=journalview.php?jid=".$row['JOURNAL_NO'].">".$row['JOURNAL_TITLE']."</a></h4>";
                            echo"<p class='card-text'>".$strcut.".....</p></div>";
                            echo"<div class='card-footer'><small> Writer: ".$row['JOURNAL_AUTHOR']."</small></div></div></div>";        
                    }
                ?>
            </div>
        </div>
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