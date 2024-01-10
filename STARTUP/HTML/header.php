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
    <form name="form_personal_data" method="POST" action="personal_data.php" onsubmit="return(check_form_personal_data());" enctype="multipart/form-data"> 
<table align="center">
	<tr>
		<td align='right' class='param'>Фамилия</td>
		<td><input type="text" name="fam" id="id_fam" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>Имя</td>
		<td><input type="text" name="nam" id="id_nam" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>Отчество</td>
		<td><input type="text" name="oth" id="id_oth" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>Пол</td>
		<td><input type="text" name="sex" id="id_sex" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>Дата рождения</td>
		<td><input type="text" name="birthday" id="id_birthday" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>№ зачётной книжки</td>
		<td><input type="text" name="zachetka" id="id_zachetka" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>Факультет</td>
		<td><input type="text" name="faculty" id="id_faculty" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>Специальность</td>
		<td><input type="text" name="spec" id="id_spec" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>Профиль обучения</td>
		<td><input type="text" name="profile" id="id_profile" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>Группа</td>
		<td><input type="text" name="groupname" id="id_groupname" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align='right' class='param'>Курс</td>
		<td><input type="text" name="course" id="id_course" class="input_rd" readonly></td>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<td width=33% align='right' class='param'>E-mail</td>
		<td width=34%><input type="email" name="email" id="id_email" class="input"></td>
	</tr>
	<tr>
		<td width=33% align='right' class='param'>Мобильный телефон</td>
		<td width=34%><input type="tel" name="phone" id="id_phone" class="input"></td>
	</tr>
</table>
</form>     
    </div>
            
</div>

</body>