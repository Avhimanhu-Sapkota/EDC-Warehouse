<!DOCTYPE html>
<html lang="en">
    <!--Head of the webpage-->
    <head>
        <!--Icon Image that displays in the head of the webpage-->
        <link rel="shortcut icon" href="../images/icon.ico" />
        <!--Title of the page-->
        <title> </title>
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

    <!--Body of the webpage-->
    <body>
        <!--Creating a nav bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- this is shown only on mobile and medium screens -->
            <a href="index.php" class="navbar-brand d-lg-none">
                <img src="../images/logo.PNG" height="50em" alt="EDC Warehouse Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()">
                <img src="../images/nav.png" height="30em" alt="Nav Icon">
            </button>

            <!--  Using flexbox classes to remove in small screen and present on large screens -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="pocketdumps.php">POCKET DUMPS <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gearforlife.php">GEAR FOR LIFE </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="journals.php">EDC JOURNALS</a>
                    </li>
                </ul>
                    
                <a class="navbar-brand d-none d-lg-block" href="index.php"><img src="../images/logo.PNG" height="60em" alt="EDC Warehouse Logo"></a>
                        
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ourstory.php">OUR STORY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="../images/search.png" height="30em" alt="Search Icon" onclick="openSearch()"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><img src="../images/cart.png" height="30em" alt="Cart Icon"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><img src="../images/login.png" height="30em" alt="Login Icon"></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="overlay" id="mynav">
                <a href="" class="closebutton" onclick="closeNav()">&times;</a>
            
                <div class="overlay-content">
                    <a href="index.php"> HOME </a>
                    <a href="pocketdumps.php"> POCKET DUMPS </a>
                    <a href="gearforlife.php"> GEAR FOR LIFE </a>
                    <a href="journals.php"> EDC JOURNALS </a>
                    <a href="ourstory.php"> OUR STORY </a>
                    <a href="cart.php"> CART </a>
                    <a href="#" onclick="openSearch()"> SEARCH </a>
                    <a href="login.php"> LOGIN </a>
                </div>
            </div>
        
        <div class="overlay" id="search">
            <a href="#" class="closebutton" onclick="closeSearch()">&times;</a>

            <div class="overlay-content">
                <form method='post' action='search.php'>
                    <input class="test" type="text" name="search" placeholder="SEARCH HERE" autocomplete="off"
                    style="width:70%;background-color: black;border: 1px solid lightslategray;color:white;
                    font-family: 'Segoe UI';font-size: 2em;text-align: center;text-transform:uppercase;"> <br><br>
                    <input class="button" type="submit" name="searchsubmit" value="SEARCH">
                </form>
            </div>
        </div>
        
        <script>
            function openNav(){
                document.getElementById("mynav").style.height="100%";
            }
            function closeNav(){
                document.getElementById("mynav").style.height="0";
            }
            function openSearch(){
                document.getElementById("search").style.height="100%";
            }
            function closeSearch(){
                document.getElementById("search").style.height="0";
            }
        </script>
    </body>
</html>