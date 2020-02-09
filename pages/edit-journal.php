<?php
    ob_start();
    session_start();
    
    if (empty($_SESSION['username'])){
        include ('header.php');
    }
    else{
        include ('loggedheader.php');
    }

    if(isset($_POST['EditJournal'])){
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

	    $sql="UPDATE journal SET JOURNAL_NO='$journalno',JOURNAL_TITLE='$journaltitle',JOURNAL_BODY='$journalbody',JOURNAL_AUTHOR='$journalauthor',
              JOURNAL_RELEASEDATE='$releasedate',JOURNAL_CATEGORY='$journalcategory',JOURNAL_IMAGE='$journal_image' WHERE JOURNAL_NO=$journalno";

        include ('connection.php');                  
        $qry=mysqli_query($db, $sql);
        
	    if($qry){
		    header('Location: manage-journal.php');
	    }
	    else{
            header('Location: manage-journal.php');
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
        <title>Edit Journal - EDC Warehouse</title>
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
	
	<body>
        <div class="empty-box"></div>    
        <h2 style="text-align:center">Edit Journal</h2>
        <div class="empty-box"></div>

        <?php
            if(isset($_GET['cid'])){
                $editID=$_GET['cid'];
                    
                include ('connection.php');  
                $sql="SELECT * FROM journal WHERE JOURNAL_NO=$editID";
                $qry=mysqli_query($db, $sql);
                    
                echo "<table border=0 cellpadding=6 cellspacing=10 style='margin: auto auto;'>";
                echo "<form method='POST' name='EditJournal' action='' enctype='multipart/form-data'>";
                
                while($row=mysqli_fetch_array($qry)){
                    echo "<tr>
                            <td>JOURNAL NO</td>
                            <td><input type='text' name='journalno' value=".$row['JOURNAL_NO']." ></td>
                        </tr>";

                    echo "<tr>
                            <td>JOURNAL TITLE</td>
                            <td><input type='text' name='journaltitle' value=".$row['JOURNAL_TITLE']."></td>
                        </tr>";
                        
                    echo "<tr>
                            <td>JOURNAL AUTHOR</td>
                            <td><input type='text' name='journalauthor' value=".$row['JOURNAL_AUTHOR']."></td>
                        </tr>";    

                    echo "<tr>
                            <td>JOURNAL RELEASE DATE</td>
                            <td><input type='date' name='releasedate' value=".$row['JOURNAL_RELEASEDATE']."></td>
                        </tr>";
                    
                    echo "<tr>
                            <td>JOURNAL CATEGORY</td>
                            <td><input type='text' name='journalcategory' value=".$row['JOURNAL_CATEGORY']."></td>
                        </tr>";

                    echo "<tr>
                        <td>JOURNAL IMAGE</td>
                        <td><input type='file' name='images' value=".$row['JOURNAL_IMAGE'].">UPLOAD FROM DATABASE: <select name='loadimage'>";
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
                            <td>JOURNAL BODY</td>
                            <td><textarea name='journalbody' rows='5' cols='20' value=".$row['JOURNAL_BODY']."></textarea></td>
                        </tr>";
                }

                echo "<tr>
                        <td></td>
                        <td>
                            <input type='submit' name='EditJournal' value='Update' class='button'>
                        </td>
                    </tr>";

                echo "</form></table>" ;
                echo"<div class='empty-box'></div> ";  
            }
            else{
                header('Location: manage-journal.php');
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
            CKEDITOR.replace('journalbody');
        </script>
    </body>
</html>