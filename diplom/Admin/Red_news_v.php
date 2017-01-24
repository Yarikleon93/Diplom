<? require_once "../Admin/Start.php";
	$news = getnewsRedak($_GET['id']);
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
		$name_news = $news["name_news"];
		$img_news = $news["img_news"];
		$text_news = $news["text_news"];
		$v_text_news = $news["v_text_news"];
		$data_news = $news["data_news"];
	?>
    <div class="uslug" style="height:700px;">
    <ul><li>Редактирование новости</li></ul>
   <div>
   <div class="addnew">
    <form class="red_add_newsv" method="post" action="" style="float:left;">
        			
          <label>Название:</label>
          <input type="text"  name="red_name_news" required value="<?php echo $name_news; ?>"><br /><br /><br />
                        
          <label>Картинка:</label>
          <input type="text" name="red_img_news" required value="<?php echo $img_news; ?>"><br /><br /><br />
            
          <label>Краткое описание:</label><br />
          <textarea name="red_opis_news" maxlength="340" required><?php echo $text_news; ?></textarea><br /><br /><br /><br /><br /><br /><br /><br />
      
          <label>Текст новости:</label><br />
          <textarea name="red_text_news" required><?php echo $v_text_news; ?></textarea><br /><br /><br /><br /><br /><br /><br /><br /><br />
          
          <label style=" margin-left:23px; margin-right:23px;">Дата:</label>
          <input type="red_text" name="data_news" required value="<?php echo $data_news; ?>"><br /><br /><br />
          
          <input type="submit" name="red_dob_news" required value="Редактировать">
    </form>
    <?php
   if(!empty($_POST["red_dob_news"])){
    $success=redNews($_GET["id"],$_POST["red_name_news"],$_POST["red_img_news"],$_POST["red_opis_news"],$_POST["red_text_news"],$_POST["data_news"]);
   }
   if($success){
    $alert = "Новость успешно обновлена!";
    include "../alert.php";
   }
   elseif(isset($_POST["red_dob_news"])) {
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
