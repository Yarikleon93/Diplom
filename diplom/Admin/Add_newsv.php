<? require_once "../Admin/Start.php";
	$news = getallNews();
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
	
 if (!empty ($_POST["dob_news"])) {
	 $name_news = htmlspecialchars($_POST["name_news"]);
	 $opis_news = htmlspecialchars($_POST["opis_news"]);
	 $text_news = htmlspecialchars($_POST["text_news"]);
	 $date = $_POST["data_news"];
	 
	 if(isset($_FILES['img_news'])) {
            $uploaddir = 'Z:/home/localhost/www/Diplom/Foto/News/';
     		$apend = date('YmdHis').rand(100,1000).".".substr($_FILES['img_news']['type'],6,4);
     		$upfile = "$uploaddir$apend";

     	if($_FILES['img_news']['size'] > 0 && $_FILES['img_news']['size'] <= 1024000) {
      		if (move_uploaded_file($_FILES['img_news']['tmp_name'],$upfile)) {
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
	if (strlen ($name_news) < 3) $success = false;
	elseif (strlen ($opis_news) < 3) $success = false;
	elseif (!$imgcheck) $success = false;
	else $success = addNews($name_news, $opis_news, $text_news, $date, $apend);
	if (!$success) $alert = 'Ошибка при добавлении';
	else $alert = "Новость добавлена";
	include "Z:/home/localhost/www/Diplom/alert.php";
}
 
	?>
    <div class="uslug" style="height:700px;">
    <ul><li>Добавление новости</li></ul>
   <div>
   <div class="addnew">
    <form class="add_newsv" method="post" action="" style="float:left;" enctype="multipart/form-data">
        			
          <label>Название:</label>
          <input type="text"  name="name_news" required value=""><br /><br /><br />
                        
          <label>Картинка:</label>
          <input type="file" name="img_news" required value=""><br /><br /><br />
            
          <label>Краткое описание:</label><br />
          <textarea name="opis_news" maxlength="340"></textarea><br /><br /><br /><br /><br /><br /><br /><br />
      
          <label>Текст новости:</label><br />
          <textarea name="text_news"></textarea><br /><br /><br /><br /><br /><br /><br /><br /><br />
          
          <label style=" margin-left:22px;">Дата:</label>
          <input type="date" name="data_news" required value=""><br /><br /><br />
          
          <input type="submit" name="dob_news" required value="Добавить">
    </form>
    </div>
 </div>
    </div>    

</center>
</body>
</html>
