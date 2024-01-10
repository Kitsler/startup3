<?php
    session_start();
?>
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
            echo "<div id=userName> ".$_SESSION['login']."</div><form method=\"POST\" ><br><input class=\"button\" type=\"submit\" name=\"exit\" value=\"выход\"></form>";
        }
        else
        echo "<p><a href=\"".$_SESSION['rootDirectory']."/HTML/login.php\"".">войти</a></p>";
    
    
    if(isset($_POST['exit'])){ // закрываем сессию
        unset($_SESSION['login']);
        session_destroy();
        header("Location: ../index.php");
        exit;
    }						
    ?>
  </header>
  <div class="parent">
      
      <div class="forma">
          <input class="button" type="button" onclick="location='new_achievment.php'" name="new_achievment" value="Новое достижение">
          <br>
          <p>Достижения на обработке</p>
          <br>
          <p>Принятые достижения</p>
        </div>
        
        <div class="forma2">
            <table>
                <caption>Запрос на добавление достижения</caption>
                <tr>
                    <td class="column">Название:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td class="column">Вид деятельности:</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropbtn" id="topp">Выберите вид деятельности</button>
                            <div class="dropdown-content">
                                <input type="submit" name="study" value="Учебная" onclick=dropbutton(value)></input>
                                <input type="submit" name="science" value="Научно-исследовательская" onclick=dropbutton(value)></input>
                                <input type="submit" name="сomm" value="Общественная" onclick=dropbutton(value)></input>
                                <input type="submit" name="culture" value="Культурно-творческая" onclick=dropbutton(value)></input>
                                <input type="submit" name="sport" value="Спортивная" onclick=dropbutton(value)></input>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="column">Критерий:</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropbtn" id="krit">Выберите критерий</button>
                            <div class="dropdown-content" id="krit_change">
                                
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="column">Статус мероприятия:</td>
                        <td>
                            <div class="dropdown">
                                <button class="dropbtn" id="status">Выберите уровень</button>
                                <div class="dropdown-content" id="status_change">
                                    
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                <td class="column">Начало участия:</td>
                <td><input type="date"></td>
            </tr>
            <tr>
                <td class="column">Количество баллов:</td>
                <td id="bal"></td>
            </tr>
            <tr>
                <td class="column">Загрузить фото:</td>
                <td>
                    <p><input type="file" name="photo" multiple accept="image/jpeg"></p>
                </td>
            </table>
            <p align=center><input class="button" type="submit" value="Отправить"></p>
            <!--<form enctype="multipart/form-data" method="post">
        </form>   форму натяни на таблицу потом-->
    </div>
    
</div>

</body>
<script src="/STARTUP/JS/script.js"></script>