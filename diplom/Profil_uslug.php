<?php
require_once "Start.php";
edituslViews($_GET['id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Профили услуг</title>
<link href="Stili.css" type"text/css" rel="stylesheet">
<link rel="shortcut icon" href="/Diplom/Foto/logo1.png" type="image/x-icon">
<script type="text/javascript" src="jquery-1.2.6.js"></script>
<script type="text/javascript" src="Script.js"></script>
</head>

<body>
<center>
	<!--substr($cap,0,600)-->
	<?php
	require_once "Zakaz_bistr.php";
		require_once "Regedit.php";
	?>
    	<div id="blok">
        <?php
		require_once "Blocks/Header.php";
		$uslugi = getUslugi($_GET["id"]);
		$name_u = $uslugi["name_uslug"];
		$img_u = $uslugi["img_uslug"];
		$text_u = $uslugi["text_uslug"];
		?>  
			<?php if(checkUser($_SESSION["login_v"],$_SESSION["password_v"])){ ?>
        	<div class="prof_turr" style="margin-top:-7px;">
            <?php } else { ?>
        	<div class="prof_turr">
            <? } ?>     
            <div class="prof_name1"><ul><li><p><?php echo $name_u; ?></p></li></ul></div>
            <!--<form class="prof_but">
            	<input type="submit" />
            </form>-->
            <div class="prof_osn1">
            <img src="Foto/Uslugi/<?php echo $img_u; ?>" / align="left" hspace="14"> 
            	<p><?php echo $text_u; ?></p>
            <?php /*?><form class="prof_but1">
            	<a href="#"><input type="submit" value="Заказать      &gt;&gt;" name="button"  id="prof_but1"/></a>
            </form><?php */?>
            </div>
            </div>
            </div>
	</center>
    <a href="#" onclick="fastzakk(); return false;"><div class="bistrzak">Быстрый заказ</div></a>
</body>
</html>