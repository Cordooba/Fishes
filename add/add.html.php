<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Añadir...</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
	<header>
		<h1><a class="btn btn-info back" href="<?=$base_url?>" role="button">Inicio <i class="glyphicon glyphicon-home"></i></a></h1>
		<h2 class="logoName">Añadir...</h1>
	</header>
	<hr>
	<section>
	<div class="container">
		<form action="" method="POST">
			<div class="form-group">
				<label for="usser">Usuario:</label>
					<input type="text" name="addUsser" value="<?php if ( isset( $addUsser ) ) echo $addUsser ?>">
			</div>
			<div class="form-group">
				<label for="fish">Nombre de la especie:</label>
					<input type="text" name="addFishName" value="<?php if ( isset( $addFishName ) ) echo $addFishName ?>">
			</div>
			<div class="form-group">
				<label for="type">Tipo de la especie:</label>
  					<label class="checkbox-inline">
    					<input type="radio" name="addTypeFish" id="optionsRadios1" value="Agua dulce" checked>
    					Agua dulce
  					</label>
  					<label class="checkbox-inline">
    					<input type="radio" name="addTypeFish" id="optionsRadios2" value="Agua salada">
    					Agua salada
  					</label>
  					<label class="checkbox-inline">
    					<input type="radio" name="addTypeFish" id="optionsRadios2" value="Agua fria">
						Agua fria
  					</label>
			</div>
			<div class="form-group">
				<label for="characteristics">Características de la especie:</label>
					<input type="text" name="addCharacterFish" value="<?php if ( isset( $addCharacterFish ) ) echo $addCharacterFish ?>">
			</div>
			<label for="feed">Alimentación de la especie:</label>
			<div class="form-group selector">
				<select class="form-control" name="addFeedFish">
  					<option>Carnívoros</option>
  					<option>Omnívoros</option>
  					<option>Herbívoros</option>
  					<option>Limnívoros</option>
				</select>
			</div>
			<div class="form-group">
				<label for="locality">Ubicación de la especie:</label>
					<input type="text" name="addLocalityFish" value="<?php if ( isset( $addLocalityFish ) ) echo $addLocalityFish ?>">
			</div>
			<div class="form-group btnAdd">
				<button type="submit" class="btn btn-info btn-lg">Aceptar <i class="glyphicon glyphicon-ok-circle"></i></button>
			</div>
		</form>
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