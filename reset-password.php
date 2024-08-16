<?php
session_start();
if (isset($_SESSION["loggedinj"]) && $_SESSION["loggedin"] === true) {
    header("location: login.php");
    exit;
}