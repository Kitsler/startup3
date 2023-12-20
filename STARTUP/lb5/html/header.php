<head>
    <meta charset="utf-8">
    <?php
        echo "<link rel=\"stylesheet\" href=\"".$_SESSION['rootDirectory']."\CSS\style.css\">";
    ?>
</head>
<body>
  <header id="head">
      <?php
        if(isset($_SESSION["login"]))
        {
            echo "Добро пожаловать<div id=userName> ".$_SESSION['login']."</div><br><form method=\"POST\" ><input type=\"submit\" name=\"exit\" value=\"выход\"></form>";
        }
        else
            echo "<p><a href=\"".$_SESSION['rootDirectory']."/html/login.php\"".">войти</a> или <a href=\"".$_SESSION['rootDirectory']."/html/registration.php \" >зарегистрироваться</a></p>";
        
        
        if(isset($_POST['exit'])){ // закрываем сессию
                unset($_SESSION['login']);
                session_destroy();
                header("Refresh:0");
		    exit;
          }						
     
 ?>
  </header>
