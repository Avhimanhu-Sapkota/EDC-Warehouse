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
        <title> Manage Products - EDC Warehouse </title>
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
        <h2 style="text-align:center">Manage Products</h2>
        <div class="empty-box"></div>   
        
        <div class="container" style="overflow-x:auto;">
            <a href="addproduct.php" class="nav-link">Add a New Product </a>
            <table border=1 cellpadding="5" cellspacing="5" >            
                <thead>
                    <tr>
                        <th>Product_ID</th>
                        <th>Product_Name</th>
                        <th>Product_Description</th>
                        <th>Product_Quantity</th>
                        <th>Product_Price</th>
                        <th>Product_Rating</th>
                        <th>Quantity Sold</th>
                        <th>Product_Release_date</th>
                        <th>Product_Image</th>
                        <th>Category_ID</th>
                        <th>Profession_ID</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       include ('connection.php');
                        
                        $sql="SELECT * FROM product";
                        $qry=mysqli_query($db,$sql);

                        while($row=mysqli_fetch_assoc($qry)){
                            echo "<tr>
                                    <th>".$row['PRODUCT_ID']."</th>
                                    <th>".$row['PRODUCT_NAME']."</th>
                                    <th>".$row['PRODUCT_DESCRIPTION']."</th>
                                    <th>".$row['PRODUCT_QUANTITY']."</th>
                                    <th>".$row['PRODUCT_PRICE']."</th>
                                    <th>".$row['PRODUCT_RATING']."</th>
                                    <th>".$row['QUANTITY_SOLD']."</th>
                                    <th>".$row['PRODUCT_RELEASEDATE']."</th>
                                    <th>".$row['PRODUCT_IMAGE_NAME']."</th>
                                    <th>".$row['fk1_CATEGORY_ID']."</th>
                                    <th>".$row['fk3_PROFESSION_ID']."</th>
                                    <th><a href=edit-product.php?cid=".$row['PRODUCT_ID']." >EDIT </a>| <a href=delete-product.php?cid=".$row['PRODUCT_ID']." >DELETE</a> </th>
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