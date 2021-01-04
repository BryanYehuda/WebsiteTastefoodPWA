<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once 'logout-form.php';
} else {
    require_once 'login-form.php';
}
?>