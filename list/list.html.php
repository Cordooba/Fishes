<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consultar...</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
	<header>
		<h1><a class="btn btn-info back" href="<?=$base_url?>" role="button">Inicio <i class="glyphicon glyphicon-home"></i></a></h1>
		<h2 class="logoName">Consultar...</h1>
	</header>
	<hr>
	<section>
		<div class="container">
			<?php if ( !empty($listOfFish) ) :?>

			<?php else : ?>
				<h3>No existe ningún registro de especie de peces para consultar.</h3>
				<p class="deletedInfo">Cuando ingreses alguna especie de peces aparecerán en esta listado...</p>
			<?php endif; ?>
		</div>
	</section>
	<hr>
	<footer>
		<div class="foot">
			<p>&copy; 2015 <a href="">Alejandro Córdoba Muñoz</a></p>
		</div>
	</footer>
</body>
</html>