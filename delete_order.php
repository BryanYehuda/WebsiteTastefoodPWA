<?php
require_once("db.php");
$sql = "DELETE FROM orders WHERE userId='" . $_GET["userId"] . "'";
mysqli_query($conn,$sql);
header("Location:dashboard.php");
?>