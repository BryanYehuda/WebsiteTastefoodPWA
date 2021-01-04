<?php
use Phppot\Registration;
if (! empty($_POST["signup-btn"])) 
{
    require_once 'class/Registration.php';
    $member = new Registration();
    $registrationResponse = $member->registerMember();
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
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <link href="./css/materialize.css" type="text/css" rel="stylesheet"/>
        <link href="./css/style.css" type="text/css" rel="stylesheet"/>
        <link href="./css/session.css" type="text/css" rel="stylesheet" />
        <link href="./css/user-registration.css" type="text/css" rel="stylesheet" />
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
                <?php if(!empty($_SESSION["userId"])) 
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
                <?php if(!empty($_SESSION["userId"])) 
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
        
        <!-- Register Start -->
        <div class="register">
          
          <!-- Banner Start -->
          <div class="section no-pad-bot" id="index-banner">
            <div class="container">
              <br><br>
              <h1 class="header center red-text">Tastefood Restaurant Register</h1>
              <div class="row center">
                <h5 class="header col s12 light">If you don't have an account, you can register here first</h5>
              </div>
              <br><br>
            </div>
          </div>
          <!-- Banner Ends -->

          <!-- Form Starts -->
          <div class="row">
            <div class="col s10 offset-s1">
              <div class="card red lighten-2">
                 <div class="card-content white-text">
                    <span class="card-title center-align">Register Tastefood Restaurant</span><br>
                      <div class="row">
                        <form name="sign-up" action="" method="post" onsubmit="return signupValidation()" class="col s12">
                          <?php if (! empty($registrationResponse["status"])) {?>
                          <?php if ($registrationResponse["status"] == "error") {?>
                          <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                          <?php } else if ($registrationResponse["status"] == "success") {?>
                          <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                          <?php } ?>
                          <?php } ?>
                          <div class="row signup-container">
                            <div class="input-field col s12">
                              <label for="username">Username</label>
                              <input name="username" id="username" type="text" class="demo-input-box">
                              <span id="username-info" class="error-info" style="color: rgb(0 0 0);"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <label for="email">Email</label>
                              <input name="email" id="email" type="email" class="demo-input-box">
                              <span id="email-info" class="error-info" style="color: rgb(0 0 0);"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <label for="signup-password">Password</label>
                              <input name="signup-password" id="signup-password" type="password" class="demo-input-box">
                              <span id="signup-password-info" class="error-info" style="color: rgb(0 0 0);"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <label for="confirm-password">Confirm Password</label>
                              <input name="confirm-password" id="confirm-password" type="password" class="demo-input-box">
                              <span id="confirm-password-info" class="error-info" style="color: rgb(0 0 0);"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="center-align">
                              <input type="submit" name="signup-btn" value="Sign up" id="signup-btn" class="btnLogin"></span>
                            </div>
                          </div> 
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <!-- Form Ends -->

        </div>
        <!-- Register Ends -->
        
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
    <script src="./js/materialize.js"></script>
    <script src="./js/init.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/registration.js"></script>
    <!-- Script End -->
        
  </body>
  
</html>