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
		?>
            <div class="gor_tur" style="background-color:rgba(53,45,72,0.5);">
            <ul><li>Результат поиска</li></ul>
        	</div>
            
              <div class="luchsh_tur1">
              <?php
			  if (!empty($_GET["poisk"])) {
			  			$results = searchPoisk($_GET["poisk"]);
						if (count($results) != 0) {
							for ($i = 0; $i < count($results); $i++) {
							$id = $results[$i]["id_putevk"];
							$country = $results[$i]["country"];
							$price = $results[$i]["price"];
							$day = $results[$i]["coldney"];
							$citi = $results[$i]["city"];
							$hotel = $results[$i]["otel"];
							$img = $results[$i]["img"];
							include "Blocks/Poisk_block.php";
							}
						}
						else {
							echo "Ничего не найдено";
							$alert = "Ничего не найдено, попробуйте еще раз";
							include "alert.php";
							//header("Location: ".$_SERVER["HTTP_REFERER"]);
							//exit;
							//substr($text,0,600);
							}
					}
					else {
						echo "Ничего не найдено";
						$alert = "Ничего не найдено";
						include "alert.php";
						//header("Location: ".$_SERVER["HTTP_REFERER"]);
						//exit;
					}
			  ?>
              
          		
         	  </div>
         
            
       <div id="MeteoInformerWrap" style=" margin-top:10px; margin-left:652px; opacity:0.8; box-shadow: 0 0 7px #999999; width:225px; height:203px; border-radius:7px;">
<script type="text/javascript" src="http://meteo.ua/var/informers.js"></script>
<script type="text/javascript">
makeMeteoInformer("http://meteo.ua/informer/get.php?cities=34&w=226&lang=ru&rnd=1&or=vert&clr=1&dt=today&style=classic",226,216);</script></div>
         </div>
	</center>
    <a href="#" onclick="fastzakk(); return false;"><div class="bistrzak">Быстрый заказ</div></a>
</body>
</html>
