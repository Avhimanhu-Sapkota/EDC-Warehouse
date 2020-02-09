<?php
    ob_start();
    session_start();
    
    if (empty($_SESSION['username'])){
        include ('header.php');
    }
    else{
        include ('loggedheader.php');
    }

    if(isset($_POST['EditProduct'])){
        if (!empty($_FILES['updateimage']['name'])){
			$file_image= $_FILES['updateimage']['name'];
        	$file_location= $_FILES['updateimage']['tmp_name'];
        	$file_store="../images/".$file_image;

			move_uploaded_file($file_location, $file_store);
		}
		else{
			$file_image=$_POST['loadimage'];
		}
        extract($_POST);

        $sql="UPDATE product SET PRODUCT_ID='$productid',PRODUCT_NAME='$productname',PRODUCT_DESCRIPTION='$productdesc',PRODUCT_QUANTITY='$productquantity',PRODUCT_PRICE='$productprice',
            PRODUCT_RATING='$productrating',QUANTITY_SOLD='$quantitysold',PRODUCT_RELEASEDATE='$productrelease',PRODUCT_IMAGE_NAME='$file_image',fk1_CATEGORY_ID='$category',
            fk3_PROFESSION_ID='$profession' WHERE PRODUCT_ID=$productid";

include ('connection.php');
        $qry=mysqli_query($db, $sql);
        
        if($qry){
		    header('Location: manage-product.php');
	    }
	    else{
            header('Location: manage-product.php');
	    }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <!--Head of the webpage-->
    <head>
        <!--Icon Image that displays in the head of the webpage-->
        <link rel="shortcut icon" href="../images/icon.ico" />
        <!--Title of the page-->
        <title>Add Category - EDC Warehouse</title>
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
        <h2 style="text-align:center">Edit Product</h2>
        <div class="empty-box"></div>

        <?php
            if(isset($_GET['cid'])){
                $editID=$_GET['cid'];
                    
                include ('connection.php');
                $sql="SELECT * FROM product WHERE PRODUCT_ID=$editID";
                $qry=mysqli_query($db, $sql);
                    
                echo "<table border=0 cellpadding=6 cellspacing=10 style='margin: auto auto;'>";
                echo "<form method='POST' name='EditCategory' action='' enctype='multipart/form-data'>";
                
                while($row=mysqli_fetch_array($qry)){
                    echo "<tr>
                            <td>PRODUCT ID</td>
                            <td><input type='text' name='productid' value=".$row['PRODUCT_ID']." ></td>
                        </tr>";
                    
                    echo "<tr>
                        <td>PRODUCT NAME</td>
                        <td><input type='text' name='productname' value=".$row['PRODUCT_NAME']." ></td>
                    </tr>";
                    
                    echo "<tr>
                        <td>PRODUCT QUANTITY</td>
                        <td><input type='text' name='productquantity' value=".$row['PRODUCT_QUANTITY']."></td>
                    </tr>";
                    
                    echo "<tr>
                        <td>PRODUCT PRICE</td>
                        <td><input type='text' name='productprice' value=".$row['PRODUCT_PRICE']."></td>
                    </tr>";
                    
                    echo "<tr>
                        <td>PRODUCT RATING</td>
                        <td><input type='text' name='productrating' value=".$row['PRODUCT_RATING']."></td>
                    </tr>";
                    
                    echo "<tr>
                        <td>QUANTITY SOLD</td>
                        <td><input type='text' name='quantitysold' value=".$row['QUANTITY_SOLD']."></td>
                    </tr>";
                    
                    echo "<tr>
                        <td>RELEASE DATE</td>
                        <td><input type='date' name='productrelease' value=".$row['PRODUCT_RELEASEDATE']."></td>
                    </tr>";
                    
                    echo "<tr>
                        <td>PRODUCT IMAGE NAME</td>
                        <td><input type='file' name='updateimage' value=".$row['PRODUCT_IMAGE_NAME'].">UPLOAD FROM DATABASE: <select name='loadimage'>";
                        $path='../images/';
                        if(is_dir($path)){
                            $files=scandir($path);
                            for($i=0;$i<count($files);$i++){
                                if($files[$i] != '.' && $files[$i] !='..'){
                                    echo"<option value='$files[$i]'> $files[$i] </option>";
                                }
                            }
                        }
                    echo"
                </select></td>
                    </tr>";
                    
                    echo "<tr>
                        <td>PRODUCT CATEGORY ID</td>
                        <td><input type='text' name='category' value=".$row['fk1_CATEGORY_ID']."></td>
                    </tr>";
                
                    echo "<tr>
                        <td>PRODUCT PROFESSION ID</td>
                        <td><input type='text' name='profession' value=".$row['fk3_PROFESSION_ID']."></td>
                    </tr>";

                    echo "<tr>
                        <td>PRODUCT DESCRIPTION</td>
                        <td><textarea name='productdesc' value=".$row['PRODUCT_DESCRIPTION']."></textarea></td>
                    </tr>";

                }

                echo "<tr>
                        <td></td>
                        <td>
                            <input type='submit' name='EditProduct' value='Update' class='button'>
                        </td>
                    </tr>";
                    
                echo "</form></table>" ;
                echo"<div class='empty-box'></div> ";  
            }
            else{
                header('Location: manage-product.php');
                ob_end_fluch();
            }
                    
            if (empty($_SESSION['username'])){
                include ('footer.html');
            }
            else{
                include ('loggedfooter.php');
            }
        ?>
        <script src="../ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('productdesc');
        </script>
    </body>
</html>