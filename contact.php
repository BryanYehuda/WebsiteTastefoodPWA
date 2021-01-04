<?php
session_start();
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Meta Start -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tastefood - The Best Restaurant</title>
    <meta name="description" content="Tastefood - Where food meet your heart and soul!" />
    <meta name="theme-color" content="#EF6E73" />
    <link rel="apple-touch-icon" href="./images/logo192.png">
    <link rel="shortcut icon" href="./images/logo.png">
    <!-- Meta End -->

    <!-- Link Start -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./css/materialize.css" type="text/css" rel="stylesheet" />
    <link href="./css/style.css" type="text/css" rel="stylesheet" />
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

        <!-- Contact Start -->
        <div class="contact">

            <!-- Banner Start -->
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <br><br>
                    <h1 class="header center red-text">Our Contact</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">We offer both delivery service and in-place dining appointment</h5>
                    </div>
                    <br><br>
                </div>
            </div>
            <!-- Banner Ends -->

            <!-- How to Order Start -->
            <div class="how-to-order">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <ol>
                            <h4>Delivery Service</h4>
                            <li>Check our Opening and Closing time first</li>
                            <li>Please login and use our online menu to choose your favorite foods and drinks</li>
                            <li>Checkout your order and give us your address details in the form given</li>
                            <li>Your favorite food will be processed and be delivered to you shortly</li>
                            <li>Or, you can use our food deliveries partner like Go-jek to order from us (just search "Tastefood)</li>
                        </ol>
                    </div>
                    <div class="col s12 m6 l6">
                        <ol>
                            <h4>In-Place Dining</h4>
                            <li>Check our Opening and Closing time first</li>
                            <li>If you want to book a table, you can contact us from one of our contact list below</li>
                            <li>After you have confirm our Opening and Closing time or have booked a table, you can come visit our restaurant</li>
                            <li>We will serve you gladly and professionally in our restaurant the Tastefood way</li>
                        </ol>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- How to Order Ends -->

            <!-- Opening Time Start -->
            <div class="opening-time">
                <div class="row">
                    <div class="col s6 offset-s3">
                        <table class="highlight centered responsive">
                            <thead>
                                <tr>
                                    <th>Days of the Week</th>
                                    <th>Opening Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>9 AM - 10 PM</td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>9 AM - 10 PM</td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>9 AM - 10 PM</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>9 AM - 10 PM</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>9 AM - 10 PM</td>
                                </tr>
                                <tr>
                                    <td>Satuday</td>
                                    <td>9 AM - 10 PM</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>9 AM - 11 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- Opening Time Ends -->

            <!--Details Start-->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center red-text"><i class="large material-icons">call</i></h2>
                        <h5 class="center">Phone</h5>
                        <h6 class="center">+6212345678910</h6>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center red-text"><i class="material-icons">sms</i></h2>
                        <h5 class="center">Messaging</h5>
                        <h6 class="center">+6212345678910</h6>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center red-text"><i class="material-icons">desktop_windows</i></h2>
                        <h5 class="center">Website</h5>
                        <h6 class="center">tastefood.com</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center red-text"><i class="large material-icons">email</i></h2>
                        <h5 class="center">Email</h5>
                        <h6 class="center">tastefood@gmail.com</h6>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center red-text"><i class="material-icons">motorcycle</i></h2>
                        <h5 class="center">Go-Food</h5>
                        <h6 class="center">Tastefood Restaurant</h6>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center red-text"><i class="material-icons">subscriptions</i></h2>
                        <h5 class="center">Youtube</h5>
                        <h6 class="center">Tastefood Restaurant</h6>
                    </div>
                </div>
            </div>
            <br><br>
            <!--Details Ends-->

        </div>
        <!-- Contact Ends -->

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