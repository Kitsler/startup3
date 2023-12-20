<form method="POST" action="../php/log.php">
    <input type="text" placeholder="login" name="login"><br>
    <input type="password" name="password" placeholder="Пароль" id="">
    <input type="submit" name='send' value="Ok">
</form>

<?php
    session_start();
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
?>
