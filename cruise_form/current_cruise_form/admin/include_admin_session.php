<?php
session_start();
if (!isset($_SESSION['adminuser'])) {
    header('location: admin_login.php');
}