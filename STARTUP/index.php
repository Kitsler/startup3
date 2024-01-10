<?php
session_start();
$_SESSION['rootDirectory']=dirname($_SERVER['PHP_SELF']);
include_once("HTML/login.php");
//include_once("HTML/header.php");
//include_once("HTML/main.php");
?>