<?php
    session_start();
  
    if (empty($_SESSION['username'])){
        include ('header.php');
    }
    else{
        include ('loggedheader.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <!--Head of the webpage-->
    <head>
        <!--Icon Image that displays in the head of the webpage-->
        <link rel="shortcut icon" href="../images/icon.ico" />
        <!--Title of the page-->
        <title> Manage Customer - EDC Warehouse </title>
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
        <h2 style="text-align:center">Manage Customers</h2>
        <div class="empty-box"></div>   
        
        <div class="container" style="overflow-x:auto;">
            <a href="add-customer.php" class="nav-link">Add a New Customer </a>
            <table border=1 cellpadding="5" cellspacing="5" >            
                <thead>
                    <tr>
                        <th>User_ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Contact No</th>
                        <th>Age - Group</th>
                        <th>User Type</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include ('connection.php');
                        
                        $sql="SELECT * FROM system_user";
                        $qry=mysqli_query($db,$sql);

                        while($row=mysqli_fetch_assoc($qry)){
                            echo "<tr>
                                    <th>".$row['USER_ID']."</th>
                                    <th>".$row['USER_FULLNAME']."</th>
                                    <th>".$row['USER_EMAIL']."</th>
                                    <th>".$row['USER_NAME']."</th>
                                    <th>".$row['USER_PASSWORD']."</th>
                                    <th>".$row['USER_CONTACTNO']."</th>
                                    <th>".$row['USER_AGEGROUP']."</th>
                                    <th>".$row['USER_TYPE']."</th>
                                    <th><a href=edit-customer.php?cid=".$row['USER_ID']." >EDIT </a>| <a href=delete-customer.php?cid=".$row['USER_ID']." >DELETE</a> </th>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class="empty-box"></div> 
        <div class="empty-box"></div> 
        
        <?php
            if (empty($_SESSION['username'])){
                include ('footer.html');
            }
            else{
                include ('loggedfooter.php');
            }
        ?>
    </body>
</html>