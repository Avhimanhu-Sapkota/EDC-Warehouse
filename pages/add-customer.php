<?php
    ob_start();
    session_start();

    if (empty($_SESSION['username'])){
    	include ('header.php');
	}
	else{
    	include ('loggedheader.php');
    }

    include ('connection.php');
    if (isset($_POST['sub_button'])){
        session_start();
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $conf_password=$_POST['password2'];
        $agegroup=$_POST['agegroup'];
        $contact=$_POST['contact'];
        $terms=$_POST['terms'];
        $usertype=0;

        include ('connection.php');
        $sql="SELECT * FROM system_user WHERE USER_NAME='$username'";
        $result=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);            
        $count=mysqli_num_rows($result);

        if (!(FILTER_VAR($email, FILTER_VALIDATE_EMAIL))){
            $message = "ENTER CORRECT EMAIL FORMAT !!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else if(preg_match('/[^a-z_\-0-9]/i', $username)){
            $message = "USERNAME SHOULD ONLY HAVE ALPHA-NUMERIC CHARACTERS !!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else if($count > 0){
            $message = "USERNAME ALREADY EXIST. PLEASE ENTER SOME OTHER USERNAME !!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else if (!(preg_match("/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/",$password))){
            $message = "PASSWORD MUST BE AT LEASR 6 CHARACTERS LONG AND MUST CONTAIN AT LEAST ONE CAPTIAL LETTER, ONE NUMBER AND A SYMBOL !!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else if ($password != $conf_password){
            $message = "PASSWORD DO NOT MATCH WITH CONFIRM PASSWORD!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else if (empty($terms)){
            $message = "PLEASE ACCEPT TERMS AND CONDITIONS !!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else{
            $password=md5($password);
            $sql="INSERT INTO system_user (USER_FULLNAME, USER_EMAIL,USER_NAME, USER_PASSWORD, USER_CONTACTNO, USER_AGEGROUP, USER_TYPE)
                  VALUES ('$fullname','$email','$username','$password','$contact','$agegroup','$usertype')";
            $insert = mysqli_query($db,$sql);
            if ($insert){
                header("Location: login.php");
                ob_end_fluch();
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
        <title> Add Customer - EDC Warehouse </title>
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
        <h2 style="text-align:center">SIGN UP</h2>
        <div class="empty-box"></div>    

        <form method="post" action=" " class=""> 
            <table id="form-table">
                <tr class="table-row">
                    <td> FULL NAME : </td>
                    <td><input type="text" name="fullname" class="textInput" autocomplete="off" value="<?php if(isset($fullname)){echo $fullname;} ?>" required></td>
                </tr>
                <tr class="table-row">
                    <td> EMAIL : </td>
                    <td><input type="text" name="email" class="textInput" autocomplete="off" value="<?php if(isset($email)){echo $email;} ?>" required></td>
                </tr>
                <tr class="table-row">
                    <td> USERNAME : </td>
                    <td><input type="text" name="username" class="textInput" autocomplete="off" value="<?php if(isset($username)){echo $username;} ?>" required></td>
                </tr>
                <tr class="table-row">
                    <td> PASSWORD : </td>
                    <td><input type="password" name="password" class="textInput" autocomplete="off" required></td>
                </tr>
                <tr class="table-row">
                    <td class="table-col"> CONFIRM PASSWORD : </td>
                    <td><input type="password" name="password2" class="textInput" autocomplete="off" required></td>
                </tr>
                <tr class="table-row">
                    <td> AGE GROUP : </td>
                    <td>
                        <select name="agegroup" class="textInput" required>
                            <option value="1-18">1-18</option>
                            <option value="19-30" selected>19-30</option>
                            <option value="31-60">31-60</option>  
                            <option value="60-100">60-100</option>
                        </select>
                    </td>
                </tr>
                <tr class="table-row">
                    <td> CONTACT NO : </td>
                    <td><input type="number" name="contact" class="textInput" autocomplete="off" value="<?php if(isset($contact)){echo $contact;} ?>" required></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <div Style="height:50px"></div>    
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center"> 
                        <input type="checkbox" name="terms"> Accept terms and contiditions. 
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <div Style="height:50px"></div>    
                    </td>
                </tr>
                <tr class="table-row">
                    <td colspan="2" style="text-align:center">
                        <input type="submit" name="sub_button" value="Sign Up" class="button"> 
                    </td>
                </tr>
            </table>
        </form>

        <div class="empty-box"></div>    
        <div class="empty-box"></div>  

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