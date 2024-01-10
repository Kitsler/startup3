<!DOCTYPE html>
<html>
<head >
    <title >Личный кабинет студента</title>
    <style>
        <?php echo file_get_contents("CSS/login.css"); ?>
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="HTML/logo1.jpg" alt="Логотип">
        </div>
        <form action="login.php" method="post">
        <div class="form-group">
                
                <form method="post" action="process.php">
                   <label for="role">Выберите роль:</label>
                    <select name="role" id="role">
                    <option value="admin">Администратор</option>
                    <option value="user">Студент</option>
                        </select>
                </form>
            </div>
            <form method="POST" action="../STARTUP/PHP/log.php">

                <div class="form-group">
                    <input type="text" name="login" placeholder="Имя пользователя">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Пароль">
                    <?php
                    if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    }
                ?>
                    
                </div>
                <div class="exit">
                <input class="button"  type="submit" name="send" value="Войти" >
                
            </div>
            </form>
            <div class="none">
                <!-- другие элементы контейнера -->
                <p class="text"  >Нажимая "Войти" или "Продолжить"  вы даёте согласие на обработку ваших персональных данных и принимаете 
                    пользовательское соглашение. </p>
            </div>
        </form>
    </div>
</body>

<style>
echo 'Password: ';
$oldStyle = shell_exec('stty -g');
shell_exec('stty -echo');
$password = rtrim(fgets(STDIN), "\n");
shell_exec('stty ' . $oldStyle);
echo "\r\n";
echo $password;
echo "\r\n";
</style>