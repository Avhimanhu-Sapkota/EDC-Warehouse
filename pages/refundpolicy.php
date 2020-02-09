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
        <title> Journals - EDC Warehouse </title>
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
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
    <img class="image-fluid" src="../images/cover3.jpg" alt="Cover Image" height="300" style="width:100%">
            
            <div class="empty-box"></div>    
            <h3 style="text-align:center">R E F U N D &nbsp;&nbsp;&nbsp;P O L I C Y</h3>
            <div class="empty-box"></div>

            <div class='container'>
            <p style="text-align:justify"> 
                To place a refund, return or exchange request for an order placed with EDC Warehouse, You would need to contact EDC Warehouse via email 
                by phone or by accessing your account with EDC Warehouse.
            </p>  
            <p style="text-align:justify"> 
                Please have your order number available and provide a reason for your request in order to speed up your refund process. Your request will 
                be reviewed within a 2 days standard response period and we will notify you via email of the results. We reserve the right to extend the 
                standard response time in exceptional cases with a prior notice to you.
            </p>  
            <p style="text-align:justify"> 
                In cases of Direct Debit, the refund request can be processed only after a 6 weeks period from the payment date, period needed for your bank 
                process settlement to complete. EDC Warehouse will only review and respond to your refund request after these 6 weeks period ends.
            </p>  
            <p style="text-align:justify"> 
                Refund, returns or exchanges request are accepted up to 30 days from the date of placing the Order with EDC Warehouse. EDC Warehouse may grant 
                extensions to this period for some special cases and Products at its discretion.
            </p>  
            <p style="text-align:justify"> 
                If you choose to pay by check or money order you may cancel your Order before making the payment or in case the payment is not received 
                by us in 30 days EDC Warehouse will cancel you Order.
            </p>  
            <p style="text-align:justify"> 
                You may submit a request to cancel your order on the same day the order was placed. Please note that if the Order is already shipped or delivered 
                we will not be able to approve the cancelation request.
            </p>  
            <p style="text-align:justify"> 
                Some products have special conditions for returns as described in the Order or Product materials delivered ("Products terms") so please read 
                the carefully before making a request with EDC Warehouse. In case of misunderstandings between EDC Warehouse Refund Policy and the Product terms, the 
                present Refund policy will prevail. Shipping costs are non-refundable, except if due to EDC Warehouse error, when you need to contact EDC Warehouse and 
                make a formal request.
            </p>  
            </div>
            <div class="empty-box"></div> 
        <hr style="width:5%;border:1.5px solid black" >
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