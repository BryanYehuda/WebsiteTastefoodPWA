<?php
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

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
        <link href="./css/session.css" type="text/css" rel="stylesheet"/>
        <link rel="manifest" href="./manifest.json">
        <link rel="shortcut icon" href="./view.images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./view/images/favicon.ico" type="image/x-icon">
        <!-- Link End -->
    </head>
    
    <body>
    <!-- Navbar Start -->
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="./view/images/logo.png" width="60" height="auto"></a>
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
        
        <!-- Logout Start -->
        <br><br>
        <div class="row">
            <div class="col s12 l6 offset-l3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/profile.jpg">
                        <span class="card-title white-text center-align">HELLO THERE!</span>
                    </div>
                    <div class="card-content center-align">
                        <p>Welcome <b><?php echo $username; ?></b>, You have successfully logged in!<br>
                        Click to <a href="logout.php" class="logout-button">Logout</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logout Ends -->
        
    </div>../
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
    <script src="./view/js/materialize.js"></script>
    <script src="./view/js/init.js"></script>
    <script src="./view/js/script.js"></script>
    <!-- Script End -->
        
  </body>
  
</html>