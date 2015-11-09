<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Añadir...</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div class="container">
	<header>
		<h1><a class="btn btn-info back" href="<?=$base_url?>" role="button">Inicio <i class="glyphicon glyphicon-home"></i></a></h1>
		<h2 class="logoName">Añadir...</h1>
	</header>
	<hr>
	<section>
		<form action="" method="POST">
		<?php if ( empty($addErrores['problemUsser']) ) : ?>
			<div class="form-group">
				<label for="usser">Usuario:</label>
					<input class="form-control" type="text" name="addUsser" value="<?php if ( isset( $addUsser ) ) echo $addUsser ?>">
			</div>
		<?php else : ?>
			<div class="form-group has-error has-feedback">
  				<label class="control-label" for="inputError2">Usuario:</label>
 			 		<input type="text" name="addUsser" value="<?php if ( isset( $addUsser ) ) echo $addUsser ?>" class="form-control" id="inputError2" aria-describedby="inputError2Status">
  						<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  						<span id="inputError2Status" class="sr-only">(error)</span>
			</div>
		<?php endif; ?>
		<?php if ( empty($addErrores['problemFishName']) ) : ?>	
			<div class="form-group">
				<label for="fish">Nombre de la especie:</label>
					<input class="form-control" type="text" name="addFishName" value="<?php if ( isset( $addFishName ) ) echo $addFishName ?>">
			</div>
		<?php else : ?>
			<div class="form-group has-error has-feedback">
  				<label class="control-label" for="inputError2">Nombre de la especie:</label>
 			 		<input type="text" name="addFishName" value="<?php if ( isset( $addFishName ) ) echo $addFishName ?>" class="form-control" id="inputError2" aria-describedby="inputError2Status">
  						<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  						<span id="inputError2Status" class="sr-only">(error)</span>
			</div>
		<?php endif; ?>
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
		<?php if ( empty($addErrores['problemFamilyFish']) ) : ?>	
			<div class="form-group">
				<label for="characteristics">Familia de la especie:</label>
					<input class="form-control" type="text" name="addFamilyFish" value="<?php if ( isset( $addFamilyFish ) ) echo $addCharacterFish ?>">
			</div>
		<?php else : ?>
			<div class="form-group has-error has-feedback">
  				<label class="control-label" for="inputError2">Familia de la especie:</label>
 			 		<input type="text" name="addFamilyFish" value="<?php if ( isset( $addFamilyFish ) ) echo $addFamilyFish ?>" class="form-control" id="inputError2" aria-describedby="inputError2Status">
  						<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  						<span id="inputError2Status" class="sr-only">(error)</span>
			</div>
		<?php endif; ?>
		<?php if ( empty($addErrores['problemCharacterFish']) ) : ?>	
			<div class="form-group">
				<label for="characteristics">Características de la especie:</label>
					<input class="form-control" type="text" name="addCharacterFish" value="<?php if ( isset( $addCharacterFish ) ) echo $addCharacterFish ?>">
			</div>
		<?php else : ?>
			<div class="form-group has-error has-feedback">
  				<label class="control-label" for="inputError2">Características de la especie:</label>
 			 		<input type="text" name="addCharacterFish" value="<?php if ( isset( $addCharacterFish ) ) echo $addCharacterFish ?>" class="form-control" id="inputError2" aria-describedby="inputError2Status">
  						<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  						<span id="inputError2Status" class="sr-only">(error)</span>
			</div>
		<?php endif; ?>
			<label for="feed">Alimentación de la especie:</label>
			<div class="form-group">
				<select class="form-control" name="addFeedFish">
  					<option>Carnívoros</option>
  					<option>Omnívoros</option>
  					<option>Herbívoros</option>
  					<option>Limnívoros</option>
				</select>
			</div>
		<?php if ( empty($addErrores['problemLocalityFish']) ) : ?>
			<div class="form-group">
				<label for="locality">Ubicación de la especie:</label>
					<input class="form-control" type="text" name="addLocalityFish" value="<?php if ( isset( $addLocalityFish ) ) echo $addLocalityFish ?>">
			</div>
		<?php else : ?>
			<div class="form-group has-error has-feedback">
  				<label class="control-label" for="inputError2">Ubicación de la especie:</label>
 			 		<input type="text" name="addLocalityFish" value="<?php if ( isset( $addLocalityFish ) ) echo $addLocalityFish ?>" class="form-control" id="inputError2" aria-describedby="inputError2Status">
  						<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  						<span id="inputError2Status" class="sr-only">(error)</span>
			</div>
		<?php endif; ?>	
			<div class="form-group btnAdd">
				<button type="submit" class="btn btn-info btn-lg">Aceptar <i class="glyphicon glyphicon-ok-circle"></i></button>
			</div>
		</form>	
	</section>
</div>	
</body>
</html>