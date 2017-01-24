		<?php
		$klient = profKlient($_SESSION["login_v"]);
		$name = $klient["name"];
		$mail = $klient["email"];
		$fname = $klient["fname"];
		$numb = $klient["phone"];
		
		$travel = getTravel($_GET["id"]);
		$id = $travel["id_putevk"];
		$vid_put = $travel["vidputev"];
		$countryy = $travel["country"];
		$cityy = $travel["city"];
		
			if (!empty ($_POST["zakaz_pza"])) {
				$name_za = htmlspecialchars($_POST["name_za"]);
				$fname_za = htmlspecialchars($_POST["fname_za"]);
				$email_za = htmlspecialchars($_POST["email_za"]);
				$telef_za = htmlspecialchars($_POST["telef_za"]);
				$countr_za = htmlspecialchars($_POST["countr_za"]);
				$citi_za = htmlspecialchars($_POST["citi_za"]);
				$vid_put_za = htmlspecialchars($_POST["vid_put_za"]);
				$col_pipl_za = htmlspecialchars($_POST["col_pipl_za"]);
				$col_dn_za = htmlspecialchars($_POST["col_dn_za"]);
				$data_otpr_za = htmlspecialchars($_POST["data_otpr_za"]);
				if (strlen ($name_za) < 3) $success = false;
				elseif (strlen ($fname_za) < 3) $success = false;
				elseif (strlen ($email_za) < 3) $success = false;
				elseif (strlen ($telef_za) < 5) $success = false;
				elseif (strlen ($countr_za) < 3) $success = false;
				elseif (strlen ($citi_za) < 3) $success = false;
				elseif (strlen ($vid_put_za) < 3) $success = false;
				else $success = addZakazKlient($id, $name_za, $fname_za, $email_za, $telef_za, $countr_za, $citi_za, $vid_put_za, $col_pipl_za, $col_dn_za, $data_otpr_za);
				if (!$success) $alert = 'Ошибка при заказе';
				else $alert = "Ваш заказ успешно оформлен!";
				include "alert.php";
				}
				
		if(checkUser($_SESSION["login_v"],$_SESSION["password_v"])){
			
		?>

<div class="fon_za" onClick="skrit()">
<div class="regedit_za">
            	<form class="form_reg" method="post" action="">
        			<div class="regent">
            			<h3>Оформление заказа</h3>
                        <a href="#" onClick="return false"><p class="closee_r">Закрыть <span style="font-weight:bold">X</span></p></a>
                	</div>
           				<br />
            		<div style="position:relative; width:205px; display:inline-table;">
            			<label>Имя:</label><br />
            			<input type="text"  name="name_za" placeholder="" required value="<?php echo $name; ?>" readonly/><br />
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Фамилия:</label><br />
            			<input type="text"  name="fname_za" placeholder="" required value="<?php echo $fname; ?>" readonly/><br />
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Email:</label><br />
            			<input type="text" name="email_za" placeholder="Ivanov@mail.ru" required value="<?php echo $mail; ?>" readonly/><br />
            		</div>
            		<div style="position:relative; width:205px; display:inline-table;">
            			<label>Телефон:</label><br />
            			<input type="tel" name="telef_za" placeholder="+3(067) 33-00-492" required value="<?php echo $numb; ?>"/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Страна:</label><br />
            			<input type="text" name="countr_za" required value="<?php echo $countryy; ?>"/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Город:</label><br />
            			<input type="text" name="citi_za" required value="<?php echo $cityy; ?>"/>
            		</div><br /><br />
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Вид путевки:</label><br />
            			<input type="text" name="vid_put_za" required value="<?php echo $vid_put; ?>"/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Количество человек:</label><br />
            			<input type="number" name="col_pipl_za" required value=""/>
            		</div>
                    <br /><br />
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Количество дней:</label><br />
            			<input type="number" name="col_dn_za" required value=""/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Дата отправки:</label><br />
            			<input type="date" name="data_otpr_za" required/>
            		</div>
            		<div class="nizreg_r">
                			<input style="margin:15px 0 0 43px" type="submit" name="zakaz_pza" style="color:#000;" value="Оставить заявку"/>
        			</div>
            	</form>
    		</div>
        </div>
        <? } else { ?>
        
<div class="fon_za" onClick="skrit()">
<div class="regedit_za">
            	<form class="form_reg" method="post" action="">
        			<div class="regent">
            			<h3>Оформление заказа</h3>
                        <a href="#" onClick="return false"><p class="closee_r">Закрыть <span style="font-weight:bold">X</span></p></a>
                	</div>
           				<br />
            		<div style="position:relative; width:205px; display:inline-table;">
            			<label>Имя:</label><br />
            			<input type="text"  name="name_za" placeholder="" required value=""/><br />
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Фамилия:</label><br />
            			<input type="text"  name="fname_za" placeholder="" required value=""/><br />
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Email:</label><br />
            			<input type="text" name="email_za" placeholder="Ivanov@mail.ru" required value=""/><br />
            		</div>
            		<div style="position:relative; width:205px; display:inline-table;">
            			<label>Телефон:</label><br />
            			<input type="tel" name="telef_za" placeholder="+3(067) 33-00-492" required value=""/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Страна:</label><br />
            			<input type="text" name="countr_za" required value="<?php echo $countryy; ?>"/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Город:</label><br />
            			<input type="text" name="citi_za" required value="<?php echo $cityy; ?>"/>
            		</div><br /><br />
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Вид путевки:</label><br />
            			<input type="text" name="vid_put_za" required value="<?php echo $vid_put; ?>"/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Количество человек:</label><br />
            			<input type="number" name="col_pipl_za" required value=""/>
            		</div>
                    <br /><br />
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Количество дней:</label><br />
            			<input type="number" name="col_dn_za" required value=""/>
            		</div>
                    <div style="position:relative; width:205px; display:inline-table;">
            			<label>Дата отправки:</label><br />
            			<input type="date" name="data_otpr_za" required/>
            		</div>
            		<div class="nizreg_r">
                			<input style="margin:15px 0 0 43px" type="submit" name="zakaz_pza"  value="Оставить заявку"/>
        			</div>
            	</form>
    		</div>
        </div>
        <? } ?>
		