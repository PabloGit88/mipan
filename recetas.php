<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Saludable con mi pan" />
	<meta name="keywords" content="etiqueta1, etiqueta2, etiqueta3" />
	<title>Saludable con mi Pan</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css" title="style" />
	<link rel="stylesheet" type="text/css" href="css/jcarousel.css" title="style" />

</head>
<body>
	<div id="contentRecetas">
		<?php include("header.php"); ?>
		<div class="jcarousel">
			<ul>
				<li><img src="images/receta1.jpg" /></li>
				<li><img src="images/receta2.jpg" /></li>
			</ul>
			<a class="jcarousel-prev" href="#"><img src="images/arrow.png" /></a>
			<a class="jcarousel-next" href="#"><img src="images/arrow2.png" /></a>
		</div>

	</div>
	<?php include("footer.php"); ?>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>	
	<script type="text/javascript" src="js/jcarousel.control.min.js"></script>	
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
