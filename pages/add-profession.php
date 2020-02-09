<?php
	ob_start();
	session_start();
	
	if (empty($_SESSION['username'])){
		include ('header.php');
	}
	else{
		include ('loggedheader.php');
	}

	if(isset($_POST['AddProfession'])){
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

		$sql="INSERT INTO profession(PROFESSION_NAME,PROFESSION_DESC,PROFESSION_IMAGE)
				VALUES('$professionname','$professiondesc','$prof_image')";
				
		include ('connection.php');
		$qry=mysqli_query($db, $sql);
		
		if($qry){
			header('Location: manage-profession.php');
		}
		else{
			header('Location: manage-profession.php');
			ob_end_fluch();
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
        <title>Add Profession - EDC Warehouse</title>
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
		<h2 style="text-align:center">Add Profession</h2>
		<div class="empty-box"></div>

		<table border=0 cellpadding=6 cellspacing=10 style='margin: auto auto;'>
			<form method='POST' name='AddProfession' action='' enctype="multipart/form-data">
				<tr>
   	 				<td>PROFESSION NAME</td>
					<td><input type='text' name='professionname' autocomplete="off" required></td> 
				</tr>
				
				<tr>
                    <td>PROFESSION IMAGE </td>
                    <td><input type="file" name="images">UPLOAD FROM DATABASE: <select name='loadimage'> 
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
   	 				<td>PROFESSION DESCRIPTION</td>
					<td><textarea name='professiondesc'></textarea></td> 
				</tr>
				<tr>
					<td></td>
					<td>
        				<input type='submit' name='AddProfession' value='Add Profession' class='button'>
					</td> 
				</tr>
			</form>
		</table>

		<div class='empty-box'></div>
		<script src="../ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('professiondesc');
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