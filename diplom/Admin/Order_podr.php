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
	<?  
		require_once "Header.php";
		?>
    <div class="uslug" style="height:30px;">
    <ul><li>Заказ</li></ul>
    </div>
<?	$order = getallZakdk($_GET['id']);
		$name_kl_z = $order["name_kl_z"];
		$fname_kl_z = $order["fname_kl_z"];
		$email_k_z = $order["email_k_z"];
		$phone_k_z = $order["phone_k_z"];
		$countr_z = $order["countr_z"];
		$citi_z = $order["citi_z"];
		$vid_put_z = $order["vid_put_z"];
		$coll_chel_z = $order["coll_chel_z"];
		$coll_day_z = $order["coll_day_z"];
		$data_otpr_z = $order["data_otpr_z"];
		$data_k_z = $order["data_k_z"]; 
?>
<div class="fon_k" id="fon">
	<div class="prof_zak_all" style="margin-top:-135px;">
    	<div class="id_nam_za">
        	<p>Date: &nbsp;<span style="font-weight:bold; color:#FFF;"><?php echo substr($data_k_z,0,10); ?></span><span class="sp_nam_v">Login: &nbsp;<span style="font-weight:bold; color:#FFF;"><?php echo $vid_put_z; ?></span></span></p>
            <a href="Order_a.php"><div class="close_nam_v" style="margin-left:80px;"><p>Закрыть X</p></div></a>
        </div>
        <table cellpadding="0" cellspacing="0">
        <tr><td style="width:150px; padding-left:15px;">Имя</td><td><?php echo $name_kl_z; ?></td></tr>
        <tr><td style="padding-left:15px;">Фамилия</td><td><?php echo $fname_kl_z; ?></td></tr>
        <tr><td style="padding-left:15px;">Email</td><td><?php echo $email_k_z; ?></td></tr>
        <tr><td style="padding-left:15px;">Телефон</td><td><?php echo $phone_k_z; ?></td></tr>
        <tr><td style="padding-left:15px;">Страна</td><td><?php echo $countr_z; ?></td></tr>
        <tr><td style="padding-left:15px;">Город</td><td><?php echo $citi_z; ?></td></tr>
        <tr><td style="padding-left:15px;">Количество человек</td><td><?php echo $coll_chel_z; ?></td></tr>
        <tr><td style="padding-left:15px;">Количество дней</td><td><?php echo $coll_day_z; ?></td></tr>
        <tr><td style="padding-left:15px;">Дата отправки</td><td><?php echo $data_otpr_z; ?></td></tr>
        </table>
	</div>
</div>
</center>
</body>
</html>