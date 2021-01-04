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

        <!-- Menu Start -->
        <div class="menu">

            <!--Banner Start -->
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <br><br>
                    <h1 class="header center red-text">Our Menu</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">Behold all of our tasty foods created with masterful skills</h5>
                    </div>
                    <br><br>
                </div>
            </div>
            <!--Banner End -->

            <!-- Menu Details Start -->
            <!-- Row Start -->
            <div class="row">
                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/bakmoy.jpg" alt="Bakmoy">
                            <span class="card-title"><strong>Bakmoy</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/bakuteh.jpg" alt="Bai Kut Teh">
                            <span class="card-title"><strong>Bai Kut Teh</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/buburayam.jpg" alt="Chicken Porridge">
                            <span class="card-title black-text"><strong>Chicken Porridge</strong></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row End -->

            <!-- Row Start -->
            <div class="row">
                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/chickensteak.jpeg" alt="Chicken Steak">
                            <span class="card-title"><strong>Chicken Steak</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/empal.jpg" alt="Empal">
                            <span class="card-title"><strong>Empal</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/koloke.jpg" alt="Ayam Asam Manis">
                            <span class="card-title"><strong>Ayam Asam Manis</strong></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row End -->

            <!-- Row Start -->
            <div class="row">
                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/miayam.jpg" alt="Chicken Noodle">
                            <span class="card-title"><strong>Chicken Noodle</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/nasibakar.jpg" alt="Nasi Bakar">
                            <span class="card-title"><strong>Nasi Bakar</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/nasigoreng.jpg" alt="Nasi Goreng">
                            <span class="card-title"><strong>Nasi Goreng</strong></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row End -->

            <!-- Row Start -->
            <div class="row">
                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/rawon.jpg" alt="Rawon">
                            <span class="card-title black-text"><strong>Rawon</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/sate.jpg" alt="Chicken Satay">
                            <span class="card-title"><strong>Chicken Satay</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/soto.jpg" alt="Soto Ayam">
                            <span class="card-title"><strong>Soto Ayam</strong></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row End -->

            <!-- Row Start -->
            <div class="row">
                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/supmerah.jpg" alt="Sup Merah">
                            <span class="card-title"><strong>Sup Merah</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/timlo.jpg" alt="Timlo">
                            <span class="card-title"><strong>Timlo</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/nasibali.jpg" alt="Nasi Campur Bali">
                            <span class="card-title"><strong>Nasi Campur Bali</strong></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!--Row End -->
            <!-- Menu Details End -->

        </div>
        <!-- Menu Ends -->

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