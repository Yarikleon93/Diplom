<? require_once "../Admin/Start.php";
	$klient = getallKlient();
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
	<?  //require_once "prof_klient.php";
		require_once "Header.php";
		?>
    <div class="uslug">
    <ul><li>Клиенты</li></ul>
    <table style="width:500px; margin-left:-225px; font-weight:bold;">
    <tr style="height:35px;">
                <td style="color:#AE6800; padding-left:14px; width:40px;">ID</td>
                <td><div class="usl_td2" style="color:#AE6800; padding-left:37px;">Имя
                </td></div>
                <td style="color:#AE6800; width:165px;">Login</td>
                <td style="color:#AE6800; width:100px;">Email</td>
                </tr></table>
    	<? for ($i=count($klient)-1;$i>=0;$i--)
			{
				if ($i>=0)
				{
				
				$id_klient = $klient[$i]["id_klient"];
				$name = $klient[$i]["name"];
				$fname = $klient[$i]["fname"];
				$email = $klient[$i]["email"];
				$data_regedit = $klient[$i]["data_regedit"];
				$phone = $klient[$i]["phone"];
				$strana_progiv = $klient[$i]["strana_progiv"];
				$login = $klient[$i]["login"];
				
				?>
                <div style="margin-bottom:1px;">
                <div class="all_klient">
                <div class="allid_kl"><?php echo $id_klient; ?></div>
                <div class="allname_kl"><?php echo $name; ?></div>
                <div class="alllogin_kl"><?php echo $login; ?></div>
                <div class="allemail_kl" style="width:213px;"><?php echo $email; ?></div>
                <a href="prof_klient.php?id=<?php echo $id_klient; ?>"><div class="allpod_kl">Подробнее</div></a>
                <a href="del_klient.php?id=<?php echo $id_klient; ?>"><div class="alldel_kl">Удалить</div></a>
                </div>
				</div>                              
                <?php
				}
			}
		?>
        
    </div>

</center>
</body>
</html>
