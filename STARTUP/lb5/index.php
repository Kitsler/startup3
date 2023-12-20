<?php
session_start();
$_SESSION['rootDirectory']=dirname($_SERVER['PHP_SELF']);
include_once("html/header.php");
include_once("html/main.php");
?>
