<? require_once "../Admin/Start.php";
	$uslug = getuslugRedak($_GET['id']);
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
		$name_uslug = $uslug["name_uslug"];
		$img_uslug = $uslug["img_uslug"];
		$text_uslug = $uslug["text_uslug"];
	?>
    <div class="uslug" style="height:700px;">
    <ul><li>Редактирование новости</li></ul>
   <div>
   <div class="addnew">
    <form class="red_add_newsv" method="post" action="" style="float:left;">
        			
          <label>Название:</label>
          <input type="text"  name="red_name_usl" required value="<?php echo $name_uslug; ?>"><br /><br /><br />
                        
          <label>Картинка:</label>
          <input type="text" name="red_img_usl" required value="<?php echo $img_uslug; ?>"><br /><br /><br />
            
          <label>Краткое описание:</label><br />
          <textarea name="red_opis_usl" maxlength="340" required><?php echo $text_uslug; ?></textarea><br /><br /><br /><br /><br /><br /><br /><br />
          
          <input type="submit" name="red_dob_usl" value="Редактировать">
    </form>
    <?php
   if(!empty($_POST["red_dob_usl"])){
    $success=redUslug($_GET["id"],$_POST["red_name_usl"],$_POST["red_img_usl"],$_POST["red_opis_usl"]);
   }
   if($success){
    $alert = "Услуга успешно обновлена!";
    include "../alert.php";
   }
   elseif(isset($_POST["red_dob_usl"])) {
    $alert = "Произошла ошибка при обновлении услуги!";
    include "../alert.php";
   }
   ?>
    </div>
 </div>
    </div>    

</center>
</body>
</html>
