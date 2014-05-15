<?php 
	$uri = $_SERVER['REQUEST_URI'];
?>

<div class="footer">
	<?php if(strpos($uri,"mercado.php") === false){ ?>
		<img class="layer" src="images/footerlayer2.jpg" />
	<?php }else{ ?>
		<img class="layer" src="images/footerlayer.jpg" />
	<?php } ?>
	<div id="footertop">
	<ul class="listfooter clearfix">
		<li><a href="pautas.php"><img src="images/saludable_con_mi_pan.jpg"/></a></a></li>
		<li><a href="pautas2.php"><img src="images/corazon_de_tomate.jpg"/></a></a></li>
	</ul>
	</div>
	<div id="footermid" class="clearfix">
		<a href="fraude.php"><img src="images/evita_el_fraude.jpg" /></a>
		<img src="images/adsef.jpg" />
	</div>
	<div id="footerbottom">
		<img src="images/footerbottom.png" />
	</div>
</div>