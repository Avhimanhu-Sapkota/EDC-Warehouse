<?php
	ob_start();
	session_start();
	
	if (empty($_SESSION['username'])){
		include ('header.php');
	}
	else{
		include ('loggedheader.php');
	}

	if(isset($_POST['EditProfession'])){
		if (!empty($_FILES['images']['name'])){
			$prof_image= $_FILES['images']['name'];
        	$file_loc= $_FILES['images']['tmp_name'];
        	$file_store="../images/".$prof_image;

			move_uploaded_file($file_loc, $file_store);
		}
		else{
			$prof_image=$_POST['loadimage'];
		}
		extract($_POST);

		$sql="UPDATE profession SET PROFESSION_ID='$professionid',PROFESSION_NAME='$professionname',PROFESSION_DESC='$professiondesc',PROFESSION_IMAGE='$file_image'
			  WHERE PROFESSION_ID=$professionid";

		include ('connection.php');					
		$qry=mysqli_query($db, $sql);

		if($qry){
			header('Location: manage-profession.php');
		}
		else{
			header('Location: manage-profession.php');
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
        <title>Edit Profession - EDC Warehouse</title>
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
		<h2 style="text-align:center">Edit Profession</h2>
		<div class="empty-box"></div>

		<?php
			if(isset($_GET['cid'])){
				$editID=$_GET['cid'];
					
				include ('connection.php');
				$sql="SELECT * FROM profession WHERE PROFESSION_ID=$editID";
				$qry=mysqli_query($db, $sql);
					
				echo "<table border=0 cellpadding=6 cellspacing=10 style='margin: auto auto;'>";
				echo "<form method='POST' name='EditProfession' action='' enctype='multipart/form-data'>";
				
				while($row=mysqli_fetch_array($qry)){
					echo "<tr>
							<td>PROFESSION ID</td>
							<td><input type='text' name='professionid' value=".$row['PROFESSION_ID']." ></td>
						</tr>";

					echo "<tr>
							<td>PROFESSION NAME</td>
							<td><input type='text' name='professionname' value=".$row['PROFESSION_NAME']."></td>
						</tr>";
					
					echo "<tr>
						<td>PROFESSION IMAGE</td>
						<td><input type='file' name='updateimage' value=".$row['PROFESSION_IMAGE'].">UPLOAD FROM DATABASE: <select name='loadimage'>";
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
							<td>PROFESSION DESCRIPTION</td>
							<td><textarea' name='professiondesc' value=".$row['PROFESSION_DESC']."></textarea></td>
						</tr>";
				}

				echo "<tr>
						<td></td>
						<td>
							<input type='submit' name='EditProfession' value='Update' class='button'>
						</td>
					</tr>";

				echo"</form></table>" ;
				echo"<div class='empty-box'></div> ";  

			}
				
			else{
					header('Location: manage-profession.php');
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
            CKEDITOR.replace('professiondesc');
        </script>
	</body>
</html>