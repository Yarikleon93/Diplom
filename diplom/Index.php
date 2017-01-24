<?
require_once "Start.php";
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
<?php $idpage=001; ?>
</head>
<body >
<!--<div id="page-preloader"><span class="spinner"></span></div>
-->		
		<center>
         <?php 
		require_once "Zakaz_bistr.php";
		require_once "Regedit.php";
		 ?>
    	<div id="blok">
        <?php
		require_once "Blocks/Header.php";
		?>
         <?php
		require_once "Blocks/Slider.php";
		 ?>
         <?php
		require_once "Blocks/Hot_tur.php";
		 ?>
         
<div id="MeteoInformerWrap" class="pogoda">
<script type="text/javascript" src="http://meteo.ua/var/informers.js"></script>
<script type="text/javascript">
makeMeteoInformer("http://meteo.ua/informer/get.php?cities=34&w=226&lang=ru&rnd=1&or=vert&clr=1&dt=today&style=classic",226,216);
</script></div>
         </div>
	</center>
		<a href="#" onclick="fastzakk(); return false;"><div class="bistrzak">Быстрый заказ</div></a>
</body>
</html>
	<!--
    substr($text,0,640);
    background: -moz-linear-gradient(top, #e2e2e2 0%, #dbdbdb 50%, #d1d1d1 51%, #fefefe 100%);
    background: -webkit-linear-gradient(top, #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);
    background: -o-linear-gradient(top, #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);
    background: -ms-linear-gradient(top, #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);
    background: linear-gradient(top, #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);
    //sort
    for ($j=1; $j < count($goods); $j++) { 
   for ($i=0; $i < count($goods)-$j; $i++) {
    if ($goods[$i+1]["views"] > $goods[$i]["views"]) {
     $tmp=$goods[$i+1];
     $goods[$i+1]=$goods[$i];
     $goods[$i]=$tmp;
    }
   }
   !empty - пустой
   isset - существует
   -->
   