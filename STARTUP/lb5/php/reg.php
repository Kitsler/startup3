<?php
session_start();
    require_once "dbConnect.php";
    $login=$_POST['login'];
    $password = password_hash($_POST['password'],  PASSWORD_BCRYPT);
    $email=$_POST['email'];
    //$login="admin3";
    //$password=password_hash("123",  PASSWORD_BCRYPT);
    //$email="123@mail.ru";
    addNewUser($login, $password,$email,$conn);
function addNewUser($login, $password, $email, $conn){

    $select= mysqli_query($conn, "SELECT login FROM users WHERE login='$login';");
    $content=false;
    while ($r= mysqli_fetch_array($select)) {
        $content=true;
    }
    if($content){
            header("Location: http://l99919rq.beget.tech/lb5/html/registration.php");
            $_SESSION['error']="Указанный логин занят";
    }
    else{
        mysqli_query($conn, "INSERT INTO users (login, password, email) VALUES ('$login', '$password', '$email')");
        $_SESSION['login']=$login;
        header("Location: ../index.php");
    }
}
?>
