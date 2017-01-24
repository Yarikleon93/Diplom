<? require_once "../Admin/Start.php";
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
	
 if (!empty ($_POST["dob_tur_v"])) {
	 $name_tur_v = htmlspecialchars($_POST["name_tur_v"]);
	 $opis_tur_v = htmlspecialchars($_POST["opis_tur_v"]);
	 $data_tur_v = ($_POST["data_tur_v"]);
	 $col_d_turv = ($_POST["col_d_turv"]);
	 $price_tur_v = ($_POST["price_tur_v"]);
	 $data_priezd_turv = ($_POST["data_priezd_turv"]);
	 $hotel_tur_v = htmlspecialchars($_POST["hotel_tur_v"]);
	 $countr_tur_v = htmlspecialchars($_POST["countr_tur_v"]);
	 $citi_tur_v = htmlspecialchars($_POST["citi_tur_v"]);
	 $road_tur_v = htmlspecialchars($_POST["road_tur_v"]);
	 $vid_tur_v = htmlspecialchars($_POST["vid_tur_v"]);
	 $pitanie_tur_v = htmlspecialchars($_POST["pitanie_tur_v"]);
	 $viezd_citi_turv = htmlspecialchars($_POST["viezd_citi_turv"]);
	 $raspolog_tur_v = htmlspecialchars($_POST["raspolog_tur_v"]);
	 $razvlech_turv = htmlspecialchars($_POST["razvlech_turv"]);
	 
	 if(isset($_FILES['img_tur_v'])) {
            $uploaddir = 'Z:/home/localhost/www/Diplom/Foto/Fotovid/';
     		$apend = date('YmdHis').rand(100,1000).".".substr($_FILES['img_tur_v']['type'],6,4);
     		$upfile = "$uploaddir$apend";

     	if($_FILES['img_tur_v']['size'] > 0 && $_FILES['img_tur_v']['size'] <= 1024000) {
      		if (move_uploaded_file($_FILES['img_tur_v']['tmp_name'],$upfile)) {
			   $size = getimagesize($upfile); 
			   if ($size[0] < 701 && $size[1] < 701) { 
        			$imgcheck = true; 
				}
				else 
				{
					$imgcheck = false;
					unlink($upfile);
				}
			}
			else 
			{
				$imgcheck = false;
		    }
		}
		else 
		{
			$imgcheck = false;
		}
	}
	else 
	{
		$imgcheck = false;
	}
	if (strlen ($name_tur_v) < 3) $success = false;
	elseif (strlen ($opis_tur_v) < 3) $success = false;
	elseif (!$imgcheck) $success = false;
	else $success = addTurv($name_tur_v, $opis_tur_v, $data_tur_v, $col_d_turv, $price_tur_v, $data_priezd_turv, $hotel_tur_v, $countr_tur_v, $citi_tur_v, $road_tur_v, $vid_tur_v, $pitanie_tur_v, $viezd_citi_turv, $raspolog_tur_v, $razvlech_turv, $apend);
	if (!$success) $alert = 'Ошибка при добавлении';
	else $alert = "Путевка добавлена";
	include "Z:/home/localhost/www/Diplom/alert.php";
}
 
	?>
    <div class="uslug" style="height:1340px;">
    <ul><li>Добавление тура</li></ul>
   <div>
   <div class="addnew">
    <form class="add_newsv" method="post" action="" style="float:left;" enctype="multipart/form-data">
        			
          <label>Название:</label>
          <input type="text"  name="name_tur_v" required value="" maxlength="9"><br /><br /><br />
            
          <label>Описание тура:</label><br />
          <textarea name="opis_tur_v"></textarea><br /><br /><br /><br /><br /><br /><br /><br /><br />
                        
          <label>Картинка:</label>
          <input type="file" name="img_tur_v" required value=""><br /><br /><br />
          
          <label style=" margin-left:22px;">Дата выезда:</label>
          <input type="date" name="data_tur_v" required value="" style="margin-left:50px;"><br /><br /><br />
          
          <label style=" margin-left:22px;">Количество дней:</label>
          <input type="number" name="col_d_turv" required value="" min="1" style="position:absolute; margin-left:-123px;"><br /><br /><br />
          
          <label style=" margin-left:22px;">Цена:</label>
          <input type="number" name="price_tur_v" required value="" min="1" style="position:absolute; margin-left:-81px;"><br /><br /><br />
          
          <label style=" margin-left:22px;">Дата приезда:</label>
          <input type="date" name="data_priezd_turv" required value="" style="margin-left:43px;"><br /><br /><br />
          
          <label>Гостиница:</label>
          <input type="text"  name="hotel_tur_v" required value="" style="position:absolute; margin-left:-100px;"><br /><br /><br />
          
          <label>Страна:</label>
          <input type="text"  name="countr_tur_v" required value="" style="position:absolute; margin-left:-87px;"><br /><br /><br />
          
          <label>Город:</label>
          <input type="text"  name="citi_tur_v" required value="" style="position:absolute; margin-left:-83px;"><br /><br /><br />
          
          <label>Дорога:</label>
          <input type="text"  name="road_tur_v" required value="" style="position:absolute; margin-left:-87px;"><br /><br /><br />
          
          <label>Вид путевки:</label>
          <input type="text"  name="vid_tur_v" required value="" style="position:absolute; margin-left:-105px;"><br /><br /><br />
          
          <label>Питание:</label>
          <input type="text"  name="pitanie_tur_v" required value="" style="position:absolute; margin-left:-92px;"><br /><br /><br />
          
          <label>Выезд из:</label>
          <input type="text"  name="viezd_citi_turv" required value="" style="position:absolute; margin-left:-93px;"><br /><br /><br />
          
          <label>Расположение:</label>
          <input type="text"  name="raspolog_tur_v" required value="" style="position:absolute; margin-left:-112px;"><br /><br /><br />
          
          <label>Развлечения и услуги:</label><br />
          <textarea name="razvlech_turv"></textarea><br /><br /><br /><br /><br /><br /><br /><br />
          
          <input type="submit" name="dob_tur_v" required value="Добавить">
    </form>
    </div>
 </div>
    </div>    

</center>
</body>
</html>
