<?php
require_once "Start.php";
$travels = getTravels($_GET["type"]);
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
		if ($_GET["type"]=="Горячие туры")
		{?>
         <div class="gor_tur" style="background-color:#EE5C3A">
         <ul><li><?php echo $_GET["type"] ?></li></ul>
         </div> 
		 <?php
		}
		else {
			?>
         <div class="gor_tur">
            <ul><li><?php echo $_GET["type"] ?></li></ul>
        	</div> 
		<?php
			}		
		?>
            <div class="luchsh_tur">  
            <?php
				for ($i=count($travels)-1;$i>=0;$i--)
			{
				if ($i>=0)
				{
				$id = $travels[$i]["id_putevk"];
				$countryy = $travels[$i]["country"];
				$imgg = $travels[$i]["img"];
				$otell = $travels[$i]["otel"];
				$dataviezdaa = $travels[$i]["dataviezda"];
				$colday = $travels[$i]["coldney"];
				$cityy = $travels[$i]["city"];
				$pricee = $travels[$i]["price"];
				$namee = $travels[$i]["name"];
				include "Blocks/Block_vid_tur.php";
				}
			}
			?>
            </div>
            <!--<div id="MeteoInformerWrap" style="margin-left:20px; margin-top:12px; opacity:0.8;">
<script type="text/javascript" src="http://meteo.ua/var/informers.js"></script>
<script type="text/javascript">
makeMeteoInformer("http://meteo.ua/informer/get.php?cities=34&w=226&lang=ru&rnd=1&or=vert&clr=1&dt=today&style=classic",226,216);
</script></div>  -->          
        </div>
	</center>
    <a href="#" onclick="fastzakk(); return false;"><div class="bistrzak">Быстрый заказ</div></a>
</body>
</html>