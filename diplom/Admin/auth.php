<?
session_start();
include 'Function.php';
if(checkUser($_SESSION["login_v"], $_SESSION["password_v"]) && (isAdmin($_SESSION["login_v"])))
	{
		header("Location: ../Admin/Index.php");
		exit;
	}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Панель управления сайтом</title>
<link href="style.css" type"text/css" rel="stylesheet">
<link rel="shortcut icon" href="/Diplom/Foto/logo1.png" type="image/x-icon">
<script type="text/javascript" src="jquery-1.2.6.js"></script>
<script type="text/javascript" src="Script.js"></script>
</head>
<body style="background-color:rgba(206,223,234,0.4)">
<center>
<div class="adm_nas"><img src="Foto/Admin.png" /><p>Админ панель</p></div>
<div class="form_vh">
	<form class="form_reg" action="/Diplom/vhod_obr.php" method="post" name="vhod_obr">
        			<div class="adma">
            			<p>Вход в админ панель</p>
                	</div>
            		<div class="vh_adm">
            			<label style="margin-left:-208px; margin-top:5px;">Логин:</label>
            			<input type="text"  name="login_v" placeholder=""/>
            			<label style="margin-top:10px;">Пароль:</label>
            			<input type="password" name="password_v"/>
                		<input type="submit" name="vhod_v"  value="Вход"/>
            	</form>
                		</div>
                	</div>
                </div>
         
                <? if ($_SESSION["error_v"] == 1) {
					unset($_SESSION["error_v"]);
					$alert = "Неправильный login или пароль";
	 				include "../alert.php";
												//$alert = "Неправильный login или пароль";
												//include "alert.php";
				} ?>
                
                </center>
</body>
</html>