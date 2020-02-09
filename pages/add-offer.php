<?php
	ob_start();
	session_start();
  
	if (empty($_SESSION['username'])){
    	include ('header.php');
	}
	else{
    	include ('loggedheader.php');
	}

	if(isset($_POST['AddOffer'])){
		if (!empty($_FILES['images']['name'])){
			$offer_image= $_FILES['images']['name'];
        	$file_loc= $_FILES['images']['tmp_name'];
        	$file_store="../images/".$offer_image;

			move_uploaded_file($file_loc, $file_store);
		}
		else{
			$offer_image=$_POST['loadimage'];
		}
		extract($_POST);

		$sql="INSERT INTO offers (OFFER_NAME,OFFER_DESCRIPTION,OFFER_STARTDATE,OFFER_ENDDATE,DISCOUNT_PERCENT,OFFER_IMAGE)
	      	  VALUES('$offername','$offerdesc','$startdate','$enddate','$discount','$offer_image')";
	   
	   include ('connection.php');
		$qry=mysqli_query($db, $sql);

		if($qry){
			header('Location: manage-offer.php');
		}
		else{
        	header('Location: manage-offer.php');
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
        <title>Add Offer - EDC Warehouse</title>
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
		<h2 style="text-align:center">Add Offer</h2>
		<div class="empty-box"></div>

		<table border=0 cellpadding=6 cellspacing=10 style='margin: auto auto;'>
			<form method='POST' name='AddOffer' action='' enctype="multipart/form-data">
				<tr>
   	 				<td>OFFER NAME</td>
					<td><input type='text' name='offername' autocomplete="off" required></td>
				</tr>
   	 			
            	<tr>
   	 				<td>OFFER START DATE</td>
					<td><input type='date' name='startdate' autocomplete="off" required></td>
				</tr>
            	<tr>
   	 				<td>OFFER END DATE</td>
					<td><input type='date' name='enddate' autocomplete="off" required></td>
				</tr>
            	<tr>
   	 				<td>DISCOUNT PERCENT</td>
					<td><input type='text' name='discount' required></td>
				</tr>
				<tr>
   	 				<td>OFFER IMAGE</td>
					<td><input type='file' name='images'>UPLOAD FROM DATABASE: <select name='loadimage'> 
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
   	 				<td>OFFER DESCRIPTION</td>
					<td><textarea name='offerdesc'></textarea></td>
				</tr>
            	<tr>
					<td></td>
					<td>
        				<input type='submit' name='AddOffer' value='Add Offer' class='button'>
					</td>
				</tr>
			</form>
		</table>
		<div class='empty-box'></div>

		<script src="../ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('offerdesc');
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
