<?php
 if (!empty ($_POST["zakaz_zo"])) {
	 $name_z = htmlspecialchars($_POST["name_z"]);
	 $email_z = htmlspecialchars($_POST["email_z"]);
	 $numbt_z = htmlspecialchars($_POST["numbt_z"]);
	 $pogelan = htmlspecialchars($_POST["pogelan"]);
	    //foreach ($_POST as $ArrKey => $ArrStr) {
		//$ArrKey = $_POST[$ArrKey]; }
	 if (strlen ($name_z) < 3) $success = false;
	 elseif (strlen ($email_z) < 7) $success = false;
	 elseif (strlen ($numbt_z) < 5) $success = false;
	 elseif (strlen ($pogelan) < 7) $success = false;
	 else $success = addZakaz($name_z, $email_z, $numbt_z, $pogelan);
	 if (!$success) $alert = 'Ошибка при заказе';
	 else $alert = "Заявка успешно оформлена";
	 include "alert.php";
 }
?>
<div class="fon_z">
      <div class="zakaz_bistr_ram">
            	<form action="" method="post" name="bistr_zakaz">
        			<div class="regent">
            			<h3 style="font-size:24px; margin-top:19px; margin-left:23px;">Бысрый заказ</h3>
                        <a href="#" onClick="closee(); return false;"><p class="closee_v" style="margin-left:300px;">Закрыть <span style="font-weight:bold">X</span></p></a>
                	</div>
           				<br />
            		<div style="margin-top:-10px;">
            			<label>Имя:</label>
            			<input type="text"  name="name_z" placeholder="" required/><br />
            		</div>
            		<div style="margin-top:-10px;">
            			<label>Email:</label>
            			<input type="text" name="email_z" required/>
            		</div><br />
                    <div style="margin-top:-10px;">
            			<label>Номер телефона:</label>
            			<input type="text" name="numbt_z" placeholder="+38(097)777-77-77" required/>
            		</div><br />
                    <div style="margin-top:-10px;">
            			<label>Пожелания:</label>
            			<textarea name="pogelan" style=" height:70px;" placeholder="Опишите страну или услугу которую хотите заказать" name="pogel_z" maxlength=310></textarea>
            		</div>
            
            		<div class="nizreg" style="margin-top:20px; height:60px;">
                			<input type="submit" name="zakaz_zo"  value="Оставить заявку" style="width:170px;"/>
                            
        			</div>
            	</form>
    		</div>
</div>