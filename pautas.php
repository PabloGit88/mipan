<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Saludable con mi pan" />
	<meta name="keywords" content="etiqueta1, etiqueta2, pautas" />
	<title>Pautas - Saludable con mi Pan</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css" title="style" />
	<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
	<script type="text/javascript" src="highslide/highslide.js"></script>
</head>
<body>
	<div id="contentPautas">
		<?php include("header.php"); ?>
		<div class="pautas">
			<div class="pautasTop">
				<div class="pauta"><a href="images/fullpauta1.jpg" class="highslide" onclick="return hs.expand(this)"><img src="images/pauta1.jpg"/></a></div>
				<div class="pauta"><a href="images/fullpauta2.jpg" class="highslide" onclick="return hs.expand(this)"><img src="images/pauta2.jpg"/></a></div>
				<div class="pauta"><a href="images/fullpauta3.jpg" class="highslide" onclick="return hs.expand(this)"><img src="images/pauta3.jpg"/></a></div>
			</div>
			<div class="pautasBottom">
				<div class="pauta"><a href="images/fullpauta4.jpg" class="highslide" onclick="return hs.expand(this)"><img src="images/pauta4.jpg"/></a></div>
				<<div class="pauta"><a href="images/fullpauta5.jpg" class="highslide" onclick="return hs.expand(this)"><img src="images/pauta5.jpg"/></a></div>
			</div>
		</div>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>
