<? require_once "../Admin/Start.php";
	$tur = getturRedak($_GET['id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Панель управления сайтом</title>
<link href="style.css" type"text/css" rel="stylesheet">
<link rel="shortcut icon" href="/Diplom/Foto/logo1.png" type="image/x-icon">
<script type="text/javascript" src="../jquery-1.2.6.js"></script>
<script type="text/javascript" src="../Script.js"></script>
</head>
<body style="background-color:rgba(219,223,225,0.2)">
<center>
	<? require_once "Header.php";
		$name = $tur["name"];
		$text_t = $tur["text_t"];
		$img = $tur["img"];
		$dataviezda = $tur["dataviezda"];
		$coldney = $tur["coldney"];
		$otel = $tur["otel"];
		$country = $tur["country"];
		$city = $tur["city"];
		$price = $tur["price"];
		$road = $tur["road"];
		$vidputev = $tur["vidputev"];
		$datapriezd = $tur["datapriezd"];
		$pitanie = $tur["pitanie"];
		$viezd_citi = $tur["viezd_citi"];
		$raspologenie = $tur["raspologenie"];
		$razvlech_uslug = $tur["razvlech_uslug"];
	?>
    <div class="uslug" style="height:1340px;">
    <ul><li>Редактирование новости</li></ul>
   <div>
   <div class="addnew">
    <form class="red_add_newsv" method="post" action="" style="float:left;">
        			
          <label>Название:</label>
          <input type="text"  name="name_tur_v" required value="<?php echo $name; ?>"><br /><br /><br />
            
          <label>Описание тура:</label><br />
          <textarea name="opis_tur_v"><?php echo $text_t; ?></textarea><br /><br /><br /><br /><br /><br /><br /><br /><br />
                        
          <label>Картинка:</label>
          <input type="text" name="img_tur_v" required value="<?php echo $img; ?>" style="margin-left:70px;"><br /><br /><br />
          
          <label style=" margin-left:22px;">Дата выезда:</label>
          <input type="text" name="data_tur_v" required value="<?php echo $dataviezda; ?>" style="margin-left:50px;"><br /><br /><br />
          
          <label style=" margin-left:22px;">Количество дней:</label>
          <input type="number" name="col_d_turv" required value="<?php echo $coldney; ?>" min="1" style="position:absolute; margin-left:-123px;"><br /><br /><br />
          
          <label style=" margin-left:22px;">Цена:</label>
          <input type="number" name="price_tur_v" required value="<?php echo $price; ?>" min="1" style="position:absolute; margin-left:-81px;"><br /><br /><br />
          
          <label style=" margin-left:22px;">Дата приезда:</label>
          <input type="text" name="data_priezd_turv" required value="<?php echo $datapriezd; ?>" style="margin-left:43px;"><br /><br /><br />
          
          <label>Гостиница:</label>
          <input type="text"  name="hotel_tur_v" required value="<?php echo $otel; ?>" style="position:absolute; margin-left:-100px;"><br /><br /><br />
          
          <label>Страна:</label>
          <input type="text"  name="countr_tur_v" required value="<?php echo $country; ?>" style="position:absolute; margin-left:-87px;"><br /><br /><br />
          
          <label>Город:</label>
          <input type="text"  name="citi_tur_v" required value="<?php echo $city; ?>" style="position:absolute; margin-left:-83px;"><br /><br /><br />
          
          <label>Дорога:</label>
          <input type="text"  name="road_tur_v" required value="<?php echo $road; ?>" style="position:absolute; margin-left:-87px;"><br /><br /><br />
          
          <label>Вид путевки:</label>
          <input type="text"  name="vid_tur_v" required value="<?php echo $vidputev; ?>" style="position:absolute; margin-left:-105px;"><br /><br /><br />
          
          <label>Питание:</label>
          <input type="text"  name="pitanie_tur_v" required value="<?php echo $pitanie; ?>" style="position:absolute; margin-left:-92px;"><br /><br /><br />
          
          <label>Выезд из:</label>
          <input type="text"  name="viezd_citi_turv" required value="<?php echo $viezd_citi; ?>" style="position:absolute; margin-left:-93px;"><br /><br /><br />
          
          <label>Расположение:</label>
          <input type="text"  name="raspolog_tur_v" required value="<?php echo $raspologenie; ?>" style="position:absolute; margin-left:-112px;"><br /><br /><br />
          
          <label>Развлечения и услуги:</label><br />
          <textarea name="razvlech_turv"><?php echo $razvlech_uslug; ?></textarea><br /><br /><br /><br /><br /><br /><br /><br />
          
          <input type="submit" name="red_dob_tur" required value="Редактировать">
    </form>
    <?php
   if(!empty($_POST["red_dob_tur"])){
    $success=redTurr($_GET["id"],$_POST["name_tur_v"],$_POST["opis_tur_v"],$_POST["img_tur_v"],$_POST["data_tur_v"],$_POST["col_d_turv"],$_POST["price_tur_v"],$_POST["data_priezd_turv"],$_POST["hotel_tur_v"],$_POST["countr_tur_v"],$_POST["citi_tur_v"],$_POST["road_tur_v"],$_POST["vid_tur_v"],$_POST["pitanie_tur_v"],$_POST["viezd_citi_turv"],$_POST["raspolog_tur_v"],$_POST["razvlech_turv"]);
   }
   if($success){
    $alert = "Новость успешно обновлена!";
    include "../alert.php";
   }
   elseif(isset($_POST["red_dob_tur"])) {
    $alert = "Произошла ошибка при обновлении новости!";
    include "../alert.php";
   }
   ?>
    </div>
 </div>
    </div>    

</center>
</body>
</html>
