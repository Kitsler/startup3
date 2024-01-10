<?php
session_start();
if(isset($_POST["send"])){
    require_once "dbConnect.php";
    $login=$_POST['login'];
    $password = $_POST['password']; 
    
    $select= mysqli_query($conn, "SELECT * FROM users WHERE login='$login'");
    if($r= mysqli_fetch_array($select))
    {
        if(password_verify($password, $r['password'])){
            $_SESSION["login"]=$r['login'];
            header("Location: ../HTML/header.php");
        }
        else{
            header("Location: ../index.php");
            $_SESSION['error']="неверный логин или пароль";
        }
    }
    else{
        header("Location: ../index.php");
        $_SESSION['error']="неверный логин или пароль";
        
    }
}
?>