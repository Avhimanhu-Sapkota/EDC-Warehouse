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
        <title> Manage Offer - EDC Warehouse </title>
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
        <h2 style="text-align:center">Manage Offers</h2>
        <div class="empty-box"></div>   
        
        <div class="container" style="overflow-x:auto;">
            <a href="add-offer.php" class="nav-link">Add a New Offer </a>
            <table border=1 cellpadding="5" cellspacing="5" >            
                <thead>
                    <tr>
                        <th>Offer_ID</th>
                        <th>Offer_Name</th>
                        <th>Offer_Description</th>
                        <th>Offer_startdate</th>
                        <th>Offer_enddate</th>
                        <th>Discount_Percent</th>
                        <th>Offer_Image</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include ('connection.php');
                        
                        $sql="SELECT * FROM offers";
                        $qry=mysqli_query($db,$sql);

                        while($row=mysqli_fetch_assoc($qry)){
                            echo "<tr>
                                    <th>".$row['OFFER_ID']."</th>
                                    <th>".$row['OFFER_NAME']."</th>
                                    <th>".$row['OFFER_DESCRIPTION']."</th>
                                    <th>".$row['OFFER_STARTDATE']."</th>
                                    <th>".$row['OFFER_ENDDATE']."</th>
                                    <th>".$row['DISCOUNT_PERCENT']."</th>
                                    <th>".$row['OFFER_IMAGE']."</th>
                                    <th><a href=edit-offer.php?cid=".$row['OFFER_ID']." >EDIT </a>| <a href=delete-offer.php?cid=".$row['OFFER_ID']." >DELETE</a> </th>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class="empty-box"></div> 
        <div class="empty-box"></div> 

        <?php
            if (empty($_SESSION['username'])){
                include ('footer.html');
            }
            else{
                include ('loggedfooter.php');
            }
        ?>
    </body>
</html>