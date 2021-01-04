<?php
session_start();
if(!empty($_SESSION["username"])) {
    require_once 'logout-form.php';
} else {
    require_once __DIR__ . "/login-form.php";
}
?>