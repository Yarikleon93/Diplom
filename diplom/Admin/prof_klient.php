<?php /*?><?	$klienta = getaKlient($_GET['id']);
			$id_kliente = $klienta["id_klient"];
			$name = $klienta["name"];
			$fname = $klienta["fname"];
			$emaile = $klienta["email"];
			$data_regedite = $klienta["data_regedit"];
			$phonee = $klienta["phone"];
			$strana_progive = $klienta["strana_progiv"];
			$logine = $klienta["login"]; ?>
<div class="fon_k" id="fon">
	<div class="prof_klient_all">
    	<div class="id_nam_v">
        	<p>ID: &nbsp;<span style="font-weight:bold; color:#FFF;">232</span><span class="sp_nam_v">Login: &nbsp;<span style="font-weight:bold; color:#FFF;">leon93</span></span></p>
            <a href="All_klient.php"><div class="close_nam_v"><p>Закрыть X</p></div></a>
        </div>
        <table cellpadding="0" cellspacing="0">
        <tr><td style="width:150px; padding-left:15px;">Имя</td><td><?php echo $name; ?></td></tr>
        <tr><td style="padding-left:15px;">Фамилия</td><td><?php echo $fname; ?></td></tr>
        <tr><td style="padding-left:15px;">Email</td><td>Yarik.leon93@mail.ru</td></tr>
        <tr><td style="padding-left:15px;">Телефон</td><td>+380973300492</td></tr>
        <tr><td style="padding-left:15px;">Страна проживания</td><td>Украина</td></tr>
        <tr><td style="padding-left:15px;">Дата регистрации</td><td>2014.08.08</td></tr>
        </table>
	</div>
</div><?php */?>
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
    <div class="uslug" style="height:30px;">
    <ul><li>Клиенты</li></ul>
    </div>
<?	$klienta = getaKlient($_GET['id']);
			$id_kliente = $klienta["id_klient"];
			$name = $klienta["name"];
			$fname = $klienta["fname"];
			$email = $klienta["email"];
			$data_regedit = $klienta["data_regedit"];
			$phone = $klienta["phone"];
			$strana_progiv = $klienta["strana_progiv"];
			$login = $klienta["login"]; ?>
<div class="fon_k" id="fon">
	<div class="prof_klient_all">
    	<div class="id_nam_v">
        	<p>ID: &nbsp;<span style="font-weight:bold; color:#FFF;"><?php echo $id_kliente; ?></span><span class="sp_nam_v">Login: &nbsp;<span style="font-weight:bold; color:#FFF;"><?php echo $login; ?></span></span></p>
            <a href="All_klient.php"><div class="close_nam_v"><p>Закрыть X</p></div></a>
        </div>
        <table cellpadding="0" cellspacing="0">
        <tr><td style="width:150px; padding-left:15px;">Имя</td><td><?php echo $name; ?></td></tr>
        <tr><td style="padding-left:15px;">Фамилия</td><td><?php echo $fname; ?></td></tr>
        <tr><td style="padding-left:15px;">Email</td><td><?php echo $email; ?></td></tr>
        <tr><td style="padding-left:15px;">Телефон</td><td><?php echo $phone; ?></td></tr>
        <tr><td style="padding-left:15px;">Страна проживания</td><td><?php echo $strana_progiv; ?></td></tr>
        <tr><td style="padding-left:15px;">Дата регистрации</td><td><?php echo $data_regedit; ?></td></tr>
        </table>
	</div>
</div>
</center>
</body>
</html>
