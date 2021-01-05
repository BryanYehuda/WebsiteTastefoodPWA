<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

if(count($_POST)>0) 
{
	require_once("db.php");
	$sql = "INSERT INTO orders (name, address, orders) VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["orders"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New Order Added Successfully";
	}
}
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
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="./css/materialize.css" type="text/css" rel="stylesheet" />
    <link href="./css/style.css" type="text/css" rel="stylesheet" />
    <link href="./css/session.css" type="text/css" rel="stylesheet" />
    <link href="./css/user-registration.css" type="text/css" rel="stylesheet" />
    <link rel="manifest" href="./manifest.json">
    <link rel="shortcut icon" href="./view/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./view/images/favicon.ico" type="image/x-icon">
    <!-- Link End -->
</head>

<body>
    <!-- Content Start -->
    <div class="container" id="body-content">

        <!-- Login Start -->
        <div class="order-form">

            <!-- Banner Start -->
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <br><br>
                    <h1 class="header center red-text">Tastefood Restaurant Order Form</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">Insert your orders to the form below</h5>
                    </div>
                    <br><br>
                </div>
            </div>
            <!-- Banner Ends -->

            <!-- Form Start -->
            <div class="row">
                <div class="col s10 offset-s1">
                    <div class="card red lighten-2">
                        <div class="card-content white-text">
                            <span class="card-title center-align">Add Orders Restaurant</span>
                            <br>
                            <div class="row">
                                <form name="frmUser" method="post" action="" class="col s12">
                                    <div class="message black-text"><?php if(isset($message)) { echo $message; } ?></div>
                                    <br>
                                    <br>
                                    <div class="right-align"><a href="dashboard.php" class="link white-text">Back to order list</a></div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="name">Your Name</label>
                                            <input name="name" id="name" type="text" class="demo-input-box">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="address">Your Address</label>
                                            <input name="address" id="address" type="text" class="demo-input-box">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="orders">Your Orders</label>
                                            <input name="orders" id="orders" type="text" class="demo-input-box">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="center-align">
                                            <input type="submit" name="submit" value="submit" class="btnLogin"></span>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>               
            <!-- Form Ends -->

        </div>
        <!-- Login Ends -->

    </div>
    <!-- Content End -->

    <!-- Script Start -->
    <script src="./js/materialize.js"></script>
    <script src="./js/init.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/validate.js"></script>
    <!-- Script End -->

</body>

</html>