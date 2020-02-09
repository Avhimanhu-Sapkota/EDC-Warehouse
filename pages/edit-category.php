<?php
	ob_start();
	session_start();
	
	if (empty($_SESSION['username'])){
		include ('header.php');
	}
	else{
		include ('loggedheader.php');
	}

	if(isset($_POST['EditCategory'])){
		if (!empty($_FILES['images']['name'])){
			$cat_image= $_FILES['images']['name'];
        	$file_loc= $_FILES['images']['tmp_name'];
        	$file_store="../images/".$cat_image;

			move_uploaded_file($file_loc, $file_store);
		}
		else{
			$cat_image=$_POST['loadimage'];
		}
		
		extract($_POST);

		$sql="UPDATE category SET CATEGORY_ID='$categoryid',CATEGORY_NAME='$categoryname',CATEGORY_DESCRIPTION='$categorydesc',CATEGORY_IMAGE='$cat_image'
			  WHERE CATEGORY_ID=$categoryid";

		include ('connection.php');
		$qry=mysqli_query($db, $sql);

		if($qry){
			header('Location: manage-category.php');
		}
		else{
			header('Location: manage-category.php');
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
        <title>Edit Category - EDC Warehouse</title>
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
		<h2 style="text-align:center">Edit Category</h2>
		<div class="empty-box"></div>
		
		<?php
   			if(isset($_GET['cid'])){
   	 			$editID=$_GET['cid'];
				 
				include ('connection.php');
     			$sql="SELECT * FROM category WHERE CATEGORY_ID=$editID";
     			$qry=mysqli_query($db, $sql);
        
   	 			echo "<table border=0 cellpadding=6 cellspacing=10 style='margin: auto auto;'>";
   	 			echo "<form method='POST' name='EditCategory' action='' enctype='multipart/form-data'> ";
    
   	 			while($row=mysqli_fetch_array($qry)){
					echo"<tr>
						  	<td>CATEGORY ID</td>
							<td><input type='text' name='categoryid' value=".$row['CATEGORY_ID']." ></td>
						</tr>";

					echo "<tr>
							<td>CATEGORY NAME</td>
							<td><input type='text' name='categoryname' value=".$row['CATEGORY_NAME']."></td>
						</tr>";
					
					echo "<tr>
						<td>CATEGORY IMAGE</td>
						<td><input type='file' name='images' value=".$row['CATEGORY_IMAGE'].">UPLOAD FROM DATABASE: <select name='loadimage'>";
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
							<td>CATEGORY DESCRIPTION</td>
							<td><textarea name='categorydesc' value=".$row['CATEGORY_DESCRIPTION']."></textarea></td>
						</tr>";
				}

				echo "<tr>
						<td></td>
						<td><input type='submit' name='EditCategory' value='Update' class='button'></td>
					</tr>";
		
				echo "</form></table>" ;
        		echo"<div class='empty-box'></div> ";  
   			}
   			else{
       			header('Location: manage-category.php');
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
            CKEDITOR.replace('categorydesc');
        </script>
	</body>
</html>