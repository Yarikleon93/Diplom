<?
 if (!empty ($_POST["reges_r"])) {
	 $name_r = htmlspecialchars($_POST["name_r"]);
	 $login_r = htmlspecialchars($_POST["login_r"]);
	 $fname_r = htmlspecialchars($_POST["fname_r"]);
	 $mail_r = htmlspecialchars($_POST["mail_r"]);
	 $password_r = htmlspecialchars($_POST["password_r"]);
	 $tpassword_r = htmlspecialchars($_POST["tpassword_r"]);
	 $telef_r = htmlspecialchars($_POST["telef_r"]);
	 $count_r = htmlspecialchars($_POST["count_r"]);
	 if (strlen ($login_r) < 3) $success = false;
	 elseif (strlen ($mail_r) < 3) $success = false;
	 elseif (strlen ($password_r) < 3) $success = false;
	 elseif (strlen ($telef_r) < 3) $success = false;
	 elseif ($password_r != $tpassword_r) $success = false;
	 else $success = addUser($name_r, $login_r, $fname_r, $mail_r, md5($password_r), $telef_r, $count_r);
	 if (!$success) $alert = 'Ошибка при регистрации';
	 //if ($success = telef) $alert = 'Неправильно введен номер телефона';
	 else $alert = "Вы успешно зарегистриговались";
	 include "alert.php";
 }
?>
<center>
<!-- Вход -->   
    	<div class="fon_r" onClick="skrit()">
    		<div class="regedit_v">
            	<form class="form_reg" action="vhod_obr.php" method="post" name="vhod_obr">
        			<div class="regent">
            			<h3>Вход</h3>
                        <a href="#" onClick="closee(); return false"><p class="closee_v">Закрыть <span style="font-weight:bold">X</span></p></a>
                	</div>
           				<br />
            		<div>
            			<label>Логин:</label><br />
            			<input type="text"  name="login_v" placeholder="" required/><br />
            		</div>
            		<div>
            			<label>Пароль:<a href="#">Забыли пароль?</a></label><br />
            			<input type="password" name="password_v" required/>
            		</div>
            
            		<div class="nizreg">
                			<input type="submit" name="vhod_v"  value="Вход"/>
                    		<input type="submit" name="reges_v"  value="Регистрация" onclick="reg_r(); return false"/>
                            
                            <div style=" margin-left:17px"><input type="checkbox" name="zapomnit" id="raz" / style="margin:57px 0 0 -577px;"><label class="zapomn_m" for="raz">Запомнить меня</label></div>
        			</div>
            	</form>
    		</div>
      
<!-- Регистрация -->

    		<div class="regedit_r">
            	<form class="form_reg" method="post" action="">
        			<div class="regent">
            			<h3>Регистрация</h3>
                        <a href="#" onClick="return false"><p class="closee_r">Закрыть <span style="font-weight:bold">X</span></p></a>
                	</div>
           				<br />
            		<div style="position:relative; width:205px; display:inline-table;">
            			<label>Имя:</label><br />
            			<input type="text"  name="name_r" placeholder="" required/><br />
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Логин:</label><br />
            			<input type="text"  name="login_r" placeholder="" required/><br />
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Фамилия:</label><br />
            			<input type="text" name="fname_r" required/><br />
            		</div>
            		<div style="position:relative; width:205px; display:inline-table;">
            			<label>Email:</label><br />
            			<input type="text" name="mail_r" placeholder="Ivanov@mail.ru" required/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Пароль:</label><br />
            			<input type="password" name="password_r" required/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Повторите пароль:</label><br />
            			<input type="password" name="tpassword_r" required/>
            		</div>
                    <br /><br />
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Телефон:</label><br />
            			<input type="text" name="telef_r" placeholder="+3(067) 33-00-492" required/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Страна проживания:</label><br />
            			<input type="text" name="count_r" required/>
            		</div>
            		<div class="nizreg_r">
                			<input style="margin:15px 0 0 43px" type="submit" name="reges_r"  value="Регистрация"/>
                    		<input style="margin:15px 0 0 85px" type="submit" name="vhod_r"  value="Вход" onclick="reg_v(); return false"/>
        			</div>
            	</form>
    		</div>
        </div>
        </center>