<? require_once "../Admin/Start.php";
	$vidtur = getallVidTur();
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
	?>
    <div class="uslug" style="height:1000px;">
    <ul><li>Виды туров</li></ul>
    <a href="Add_vid_tur.php"><div class="vid_vidt"><p>Добавить вид тура</p></div></a>
    <hr />
    <div style=" margin-top:-23px;">
    	<? for ($i=0;$i<count($vidtur);$i++)
			{
				if ($i>=0)
				{
				$id_vidput = $vidtur[$i]["id_vidput"];
				$name_vidput = $vidtur[$i]["name_vidput"];
				$img_vidput = $vidtur[$i]["img_vidput"];
				?>
                <div class="vid_t">
                <img src="/Diplom/Foto/Vidtur/<?php echo $img_vidput; ?>"/><p><?php echo $name_vidput; ?></p>
                <p style="margin-top:-6px;"><a href="Red_vidt.php?id=<?php echo $id_vidput; ?>"><span>Редактировать</span></a><a href="dell_vidt.php?id=<?php echo $id_vidput; ?>"><span style="border-radius:0 0 7px 7px;">Удалить</span></a></p>
                </div>
                <?php
				}
			}
		?>
        </div>
    </div>

</center>
</body>
</html>
