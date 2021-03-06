<?php
    ob_start();
    session_start();
    
    if (empty($_SESSION['username'])){
        include ('header.php');
    }
    else{
        include ('loggedheader.php');
    }

    if(isset($_POST['AddProduct'])){
        if (!empty($_FILES['productimage']['name'])){
			$file_name= $_FILES['productimage']['name'];
        	$file_tmp_loc= $_FILES['productimage']['tmp_name'];
        	$file_store="../images/".$file_name;

			move_uploaded_file($file_tmp_loc, $file_store);
		}
		else{
			$file_name=$_POST['loadimage'];
		}
        extract($_POST);
        $sql="INSERT INTO product(PRODUCT_NAME,PRODUCT_DESCRIPTION,PRODUCT_QUANTITY,PRODUCT_PRICE,PRODUCT_RATING,QUANTITY_SOLD,PRODUCT_RELEASEDATE,PRODUCT_IMAGE_NAME,fk1_CATEGORY_ID,fk3_PROFESSION_ID)
	          VALUES('$productname','$productdesc','$productquantity','$productprice','$productrating','$quantitysold','$releasedate','$file_name','$category','$profession');";
	
        include ('connection.php');
        $qry=mysqli_query($db, $sql);
    
	    if($qry){
		    header('Location: manage-product.php');
	    }
	    else{
            header('Location: manage-product.php');
            ob_end_fluch();
        }
    }
?>  

<!doctype html>
    <head>
        <!--Icon Image that displays in the head of the webpage-->
        <link rel="shortcut icon" href="../images/icon.ico" />
        <!--Title of the page-->
        <title>Add Product - EDC Warehouse</title>
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
        <h2 style="text-align:center">Add Product</h2>
        <div class="empty-box"></div>

        <table border=0 cellpadding=6 cellspacing=10 style='margin: auto auto;'>
            <form action="" name="AddProduct" method="POST" enctype="multipart/form-data">
            <tr>
 	                <td>PRODUCT NAME</td>
                    <td><input type='text' name='productname' autocomplete="off" required></td>
                </tr>
                
                <tr>
                    <td>PRODUCT QUANTITY</td>
                    <td><input type='text' name='productquantity' autocomplete="off" required></td> 
                </tr>
                <tr>
                    <td>PRODUCT PRICE</td>
                    <td><input type='text' name='productprice' autocomplete="off" required></td> 
                </tr>
                <tr>
                    <td>PRODUCT RATING</td>
                    <td><input type='text' name='productrating' autocomplete="off" ></td> 
                </tr>
                <tr>
                    <td>QUANTITY SOLD</td>
                    <td><input type='text' name='quantitysold' autocomplete="off" required></td> 
                </tr>
                <tr>
                    <td>RELEASE DATE</td>
                    <td><input type='date' name='releasedate' autocomplete="off" required></td> 
                </tr>
                <tr>
                    <td>PRODUCT IMAGE </td>
                    <td><input type='file' name='productimage'> UPLOAD FROM DATABASE: <select name='loadimage'> 
							<?php
								$path='../images/';
								if(is_dir($path)){
									$files=scandir($path);
									for($i=0;$i<count($files);$i++){
										if($files[$i] != '.' && $files[$i] !='..'){
											echo"<option value='$files[$i]'> $files[$i] </option>";
										}
									}
								}
							?>
					</select></td> 
                </tr>
                <tr>
                    <td>PRODUCT CATEGORY ID</td>
                    <td><input type='text' name='category' autocomplete="off" required></td>
                </tr>
                <tr>
                    <td>PRODUCT PROFESSION ID</td>
                    <td><input type='text' name='profession' autocomplete="off" ></td> 
                </tr>
                <tr>
                    <td>PRODUCT DESCRIPTION</td>
                    <td><textarea name='productdesc'></textarea></td> 
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="AddProduct" value="Add Product" class='button'></p>
                    </td>
                </tr>
            </form>
        </table>    
        <div class='empty-box'></div>
        <script src="../ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('productdesc');
        </script>
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