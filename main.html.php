<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>PescaT</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>
	<div class="container">
	<header>
		<div class="logoName">
			<h1>PescaT</h1>
		</div>
	</header>
	<hr>
	<section class="home">
	<!-- < form action="<?=$base_url?>/add/" method="" > 
	IMPORTANTE ULTIMO CARACTER sino esta establecido no recibe ningun parametro por
	POST -->
		<div class="main">
			<ul>
				<li><a class="btn btn-info btn-lg btnM" href="<?=$base_url?>/add" role="button">Añadir una nueva especie     <i class="glyphicon glyphicon-pencil"></i></a></li>
				<li><a class="btn btn-info btn-lg btnM" href="<?=$base_url?>/delete" role="button">Eliminar una especie     <i class="glyphicon glyphicon-trash"></i></a></li>
				<li><a class="btn btn-info btn-lg btnM" href="<?=$base_url?>/list" role="button">Listado de especies     <i class="glyphicon glyphicon-list"></i></a></li>
			</ul>
		</div>
	</section>
	<hr>
	<footer>
		<div class="foot">
			<p>&copy; 2015 <a href="">Alejandro Córdoba Muñoz</a></p>
		</div>
	</footer>
	</div>
</body>
</html>