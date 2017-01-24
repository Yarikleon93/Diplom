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
	?>
    <div class="uslug">
    <ul><li>Новости</li></ul>
    <a href="Add_newsv.php"><div style="float:left; margin-left:15px; margin-top:-20px; width:150px; height:50px;"><p style="font-weight:bold; font-size:18px; color:#551A8B">Добавить новость</p></div></a>
    <table style="width:100%;">
    <tr style="height:35px;">
                <td style="color:#F90;">№</td>
                <td><div class="usl_td1" style="color:#F90;">Имя
                </td></div>
                <td style="color:#F90;">Просмотры</td>
                <td style="color:#F90;">Дата</td>
                </tr>
    	<? for ($i=count($news)-1;$i>=0;$i--)
		//$i=count($uslugi)-1;$i>=0;$i--//count($news)-$i; //$i=0;$i<count($uslugi);$i++ //$i+1;
			{
				if ($i>=0)
				{
				$id_news = $news[$i]["id_news"];
				$name_news = $news[$i]["name_news"];
				$views_new = $news[$i]["views_new"];
				$data_news = $news[$i]["data_news"];
				?>
                <tr>
                <td style="color:#641400;"><?php echo count($news)-$i; ?>.</td>
                <td><div class="usl_td1">
                <?php echo $name_news; ?>
                </td></div>
                <td style="color:#641400;"><?php echo $views_new; ?></td>
                <td style="color:#641400;"><?php echo $data_news; ?></td>
                <td style="color:#641400;" ><a href="Red_news_v.php?id=<?php echo $id_news; ?>">Редактировать</a></td>
                <td style="color:#641400;"><a href="dell_news.php?id=<?php echo $id_news; ?>">Удалить</a></td>
                </tr>
                <?php
				}
			}
		?>
        </table>
    </div>

</center>
</body>
</html>
