<?php
require_once "Start.php";
editturViews($_GET['id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Профили туров</title>
<link href="Stili.css" type"text/css" rel="stylesheet">
<link rel="shortcut icon" href="/Diplom/Foto/logo1.png" type="image/x-icon">
<script type="text/javascript" src="jquery-1.2.6.js"></script>
<script type="text/javascript" src="Script.js"></script>
</head>

<body>

<center>
	<?php
		require_once "Regedit.php";
		require_once "Blocks/Zakaz_put.php";
	?>
    	<div id="blok">
        <?php
		require_once "Blocks/Header.php";
		$travel = getTravel($_GET["id"]);
		$id = $travel["id_putevk"];
		$namee = $travel["name"];
		$vid_put = $travel["vidputev"];
		$countryy = $travel["country"];
		$text_tt = $travel["text_t"];
		$imgg = $travel["img"];
		$dataviezdaa = $travel["dataviezda"];
		$colday = $travel["coldney"];
		$cityy = $travel["city"];
		$pricee = $travel["price"];
		$roadd = $travel["road"];
		$otell = $travel["otel"];
		$viezd_citii = $travel["viezd_citi"];
		$datapriezda = $travel["datapriezd"];
		$pitaniee = $travel["pitanie"];
		$raspologeniee = $travel["raspologenie"];
		$razvlech_uslugg = $travel["razvlech_uslug"];
		?>  
            <?php if(checkUser($_SESSION["login_v"],$_SESSION["password_v"])){ ?>
            <div class="prof_turr" style="margin-top:-19px;">
            <?php } else { ?>
        	<div class="prof_turr">
            <? } ?>
            <div class="prof_name"><ul><li><p><?php echo $namee; ?></p></li></ul></div>
            <div class="prof_countr"><h3><?php echo $countryy; ?></h3></div>
            <img / src="Foto/Fotovid/<?php echo $imgg; ?>" class="prof_img">
            <?php
			
			//if(checkUser($_SESSION["login_v"],$_SESSION["password_v"])){
//			 
//			if (!empty ($_POST["zakaz_but"])) {
//			$success = addZakazKlient($id_k, $id, $countryy, $pricee, $cityy, $vid_put, $name, $mail, $numb, $login);
//			if (!$success) $alert = 'Ошибка при заказе';
//	 		else { $alert = "Заказ успешно оформлен";
//	 		include "alert.php";
//			}
//			}
			?>
            <form class="prof_but" action="" method="post">
            	<input type="submit" id="prof_but1" value="Заказать     &gt;&gt;" name="zakaz_but" onclick="zakaz_za(); return false"/>
            </form>
            <div class="prof_osn"> 
            	<div class="prof_inf">
                <div class="prof_tabl11">
                	<table cellpadding="0" cellspacing="0" style="margin-left:3px;">
                    	<tr>
                        	<td style="width:110px;"><p class="prof_cen">Цена:</p></td>
                            <td><p class="prof_cen1"><?php echo $pricee; ?> USD</p></td>
                        </tr>
                        <tr>
                        	<td style="padding-top:11px;"><p class="prof_otel">Отель:</p></td>
                            <td style="padding-top:11px;"><p class="prof_otel1"><?php echo $otell; ?></p></td>
                        </tr>
                        <tr>
                        	<td style="padding-top:11px;"><p class="prof_citi">Город:</p></td>
                            <td style="padding-top:11px;"><p class="prof_citi1"><?php echo $cityy; ?></p></td>
                        </tr>
                        <tr>
                        	<td style="padding-top:11px;"><p class="prof_daten">Начало тура:</p></td>
                            <td style="padding-top:11px;"><p class="prof_daten1"><?php echo $dataviezdaa; ?></p></td>
                        </tr>
                    </table>
                </div>
                <p class="prof_ras_ot">Расположение отеля: <span>&nbsp;<?php echo $raspologeniee; ?></span></p>
                <p class="prof_uslug">Развлечения и услуги: <span>&nbsp;<?php echo $razvlech_uslugg; ?></span></p>
                <p class="prof_otur">О туре: <span>&nbsp;<?php echo $text_tt; ?></span></p>
                <p style="font-size:18px; font-weight:500;">Описание</p>
                <div class="prof_tabl">
                	<table cellpadding="5" cellspacing="0">
                		<tr>
                    		<td style="border-bottom:1px dotted #575859;">Количество человек:</td>
                        	<td style="border-bottom:1px dotted #575859;">2</td>
                    	</tr>
                    	<tr>
                    		<td style="border-bottom:1px dotted #575859;">Ночей</td>
                        	<td style="border-bottom:1px dotted #575859;"><?php echo $colday; ?></td>
                    	</tr>
                        <tr>
                    		<td style="border-bottom:1px dotted #575859;">Тип номера:</td>
                        	<td style="border-bottom:1px dotted #575859;">STD (Standard) Стандарт</td>
                    	</tr>
                        <tr>
                    		<td style="border-bottom:1px dotted #575859;">Питание:</td>
                        	<td style="border-bottom:1px dotted #575859;"><?php echo $pitaniee; ?></td>
                    	</tr>
                        <tr>
                    		<td>Перелет/Проезд:</td>
                        	<td>Включен</td>
                    	</tr>
                	</table>
                </div>
                <p style="font-size:18px; font-weight:500; margin-top:10px;">Отдых</p>
                <div class="prof_tabl">
                	<table cellpadding="5" cellspacing="0">
                		<tr>
                    		<td style="border-bottom:1px dotted #575859;"></td>
                            <td style="border-bottom:1px dotted #575859;">Отправление</td>
                        	<td style="border-bottom:1px dotted #575859;">Прибытие</td>
                    	</tr>
                    	<tr>
                    		<td style="border-bottom:1px dotted #575859;">Когда:</td>
                            <td style="border-bottom:1px dotted #575859;"><?php echo $dataviezdaa; ?></td>
                        	<td style="border-bottom:1px dotted #575859;"><?php echo $datapriezda; ?></td>
                    	</tr>
                        <tr>
                    		<td style="border-bottom:1px dotted #575859;">Откуда:</td>
                            <td style="border-bottom:1px dotted #575859;"><?php echo $viezd_citii; ?></td>
                        	<td style="border-bottom:1px dotted #575859;"><?php echo $viezd_citii; ?></td>
                    	</tr>
                        </tr>
                        <tr>
                    		<td>Транспорт:</td>
                            <td><?php echo $roadd; ?></td>
                        	<td><?php echo $roadd; ?></td>
                    	</tr>
                    </table>
                </div>    
                </div>
            </div>
            </div>
        </div>
	</center>
</body>
</html>