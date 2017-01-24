
            	<a href="Prof_tur.php?id=<?php echo "$id";?>" class="poisk_prof"><div class="news_tur" style="height:160px; margin-top:-7px;">
                <table style="float:left;">
                <tr>
                	<td><img src="Foto/Fotovid/<?php echo "$img";?>"  align="left" hspace="14" style=" width:155px;"></td></tr>
                </table>
                    <h3 align="left" hspace="14" style="color:#9B4C4C">&nbsp;&nbsp;<?php echo $country; ?></h3>
                    <table class="poisk_table" cellpadding="3px;">
                    	<tr>
                        <td class="tdtabpoisk">Цена:</td> <td style="width:290px; font-size:19px; font-weight:bold; color:#F00;"><?php echo $price; ?>&nbsp;$</td>
                        </tr>
                        
                        <tr>
                        <td class="tdtabpoisk">Ночей:</td> <td class="tdtabpoisk" style="color:#8F8F8F"><?php echo $day; ?></td>
                        </tr>
                        
                        <tr>
                        <td class="tdtabpoisk">Город:</td> <td class="tdtabpoisk" style="color:#8F8F8F"><?php echo $citi; ?></td>
                        </tr>
                        
                        <tr>
                        <td class="tdtabpoisk">Гостиница:</td> <td class="tdtabpoisk" style="color:#8F8F8F"><?php echo $hotel; ?></td>
                        </tr>
                    </table>
                </div></a>