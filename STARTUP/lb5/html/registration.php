<head>
    <meta charset="utf-8">
</head>
<form action="../php/reg.php" method="post">
    <input placeholder="Login" type="text" name="login"><br>
    <input type="password" name="password">
<br>
<input type="email" name="email" id=""><br>
<input type="submit" value="Ok">
</form>

<?php
    session_start();
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);}  
?>
