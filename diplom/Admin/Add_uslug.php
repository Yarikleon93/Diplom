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
	
 if (!empty ($_POST["dob_usl"])) {
	 $name_usl = htmlspecialchars($_POST["name_usl"]);
	 $opis_usl = htmlspecialchars($_POST["opis_usl"]);
	 
	 if(isset($_FILES['img_usl'])) {
            $uploaddir = 'Z:/home/localhost/www/Diplom/Foto/Uslugi/';
     		$apend = date('YmdHis').rand(100,1000).".".substr($_FILES['img_usl']['type'],6,4);
     		$upfile = "$uploaddir$apend";

     	if($_FILES['img_usl']['size'] > 0 && $_FILES['img_usl']['size'] <= 1024000) {
      		if (move_uploaded_file($_FILES['img_usl']['tmp_name'],$upfile)) {
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
	if (strlen ($name_usl) < 3) $success = false;
	elseif (strlen ($opis_usl) < 3) $success = false;
	elseif (!$imgcheck) $success = false;
	else $success = addUslug($name_usl, $opis_usl, $apend);
	if (!$success) $alert = 'Ошибка при добавлении';
	else $alert = "Услуга добавлена";
	include "Z:/home/localhost/www/Diplom/alert.php";
}
 
	?>
    <div class="uslug" style="height:700px;">
    <ul><li>Добавление услуги</li></ul>
   <div>
   <div class="addnew">
    <form class="add_newsv" method="post" action="" style="float:left;" enctype="multipart/form-data">
        			
          <label>Название:</label>
          <input type="text"  name="name_usl" required value=""><br /><br /><br />
                        
          <label>Картинка:</label>
          <input type="file" name="img_usl" required value=""><br /><br /><br />
            
          <label>Текст услуги:</label><br />
          <textarea name="opis_usl" maxlength="340"></textarea><br /><br /><br /><br /><br /><br /><br /><br />
          
          <input type="submit" name="dob_usl" required value="Добавить">
    </form>
    </div>
 </div>
    </div>    

</center>
</body>
</html>
