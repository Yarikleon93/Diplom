<? require_once "../Admin/Start.php";
	$zakaz = getallZakkl();
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
    <ul><li>Заказ</li></ul>
    <table style="width:640px; margin-left:-80px; font-weight:bold;">
    <tr style="height:35px;">
                <td style="color:#AE6800; padding-left:14px; width:50px;">№</td>
                <td><div class="usl_td2" style="color:#AE6800; padding-left:17px; width:110px;">Имя
                </td></div>
                <td style="color:#AE6800; width:139px;">Номер</td>
                <td style="color:#AE6800; width:120px;">Страна</td>
                <td style="color:#AE6800; width:105px;">Город</td>
                <td style="color:#AE6800; width:240px;">Дата</td>
                </tr></table>
    	<? for ($i=count($zakaz)-1;$i>=0;$i--)
			{
				if ($i>=0)
				{
				$id_zakaz = $zakaz[$i]["id_zakaz"];
				$name_kl_z = $zakaz[$i]["name_kl_z"];
				$phone_k_z = $zakaz[$i]["phone_k_z"];
				$countr_z = $zakaz[$i]["countr_z"];
				$citi_z = $zakaz[$i]["citi_z"];
				$data_k_z = $zakaz[$i]["data_k_z"];
				?>
                <div style="margin-bottom:-15px;" class="par_fz">
                <div class="all_klient1" style="border-top:none;">
                <div class="allid_kl"><?php echo count($zakaz)-$i; ?></div>
                <div class="allname_kl" style="width:100px;"><?php echo $name_kl_z; ?></div>
                <div class="alllogin_kl" style="margin-left:144px;"><?php echo $phone_k_z; ?></div>
                <div class="allemail_kl" style="width:100px; margin-left:274px;"><?php echo $countr_z; ?></div>
                <div class="allemail_kl" style="width:80px; margin-left:374px; background-color:#E1E1E1;"><?php echo $citi_z; ?></div>
                <div class="alldata_fz" style="background-color:#D8D9D9;"><?php echo $data_k_z; ?></div>
                <a href="Order_podr.php?id=<?php echo $id_zakaz; ?>"><div class="allpod_kl2">Подробно</div></a>
                <a href="Dell_ord_z.php?id=<?php echo $id_zakaz; ?>"><div class="alldel_kl">Удалить</div></a>
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
