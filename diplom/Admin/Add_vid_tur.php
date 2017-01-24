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
	
 if (!empty ($_POST["dob_vid_t"])) {
	 $name_vid_t = htmlspecialchars($_POST["name_vid_t"]);
	 
	 if(isset($_FILES['img_vid_t'])) {
            $uploaddir = 'Z:/home/localhost/www/Diplom/Foto/Vidtur/';
     		$apend = date('YmdHis').rand(100,1000).".".substr($_FILES['img_vid_t']['type'],6,4);
     		$upfile = "$uploaddir$apend";

     	if($_FILES['img_vid_t']['size'] > 0 && $_FILES['img_vid_t']['size'] <= 1024000) {
      		if (move_uploaded_file($_FILES['img_vid_t']['tmp_name'],$upfile)) {
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
	if (strlen ($name_vid_t) < 3) $success = false;
	elseif (!$imgcheck) $success = false;
	else $success = addVidt($name_vid_t, $apend);
	if (!$success) $alert = 'Ошибка при добавлении';
	else $alert = "Вид тура добавлен";
	include "Z:/home/localhost/www/Diplom/alert.php";
}
 
	?>
    <div class="uslug" style="height:700px;">
    <ul><li>Добавление вида тура</li></ul>
   <div>
   <div class="addnew">
    <form class="add_newsv" method="post" action="" style="float:left;" enctype="multipart/form-data">
        			
          <label>Название:</label>
          <input type="text"  name="name_vid_t" required value=""><br /><br /><br />
                        
          <label style="margin-right:40px;">Картинка:</label>
          <input type="file" name="img_vid_t" required value=""><br /><br /><br />
                      
          <input type="submit" name="dob_vid_t" required value="Добавить">
    </form>
    </div>
 	</div>
    </div>    

</center>
</body>
</html>
