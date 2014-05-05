<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Saludable con mi pan" />
	<meta name="keywords" content="etiqueta1, etiqueta2, etiqueta3" />
	<title>Saludable con mi Pan</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jcarousel.basic.js"></script>	
	<script type="text/javascript" src="js/jcarousel.control.js"></script>	
	<link rel="stylesheet" type="text/css" href="css/estilos.css" title="style" />
	<link rel="stylesheet" type="text/css" href="css/jcarousel.css" title="style" />
	<script>
		$(function() {
			$('.jcarousel').jcarousel({
				// Configuration goes here
			});
		});
	</script>
</head>
<body>
	<div id="contentRecetas">
		<?php include("header.php"); ?>
		<div class="jcarousel">
			<ul>
				<li><img src="images/receta1.jpg" /></li>
				<li><img src="images/receta2.jpg" /></li>
			</ul>
		</div>
		<a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true"><</a>
		<a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true">></a>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>
