<?php
	ob_start();
  	if (empty($_SESSION['username'])){
    	include ('header.php');
	}
	else{
    	include ('loggedheader.php');
	}

	if(isset($_POST['EditCustomer'])){
		extract($_POST);

		$sql="UPDATE system_user SET USER_FULLNAME='$fullname',USER_EMAIL='$email',USER_NAME='$username',USER_PASSWORD='$password',
	      	  USER_CONTACTNO='$contact',USER_AGEGROUP='$agegroup',USER_TYPE='$usertype' WHERE USER_ID=$userid";

include ('connection.php');
        $qry=mysqli_query($db, $sql);
	
		if($qry){
			header('Location: manage-customer.php');
		}
		else{
			header('Location: manage-customer.php');
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
        <title>Edit Customer - EDC Warehouse</title>
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
		<h2 style="text-align:center">Edit Customer</h2>
		<div class="empty-box"></div>

		<?php
			if(isset($_GET['cid'])){
				$editID=$_GET['cid'];
				
				include ('connection.php');
				$sql="SELECT * FROM system_user WHERE USER_ID=$editID";
				$qry=mysqli_query($db, $sql);
				
				echo "<table border=0 cellpadding=6 cellspacing=10 style='margin: auto auto;'>>";
				echo "<form method='POST' name='editCustomer' action=''>";
			
				while($row=mysqli_fetch_array($qry)){
					echo "<tr>
							<td>USER ID</td>
							<td><input type='text' name='userid' value=".$row['USER_ID']." ></td>
						</tr>";

					echo "<tr>
							<td>FULLNAME</td>
							<td><input type='text' name='fullname' value=".$row['USER_FULLNAME']."></td>
						</tr>";

					echo "<tr>
							<td>EMAIL</td>
							<td><input type='text' name='email' value=".$row['USER_EMAIL']."></td>
						</tr>";

					echo "<tr>
							<td>USERNAME</td>
							<td><input type='text' name='username' value=".$row['USER_NAME']."></td>
						</tr>";

					echo "<tr>
							<td>PASSWORD</td>
							<td><input type='text' name='password' value=".$row['USER_PASSWORD']."></td>
						</tr>";

					echo "<tr>
							<td>CONTACT NO</td>
							<td><input type='text' name='contact' value=".$row['USER_CONTACTNO']."></td>
						</tr>";

					echo "<tr>
							<td>AGE-GROUP</td>
							<td><select name='agegroup' class='textInput'>
										<option value='1-18'>1-18</option>
										<option value='19-30' selected>19-30</option>
										<option value='31-60'>31-60</option>
										<option value='60-100'>60-100</option>
								</select>
							</td>
						</tr>";
						
					echo "<tr>
							<td>USER_TYPE</td>
							<td><input type='number' name='usertype' value=".$row['USER_TYPE']."></td>
						</tr>";
				}

				echo "<tr>
					<td></td>
					<td>
						<input type='submit' name='EditCustomer' value='Update' class='button'>
					</td>
				</tr>";

				echo "</form></table>";
				echo"<div class='empty-box'></div>";
			}
			else{
				header('Location: manage-customer.php');
				ob_end_fluch();
			}

			if (empty($_SESSION['username'])){
				include ('footer.html');
			}
			else{
				include ('loggedfooter.php');
			}				
		?>
	</body>
</html>