<div class="logo">
            	<img  src="Foto/logo.png"/>
            </div>
            	<div class="menu">
                	<ul>
                    	<li><a href="Index.php">Главная</a></li>
                        <li><a href="Vse_turi.php">Туры</a></li>
                        <li><a href="#">Страны</a></li>
                        <li><a href="Poisk_zakaz.php">Поиcк и заказ</a></li>
                        <li><a href="Uslugi.php">Услуги</a></li>
                        <li><a href="All_news.php">Новости</a></li>
                        <li><a href="O_nas.php">О нас</a></li>
                        	<?
                            $klient = profKlient($_SESSION["login_v"]);
							$login = $klient["login"];
							$name = $klient["name"];
							$fname = $klient["fname"];
							$mail = $klient["email"];
							$numb = $klient["phone"];
							$citi = $klient["strana_progiv"];
							if(checkUser($_SESSION["login_v"],$_SESSION["password_v"])){ ?>
							<li style="width:205px;" class="lich_cab"><a href="#" onclick="return false">Личный кабинет</a></li>
						    <? } else{
							if($_SESSION["error_v"]){
								unset($_SESSION["error_v"]);
								$alert = "Неправильный login или пароль";
								include "alert.php";
								}
						?>
                        		<li class="rreged"><a href="#" onclick="clickk(); return false">Вход</a></li>
                        			
                        <div class="nomb">
                    		<p>+38 (097) 33-00-492</p>
                    		<p>+38 (093) 39-99-739</p>
                    	</div>
                        <? 
						
						}
						?>
                        </ul>
                    <form id="poisk" action="Search.php" method="get" name="searh">
                    	<input placeholder="Поиск по сайту" onfocus="if (this .placeholder=='Поиск по сайту') this .placeholder='';" onblur="if (this .placeholder=='') this .placeholder='Поиск по сайту'" type="text" name="poisk" id="s"  class="form_text"  maxlength="25"/>
                        <input type="submit" value="" class="form_butt" name="button_poisk" />
                    </form>
                    
                 </div>
                 <? if(checkUser($_SESSION["login_v"],$_SESSION["password_v"]))
					require_once 'vihh.php';?>