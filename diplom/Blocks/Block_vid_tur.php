<a href="Prof_tur.php?id=<?php echo "$id";?>" target="_blank"><div class="putevk_luchsh">
								<?php if ($_GET["type"]=="Горячие туры" || $idpage==001){?>
                                <div class="zvezd"><?php echo $pricee; ?>$</div><?php }
                                else {?> <div class="zvezd1"><?php echo $pricee; ?>$</div> <?php } ?>
                            	<div class="name_put"><p><?php echo $namee; ?></p></div>
                                <img src="Foto/Fotovid/<?php echo $imgg; ?>" class="kartin">
                                <div class="hotel_put"><p><?php echo $otell; ?></p></div>
                                <div class="tabl_put">
                                	<table cellpadding="0" cellspacing="0">
                                    <tr>
                                    	<td>Город</td><td><?php echo $cityy; ?></td>
                                    </tr>
                                    <tr>
                                    	<td>Отправка</td><td><?php echo $dataviezdaa; ?></td>
                                    </tr>
                                    <tr>
                                    	<td>Ночей</td><td><?php echo $colday; ?></td>
                                    </tr>
                                    <tr>
                                    	<td>Прилет</td><td>Включено</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="put_inf"><p>Цена указана на 2 человек в номере DBL</p></div>
                        	</div>  </a>