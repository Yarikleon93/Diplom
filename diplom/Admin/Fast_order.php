<? require_once "../Admin/Start.php";
	$fzakaz = getallFastorder();
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
    <ul><li>Быстрый заказ</li></ul>
    <table style="width:600px; margin-left:-98px; font-weight:bold;">
    <tr style="height:35px;">
                <td style="color:#AE6800; padding-left:-4px; width:100px;">№</td>
                <td><div class="usl_td2" style="color:#AE6800; width:70px;">Имя
                </td></div>
                <td style="color:#AE6800; width:255px; padding-left:45px; margin-left:47px;">Номер</td>
                <td style="color:#AE6800; width:140px;">Email</td>
                <td style="color:#AE6800; width:230px; text-align:left; padding-left:60px;">Дата</td>
                </tr></table>
    	<? for ($i=count($fzakaz)-1;$i>=0;$i--)
			{
				if ($i>=0)
				{
				$id_zak = $fzakaz[$i]["id_zak"];
				$name_zakazch = $fzakaz[$i]["name_zakazch"];
				$email_zakazch = $fzakaz[$i]["email_zakazch"];
				$numb_t_zakaz = $fzakaz[$i]["numb_t_zakaz"];
				$zakaz_zakazch = $fzakaz[$i]["zakaz_zakazch"];
				$data_zakazch = $fzakaz[$i]["data_zakazch"];
				?>
                <div style="margin-bottom:1px;" class="par_fz">
                <div class="all_klient1" style="border-top:none;">
                <div class="allid_kl"><?php echo count($fzakaz)-$i; ?></div>
                <div class="allname_kl" style="width:100px;"><?php echo $name_zakazch; ?></div>
                <div class="alllogin_kl" style="margin-left:144px;"><?php echo $numb_t_zakaz; ?></div>
                <div class="allemail_kl" style="width:180px; margin-left:274px;"><?php echo $email_zakazch; ?></div>
                <div class="alldata_fz"><?php echo $data_zakazch; ?></div>
                <a href="#"><div class="allpod_kl1" onclick="openn(<?php echo $id_zak; ?>); return false;">Заказ</div></a>
                <a href="del_fastorder.php?id=<?php echo $id_zak; ?>"><div class="alldel_klz">Удалить</div></a>
                </div>
                <p class="<?php echo $id_zak; ?>" style="margin:4px 10px 4px 10px; text-align:justify; display:none;"><?php echo $zakaz_zakazch; ?></p>
                </div>
                                   
                 <script>
				 	function openn(p){
				 	//$(e.target).parent('.par_fz').children('.').slideToggle(400);
					$('.'+p).slideToggle(400);
					};
                 </script> 
                 
                <?php
				}
			}
		?>
        		
                 
    </div>

</center>
</body>
</html>
