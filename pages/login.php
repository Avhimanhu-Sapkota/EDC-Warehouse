<?php
    ob_start();
    session_start();
    include('header.php');
    
    include ('connection.php');
    if(isset($_POST['sub_button'])){

        $username=mysqli_real_escape_string($db,$_POST['username']);
        $password=mysqli_real_escape_string($db,$_POST['password']);

        $username=trim($username);
        $password=trim($password);

            $password=md5($password);
        
            $sql="SELECT * FROM system_user WHERE USER_NAME='$username' and USER_PASSWORD='$password'";
            
            $result=mysqli_query($db,$sql);
            
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count=mysqli_num_rows($result);
            
            if($count==1){
                $_SESSION['username']=$username;
                $_SESSION['userid']==$row['USER_ID'];
                header("Location: index.php");
                ob_end_fluch();
            }
            else{
                
                $sql="SELECT * FROM system_user WHERE USER_NAME='$username'";
                $result=mysqli_query($db,$sql);
                if(mysqli_fetch_row($result)>1){
                    $message = "PLEASE ENTER CORRECT LOGIN CREDENTIALS !!!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
                else{
                    $message = "USER DOES NOT EXIST !!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                }
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
        <title> Login - EDC Warehouse </title>
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
        <h2 style="text-align:center">Log In</h2>
        <div class="empty-box"></div>    
        <form method="post" action="login.php" class="sign-up-form"> 
            <table id="form-table">
                <tr class="table-row">
                    <td class="table-col"> USERNAME : </td>
                    <td><input type="text" name="username" class="textInput" autocomplete="off" value="<?php if(isset($username)){echo $username;} ?>" required ></td>
                </tr>
                <tr class="table-row">
                    <td class="table-col"> PASSWORD : </td>
                    <td><input type="password" name="password" class="textInput" required ></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                    <div Style="height:50px"></div>    
                    </td>
                </tr>
                <tr class="table-row">
                    <td colspan="2" style="text-align:center"><input type="submit" name="sub_button" value="Log In" class="button"> </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">Do not have an account? <a href="signup.php">Sign Up Here</a> </td>
                </tr>
            </table>
        </form>
        <div class="empty-box"></div>    
        <div class="empty-box"></div>    
    </body>
</html>

<?php
    include('footer.html');
?>