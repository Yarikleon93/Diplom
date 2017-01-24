<? require_once "../Admin/Start.php";
	$putevk = getallPutevk();
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
	<?  
		require_once "Header.php";
	?>
    <div class="uslug">
    <ul><li>Путевки</li></ul>
    <a href="Add_tur.php"><div style="float:left; margin-left:15px; margin-top:-20px; width:150px; height:50px;"><p style="font-weight:bold; font-size:18px; color:#551A8B">Добавить путевку</p></div></a>
    <table style="width:600px; margin-left:-98px; font-weight:bold;">
    <tr style="height:35px;">
                <td style="color:#AE6800; padding-left:4px; width:100px;">№</td>
                <td><div class="usl_td2" style="color:#AE6800; width:90px;">Название
                </td></div>
                <td style="color:#AE6800; width:170px; padding-left:45px; margin-left:47px;">Город</td>
                <td style="color:#AE6800; width:150px; margin-left:-10px;">Просмотры</td>
                <td style="color:#AE6800; width:350px; text-align:left; padding-left:25px;">Дата</td>
                </tr></table>
    	<? for ($i=count($putevk)-1;$i>=0;$i--)
			{
				if ($i>=0)
				{
				$id_putevk = $putevk[$i]["id_putevk"];
				$name = $putevk[$i]["name"];
				$city = $putevk[$i]["city"];
				$views_tur = $putevk[$i]["views_tur"];
				$dataviezda = $putevk[$i]["dataviezda"];
				?>
                <div style="margin-bottom:-15px;" class="par_fz">
                <div class="all_klient1" style="border-top:none;">
                <div class="allid_kl"><?php echo count($putevk)-$i; ?></div>
                <div class="allname_kl" style="width:120px;"><?php echo $name; ?></div>
                <div class="alllogin_kl" style="margin-left:160px;"><?php echo $city; ?></div>
                <div class="allemail_kl" style="width:115px; margin-left:290px;"><?php echo $views_tur; ?></div>
                <div class="alldata_fz" style="margin-left:405px; width:110px;"><?php echo $dataviezda; ?></div>
                <a href="Red_tur.php?id=<?php echo $id_putevk; ?>"><div class="allpod_kl1k" style="margin-left:516px; width:127px;">Редактировать</div></a>
                <a href="dell_tur.php?id=<?php echo $id_putevk; ?>"><div class="alldel_klz">Удалить</div></a>
                </div>
                <p class="pok_fzakk"><?php echo $zakaz_zakazch; ?></p>
                </div>
                              
                <?php
				}
			}
		?>
        
    </div>

</center>
</body>
</html>
