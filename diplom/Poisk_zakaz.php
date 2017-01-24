<?php
require_once "Start.php";
$uslugi = getuslugiTravels();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Туристическое агенство</title>
<link href="Stili.css" type"text/css" rel="stylesheet">
<link rel="shortcut icon" href="/Diplom/Foto/logo1.png" type="image/x-icon">
<script type="text/javascript" src="jquery-1.2.6.js"></script>
<script type="text/javascript" src="Script.js"></script>
</head>

<body>
	<center>
    <?php
	 require_once "Zakaz_bistr.php";
	?>
    <?php
		require_once "Regedit.php";
		require_once "Blocks/Zakaz_put.php";
	?>
    	<div id="blok">
        <?php
		require_once "Blocks/Header.php";
		?>
      		<div class="gor_tur" style="background-color:rgba(53,45,72,0.5)">
            <ul><li>Поиск и заказ</li></ul>
        	</div>
            <div class="luchsh_tur">  
           
                <a href="#" onclick="biestr_zak(); return false"><div class="poisk_zakkaz"><div class="poisk_zakkaz_img" style="opacity:0.9;"><img src="Foto/bistr_zakaz2.jpg"/></div><p style="margin-top:8px; font-size:18px; color:#FC0;">Быстрый заказ</p></div></a>
                <a href="#" onclick="user_zak(); return false"><div class="poisk_zakkaz"><div class="poisk_zakkaz_img"><img src="Foto/bistr_zakaz.jpg" /></div><p style="margin-top:8px; font-size:18px; color:#FC0;">Оформление заказа</p></div></a>
                              
            </div>            
        </div>
        
	</center>
    <a href="#" onclick="fastzakk(); return false;"><div class="bistrzak">Быстрый заказ</div></a>
</body>
</html>