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
		
		?>
        <?php if(checkUser($_SESSION["login_v"],$_SESSION["password_v"])){ ?>
            <div style="margin-top:-7px;">
            <?php } else { ?>
        	<div>
            <? } ?>    
            
      		<div class="gor_tur" style="background-color:rgba(53,45,72,0.5)">
            <ul><li>Путешествия</li></ul>
        	</div>
            <div class="luchsh_tur">  
            <?php
			for ($i=0;$i<count($alltravels);$i++)
			{
				if ($i>=0)
				{
				$id = $alltravels[$i]["id_vidput"];
				$imgg = $alltravels[$i]["img_vidput"];
				$namee = $alltravels[$i]["name_vidput"]; 
				?>
                <a href="Vidi_turov.php?type=<?php echo $namee; ?>" class="vid_tur1"><div class="vid_tur"><div class="vid_tur1"><img src="Foto/Vidtur/<?php echo $imgg; ?>" /></div><p><?php echo $namee; ?></p></div></a>
                <?php
				}
			}
		?>
            	</div>            
            </div>
        </div>
	</center>
    <a href="#" onclick="fastzakk(); return false;"><div class="bistrzak">Быстрый заказ</div></a>
</body>
</html>