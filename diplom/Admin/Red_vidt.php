<? require_once "../Admin/Start.php";
	$vidt = getvidtRedak($_GET['id']);
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
		$name_vidput = $vidt["name_vidput"];
		$img_vidput = $vidt["img_vidput"];
	?>
    <div class="uslug" style="height:700px;">
    <ul><li>Редактирование вида тура</li></ul>
   <div>
   <div class="addnew">
    <form class="red_add_newsv" method="post" action="" style="float:left;">
        			
          <label>Название:</label>
          <input type="text"  name="red_name_vidput" required value="<?php echo $name_vidput; ?>"><br /><br /><br />
                        
          <label>Картинка:</label>
          <input type="text" name="red_img_vidput" required value="<?php echo $img_vidput; ?>"><br /><br /><br />
          
          <input type="submit" name="red_dob_vidput" required value="Редактировать">
    </form>
    <?php
   if(!empty($_POST["red_dob_vidput"])){
    $success=redVidput($_GET["id"],$_POST["red_name_vidput"],$_POST["red_img_vidput"]);
   }
   if($success){
    $alert = "Вид тура успешно обновлен!";
    include "../alert.php";
   }
   elseif(isset($_POST["red_dob_vidput"])) {
    $alert = "Произошла ошибка при обновлении вида тура!";
    include "../alert.php";
   }
   ?>
    </div>
 </div>
    </div>    

</center>
</body>
</html>
