<?php
require_once "Start.php";
$news = getallNews();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Туристическое агенство</title>
<link href="Stili.css" type"text/css" rel="stylesheet">
<link rel="shortcut icon" href="/Diplom/Foto/logo1.png" type="image/x-icon">
<script type="text/javascript" src="jquery-1.2.6.js"></script>
<script type="text/javascript" src="Script.js"></script>
</head>

<body >
	<center>
    <?php
	require_once "Zakaz_bistr.php";
		require_once "Regedit.php";
	?>
   	  <div id="blok">
        <?php
		require_once "Blocks/Header.php";
		?>
      		<div class="gor_tur" style="background-color:rgba(53,45,72,0.5)">
            	<ul><li>Новости</li></ul>
        	</div>
			
            <div class="luchsh_tur1">
            <?php
            for ($i=count($news)-1;$i>=0;$i--)
			{
				if ($i>=0)
				{
				$id = $news[$i]["id_news"];
				$name = $news[$i]["name_news"];
				$img = $news[$i]["img_news"];
				$text = $news[$i]["text_news"];
				$data_n = $news[$i]["data_news"];
				?>
            	<div class="news_tur">
                <table style="float:left;">
                <tr>
                	<td><img src="Foto/News/<?php echo $img; ?>" / align="left" hspace="14"></td></tr>
                    <tr><td style="padding-left:14px;"><a href="Prof_news.php?id=<?php echo $id; ?>" class="news_tura">Подробнее</a></td></tr>
                </table>
                    <h3 align="left" hspace="14"><?php echo $name; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <p style="font-size:14px; color:#647087; margin-left:540px; margin-top:-18px;"><?php echo $data_n; ?></p></h3>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($text,0,640); ?></p>
                </div>
				<?php
				}
			}
		?>	
                
            </div>   
    	</div>
	</center>
    <a href="#" onclick="fastzakk(); return false;"><div class="bistrzak">Быстрый заказ</div></a>
</body>
</html>