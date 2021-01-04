<?php
session_start();
?>


<!DOCTYPE html>

<html lang="en">
  
    <head>
        <!-- Meta Start -->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Tastefood - The Best Restaurant</title>
        <meta name="description" content="Tastefood - Where food meet your heart and soul!"/>
        <meta name="theme-color" content="#EF6E73"/>
        <link rel="apple-touch-icon" href="../images/logo192.png">
        <link rel="shortcut icon" href="../images/logo.png">
        <!-- Meta End -->
        
        <!-- Link Start -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="./css/materialize.css" type="text/css" rel="stylesheet"/>
        <link href="./css/style.css" type="text/css" rel="stylesheet"/>
        <link rel="manifest" href="./manifest.json">
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
        <!-- Link End -->
    </head>
    
    <body>
    <!-- Navbar Start -->
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="./images/logo.png" width="60" height="auto"></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect" href="home.php">Home</a></li>
                <li><a class="waves-effect" href="menu.php">Our Menu</a></li>
                <li><a class="waves-effect" href="location.php">Location</a></li>
                <li><a class="waves-effect" href="contact.php">Contact</a></li>
                <?php if(!empty($_SESSION["username"])) 
                {
                    echo '<li><a class="waves-effect" href="dashboard.php">Orders</a></li>';
                    echo '<li><a class="waves-effect" href="index.php">Logout</a></li>';
                }
                else
                {
                    echo '<li><a class="waves-effect" href="login-form.php">Login</a></li>';   
                    echo '<li><a class="waves-effect" href="register.php">Register</a></li>';
                };?>
            </ul>
            <ul id="nav-mobile" class="sidenav">
                <li><a class="waves-effect" href="home.php">Home</a></li>
                <li><a class="waves-effect" href="menu.php">Our Menu</a></li>
                <li><a class="waves-effect" href="location.php">Location</a></li>
                <li><a class="waves-effect" href="contact.php">Contact</a></li>
                <?php if(!empty($_SESSION["username"])) 
                {
                    echo '<li><a class="waves-effect" href="dashboard.php">Orders</a></li>';
                    echo '<li><a class="waves-effect" href="index.php">Logout</a></li>';
                }
                else
                {
                    echo '<li><a class="waves-effect" href="login-form.php">Login</a></li>';   
                    echo '<li><a class="waves-effect" href="register.php">Register</a></li>';
                };?>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <div class="container" id="body-content">
        
        <!-- Location Start -->
        <div class="location">
          
          <!-- Banner Start -->
          <div class="section no-pad-bot" id="index-banner">
            <div class="container">
              <br><br>
              <h1 class="header center red-text">Our Location</h1>
              <div class="row center">
                <h5 class="header col s12 light">Located in the heart of Surabaya to keep in touch with you</h5>
              </div>
              <br>
            </div>
          </div>
          <!-- Banner Ends -->
            
          <!-- Place Starts -->
          <div class="row">
            <div class="col s12">
              <div class="icon-block">
                <h2 class="center red-text"><i class="large material-icons">location_on</i></h2>
                <h5 class="center">Jendral Basuki Rahmat Street Number 13, <br>Surabaya, East Java, indonesia</h5>
                <br>
              </div>
            </div>
          </div>
          <!-- Place Ends -->
            
          <!-- Photo Starts -->
          <div class="row">
            <div class="col s12 m8 offset-m2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="./images/location.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 center-align">Our humble cozy little place<i class="material-icons right">arrow_downward</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">A little love letter for you<i class="material-icons right">close</i></span>
                  <p>Our restaurant offer spacious and cozy seating for all of your eating and drinking needs. There is also live music every thursday to make sure that not just our food that touches your heart, but the atmosphere will also. We also offer meeting and private rooms if you need it. To book our meeting or private rooms you need to contact us first to make an appointment through the contact that we already provided in this website. Our restaurant maybe a bit crowded during lunch and dinner time so you may want to book your place and once again you can do this contacting us and make an appointment through the contact that we provided in this website.</p>
                  <p>Due to the rise of concern during this pandemic times, we already followed a strict physical distancing and sanitizing procedure to combat the rise of the COVID virus. All of our customers has to be temperature checked before entering our premises and have to wear a mask. Failing to wear a mask will result in your denial of entrance to our restaurant. All of our furniture and seeating have been disinfected regularly to make sure that it is free from COVID Virus. If you didn't want to come to our restaurant but still wants to enjoy our delicious foods, you can always order them to be delivered to your house instead by contacting us. Thank you for your understanding</p>
                  <p>Have a nice and Tastefood day!</p>
                </div>
              </div>
            </div>
          </div>
          <br><br>
          <!-- Photo Ends -->
        
        </div>
        <!-- Location Ends -->
        
    </div>
    <!-- Content End -->
       
    <!-- Footer Start -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l12 s12 center-align">
                    <h5 class="white-text">Tastefood Restaurant</h5>
                    <p class="grey-text text-lighten-4">Where food meets your heart and soul!</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright center-align">
            <div class="container">
                © 2020-2021 Bryan Yehuda Mannuel<br>
                <a href="https://github.com/BryanYehuda">Visit Bryan Yehuda's Github</a>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    <!-- Script Start -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="./js/materialize.js"></script>
    <script src="./js/init.js"></script>
    <script src="./js/script.js"></script>
    <!-- Script End -->
        
  </body>
  
</html>