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

        <div class="container">
            <?php
                include ('connection.php');
                $journalID=$_GET['jid'];
                $sql="SELECT * FROM journal WHERE JOURNAL_NO=$journalID";
                $qry=mysqli_query($db, $sql);

                while($row=mysqli_fetch_array($qry)){
                    echo"<h2 class='card-title' style='text-transform:uppercase;'> ".$row['JOURNAL_TITLE']."</h2>";
                    echo"<p style='text-transform:uppercase;'>AN ARTICLE BY: ".$row['JOURNAL_AUTHOR']."</p>";
                    echo "<img src='../images/".$row['JOURNAL_IMAGE']."' height='100%' width='100%'> <br><br>";
                    echo $row['JOURNAL_BODY'];
                }
            ?>
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