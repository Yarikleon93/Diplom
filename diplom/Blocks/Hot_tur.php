<?php
$travels = getTravels("Горячие туры");
?>
<div class="hot_tur">
	<div class="hottur">
		<p class="ht">Горячие туры<a href="#" class="pt">Показать все</a></p>
	</div>
    <div class="hot_tur1">
		<?php
			for ($i=count($travels)-1;$i>count($travels)-4;$i--)
			{
				if ($i>=0)
				{
				$id = $travels[$i]["id_putevk"];
				$countryy = $travels[$i]["country"];
				$imgg = $travels[$i]["img"];
				$otell = $travels[$i]["otel"];
				$dataviezdaa = $travels[$i]["dataviezda"];
				$colday = $travels[$i]["coldney"];
				$cityy = $travels[$i]["city"];
				$pricee = $travels[$i]["price"];
				$namee = $travels[$i]["name"];
				include "Blocks/Block_vid_tur.php";
				}
			}
		?>
        </div>
</div>