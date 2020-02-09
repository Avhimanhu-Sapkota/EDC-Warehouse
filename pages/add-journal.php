
<?php
    ob_start();
    session_start();
  
    if (empty($_SESSION['username'])){
        include ('header.php');
    }
    else{
        include ('loggedheader.php');
    }

    if(isset($_POST['AddJournal'])){

        if (!empty($_FILES['images']['name'])){
			$journal_image= $_FILES['images']['name'];
        	$file_loc= $_FILES['images']['tmp_name'];
        	$file_store="../images/".$journal_image;

			move_uploaded_file($file_loc, $file_store);
		}
		else{
			$journal_image=$_POST['loadimage'];
        }
        
	    extract($_POST);

	    $sql="INSERT INTO journal (JOURNAL_TITLE,JOURNAL_BODY,JOURNAL_AUTHOR,JOURNAL_RELEASEDATE,JOURNAL_CATEGORY,JOURNAL_IMAGE)
	          VALUES('$journaltitle','$journalbody','$journalauthor','$releasedate','$journalcategory','$journal_image')";
	   
       include ('connection.php');
        $qry=mysqli_query($db, $sql);
        
	    if($qry){
		    header('Location: manage-journal.php');
	    }
	    else{
            header('Location: manage-journal.php');
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
        <title>Add Journal - EDC Warehouse </title>
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
        <h2 style="text-align:center">Add Journal</h2>
        <div class="empty-box"></div>

        <table border=0 cellpadding=6 cellspacing=10 style='margin: auto auto;'>
            <form method='POST' name='AddJournal' action='' enctype="multipart/form-data">
                <tr>
   	 	            <td>JOURNAL TITLE</td>
                    <td><input type='text' name='journaltitle' autocomplete="off" required></td>
                </tr>
   		        
                <tr>
   	 	            <td>JOURNAL AUTHOR</td>
                    <td><input type='text' name='journalauthor' autocomplete="off" required></td>
                </tr>
                <tr>
   	 	            <td>JOURNAL RELEASE DATE</td>
                    <td><input type='date' name='releasedate' autocomplete="off" required></td>
                </tr>
                <tr>
   	 	            <td>JOURNAL CATEGORY</td>
                    <td><input type='text' name='journalcategory' autocomplete="off" required></td>
                </tr>
                <tr>
   	 	            <td>JOURNAL IMAGE</td>
                    <td><input type='file' name='images'> UPLOAD FROM DATABASE: <select name='loadimage'> 
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
   	 	            <td>JOURNAL BODY</td>
                    <td>
                        <textarea name="journalbody" rows="5" cols="20" ></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type='submit' name='AddJournal' value='Add Journal' class='button'></td>
                </tr>
            </form>
        </table>
        
        <div class='empty-box'></div>

        <script src="../ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('journalbody');
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
