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
        <title> Our Story - EDC Warehouse </title>
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
        <img class="image-fluid" src="../images/cover4.jpg" alt="Cover Image" height="300" style="width:100%">
            
        <div class="empty-box"></div>    
        <h3 style="text-align:center">O U R &nbsp;&nbsp;&nbsp;S T O R Y</h3>

        <div class="container">
            <h5> OUR MISSION </h5>

            <p style="text-align:justify"> 
                EDC Warehouse is a platform empowering makers and enthusiasts to connect and inspire. Our mission is to support the creativity of today's 
                most talented designers and makers from all over the world by showcasing their original work to our wide audience of EDC enthusiasts.
            </p>    
            <p style="text-align:justify">
                Our focus is on bringing awareness to innovative, original creations within the everyday carry (EDC) community and support independent thinkers 
                who design with careful intention and integrity.
            </p>   
            <p style="text-align:justify">
                We have a very high standard when it comes to the designers and makers with whom we collaborate. Many of the goods in our shop are handcrafted in small 
                batches by talented artisans using the highest quality materials. We are strong believers in buying well-made, heirloom quality goods that can be passed 
                down through the generations, telling a rich story as it ages with you.
            </p>
            <p style="text-align:justify">
                While our EDC community may be diverse in backgrounds, hobbies, interests, and occupations, we all share our passion for well-made goods that are thoughtfully 
                designed. We are committed to bringing our community closer together, connecting talented product designers, makers, and enthusiasts alike.
            </p>

            <h5>HOW IT WORKS</h5>

            <p style="text-align:justify">
                Each week, we drop a carefully curated selection of limited & exclusive everyday carry items and accessories. Often times, we collaborate with 
                the makers directly to bring you unique gear that you won't find anywhere else. But watch out! Some of these items will sell out quickly.
            </p>
            <p style="text-align:justify">Be sure to sign up for our newsletter if you want to be notified! :)</p>
            <p style="text-align:justify">You can also schedule an appointment to drop in at our San Francisco office anytime from Monday through Friday 9am - 5pm.</p>

            <h5>OUR PROMISE</h5>
            <p style="text-align:justify">
                We're a small team and we're limited on resources. But we will do whatever we can to serve our community of EDC enthusiasts with 
                the highest level of honesty and integrity.
            </p>
            <p style="text-align:justify">
                Our customers rave about our best-in-class customer service so rest assured, you'll be taken care of.
            </p>
            <p style="text-align:justify">
                If you want to learn more, we also have a Frequently Asked Questions section where we answer our community's most common questions.
            </p>
            <p style="text-align:justify">
                Lastly, we want to thank you from the bottom of our hearts. We're incredibly thrilled and honored to serve this passionate community. 
                With your support, you're backing the the creativity of hundreds of independent designers and makers from all over the world.
            </p>
            <p style="text-align:justify">Thank you for being a part of our journey. Carry strong!</p>

            <p style="text-align:center">
                <br><br>EDC Warehouse<br>
                Kathmandu, Nepal.<br>
                edcwarehouse@gmail.com
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