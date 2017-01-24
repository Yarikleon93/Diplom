<?php
require_once "Start.php";
$alltravels = getallTravels();
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

<body >
	<center>
    <?php
	require_once "Zakaz_bistr.php";
		require_once "Regedit.php";
	?>
    	<div id="blok">
        <?php
		require_once "Blocks/Header.php";
		
		?>       <?php if(checkUser($_SESSION["login_v"],$_SESSION["password_v"])){ ?>
            <div class="gor_tur" style="margin-top:-8px; background-color:rgba(53,45,72,0.5);">
            <?php } else { ?>     
                <div class="gor_tur" style="background-color:rgba(53,45,72,0.5);">
                <? } ?>
                <ul><li>О нас</li></ul>
                </div>
                	<div class="o_nas_v">
                    <p class="tur_agg">Туристическое агентство "Puir"</p>
                    <p class="opis_m">Туристическое агентство "Puir" создано и работает для того, чтобы помогать Вам в вопросах подбора любого отдыха или услуги. 
                    </p>
                    <p class="opis_m">В нашей работе главное - индивидуальный подход к каждому клиенту. Мы всегда готовы подобрать тур в соответствии с Вашими пожеланиями и возможностями.</p>
                    <p class="opis_m">Качество Вашего отдыха для нас на первом месте. Поэтому мы работаем только с проверенными туроператорами.</p>
                    <p class="opis_m">Для своих туристов мы  регулярно проводим акции, о которых всегда можно узнать на нашем сайте. Также для наших постоянных клиентов у нас всегда есть приятные сюрпризы в виде скидок на туры и не только…
</p><p class="opis_m">А также хотим сообщить Вам о возможности заказа тура на расстоянии, т.е. ни разу не посещая наш офис.</p><p class="opis_m"><span style="color:#C60; font-weight:bold; margin-left:10px;">Как это работает:</span><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;все вопросы по подбору тура мы можем решить в телефонном и интернет режиме;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;вопросы, связанные с документами,- также через интернет или с помощью курьерских служб;<br />
&nbsp;&nbsp;&bull;&nbsp;финансовые вопросы – по договоренности, любым удобным для Вас способом.</p>
					<p class="opis_m" style="font-style:italic; color:#CC6600;">Четкость и надежность наших предложений сможет сделать Ваш отдых незабываемым и прекрасным.</p>
                    <hr />
                    <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Ed9rL2fUL2P7bVI89SUdZ7JnuPWuE26r&width=597&height=359"></script>
                    
                    <!--<p class="opis_m"; style="font-weight:bold;">Наш адрес:</p>
 <p class="opis_m";>г. Харьков,&nbsp; ул. Мироносицкая, 40 </p>
 <p class="opis_m";>Тел.: +38 (097) 33-00-492, &nbsp;&nbsp;+38 (093) 39-99-739</p>
 <p class="opis_m";>График работы:</p>                      
 <p class="opis_m";>пн. - пт.: 10.00 – 20.00 </p>
  <p class="opis_m";>e-mail: tourzebra@gmail.com</p>-->
  
  <p class="opis_m"; style="font-weight:bold;">Наш адрес:</p>
  <ul style="text-align:left;" class="ulli";>
  <li<?php /*?> style="list-style-image:url(Admin/Foto/trubka.jpg);"<?php */?>>г. Харьков,&nbsp; ул. Мироносицкая, 40</li><br />
  <li>Тел.: +38 (097) 33-00-492, &nbsp;&nbsp;+38 (093) 39-99-739</li><br />
  <li>График работы:</li><br />
  <li>пн. - пт.: 10.00 – 20.00 </li><br />
  <li>e-mail: tourzebra@gmail.com</li><br />
  </ul>
                    </div>
            	</div>
        	</div>
        </div>
	</center>
    <a href="#" onclick="fastzakk(); return false;"><div class="bistrzak">Быстрый заказ</div></a>
</body>
</html>