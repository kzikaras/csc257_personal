<?php
session_start();
if (!isset($_SESSION['adminuser'])) {
    header('location: admin_login.php');
} else {
    require_once "user.class.php";
    $adminUser = unserialize($_SESSION['adminuser']);
}