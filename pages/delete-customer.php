<?php
    ob_start();
    session_start();
  
    if (empty($_SESSION['username'])){
        include ('header.php');
    }
    else{
        include ('loggedheader.php');
    }
    
    if(isset($_GET['cid'])){
        $deleteID=$_GET['cid'];
        
        $sql="DELETE FROM system_user WHERE USER_ID=$deleteID";
        include ('connection.php');
        $qry=mysqli_query($db, $sql);
        
        if($qry){
   	 	    header('Location: manage-customer.php');
   	    }
   	    else{
            header('Location: manage-customer.php');
        }
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