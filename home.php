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
        <link rel="apple-touch-icon" href="./images/logo192.png">
        <link rel="shortcut icon" href="./images/logo.png">
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
        
        <!-- Home Start -->
        <div class="home">
            
          <!-- Banner Start -->
          <div class="section no-pad-bot" id="index-banner">
            <div class="container">
              <br><br>
              <h1 class="header center red-text">Tastefood Restaurant</h1>
              <div class="row center">
                <h5 class="header col s12 light">The best restaurant in Surabaya with great taste and great price</h5>
              </div>
              <br><br>
            </div>
          </div>
          <!-- Banner Ends -->
            
          <!-- Who We Are Start -->
          <div class="row">
            <div class="col s8 offset-s2 m6 offset-m3 l4">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="./images/logo.png">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 center-align home-text">Who we are<i class="material-icons right">arrow_downward</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">We Are The Best<i class="material-icons right">close</i></span>
                  <p>Our Restaurant is the best there is in Surabaya, we always offer the best dining experiences for all of our guest. Go and indulge yourself in the most tasty, most delicious, biggest portion, of every meal that you want. Tastefood always offer the best for you and we never ever cut corners on each of our meal. That's why we are the best restaurant in Surabaya. So what are you waiting for? Come and visit us!</p>
                  <p>Have a nice and Tastefood day!</p>
                </div>
              </div>
            </div>
            <div class="col s8 offset-s2 m6 offset-m3 l4">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="./images/food.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 center-align home-text">What we offer<i class="material-icons right">arrow_downward</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Mastercrafted Meals<i class="material-icons right">close</i></span>
                  <p>Tastefood offers you the most delicious and tasty meal you have ever eaten in your whole life. Each of our meal is prepared by a master chef catered to each and every of your needs. We always offer you the highest quality meal with a very reasonable price so that you will come again and again to our restaurant. Don't just take our words for it, come and visit us!</p>
                  <p>Have a nice and Tastefood day!</p>
                </div>
              </div>
            </div>
            <div class="col s8 offset-s2 m6 offset-m3 l4">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="./images/chef.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4 center-align home-text">Meet Our Team<i class="material-icons right">arrow_downward</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Professional Master Chef<i class="material-icons right">close</i></span>
                  <p>All of our chef are highly trained and are very professional to prepare any kind of dished that is available in our menu. They have been through rigorous training in the best cooking academy to prepare all kinds of dishes. All of our chef is also highly trained in preparing the best food for your heart and soul. You want a taste of our professional Chef's cooking? Come and give us a visit!</p>
                  <p>Have a nice and Tastefood day!</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Who We Are Ends -->
            
          <!-- Ways to Order Start -->
          <div class="section no-pad-bot how-to" id="index-banner">
            <div class="container">
              <br><br>
              <h2 class="header center red-text">Ways to Order</h2>
              <div class="row center">
                <h4 class="header col s12 light">There are 2 ways to enjoy food from Tastefood</h5>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="section">
              <div class="row">
                <div class="col s12 m6">
                  <div class="icon-block">
                    <h2 class="center red-text"><i class="material-icons">local_dining</i></h2>
                    <h4 class="center">Visit our Restaurant</h4>
                    <h5 class="light center-align">Our restaurant is alwayas open from 10 am to 10 pm from monday to sunday. If you want to know where is our restaurant located, you can find it in the location tab. We will always welcome all of our guest.</h5>
                  </div>
                </div>
                <div class="col s12 m6">
                  <div class="icon-block">
                    <h2 class="center red-text"><i class="material-icons">home</i></h2>
                    <h4 class="center">Enjoy at your home</h4>
                    <h5 class="light center-align">We have provide our contact details and offer delivery services to your home directly. All you need to do is just pick a menu and contact us and we will deliver it to your house. Enjoy our food while it's still warm.</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Ways to Order Ends -->   
            
        </div>
        <!-- Home Ends -->
        
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
