<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consultar...</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
	<div class="container">
	<header>
		<h1><a class="btn btn-info back" href="<?=$base_url?>" role="button">Inicio <i class="glyphicon glyphicon-home"></i></a></h1>
		<h2 class="logoName">Consultar...</h1>
	</header>
	<hr>
	<section>
			<?php if ( !empty($listOfFish) ) :?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th><strong>Pez</strong></th>
							<th><strong>Tipo</strong></th>
							<th><strong>Alimentación</strong></th>
							<th><strong>Familia</strong></th>
							<th><strong>Características</strong></th>
							<th><strong>Ubicación</strong></th>
						</tr>
					</thead>
					<tbody>
			<?php foreach($listOfFish as $listFishes): 
				switch ($listFishes['type']) {
								case 'Agua dulce':
									$colorType = 'class="info"';
									break;
								case 'Agua fria':
									$colorType = 'class="warning"';
									break;
								case 'Agua salada':
									$colorType = 'class="danger"';
									break;
								default:
									$colorType = 'class=""';
									break;
				}					
			?>						
						<tr <?=$colorType?>>
							<th><?=$listFishes['fish']?></th>
							<th><?=$listFishes['type']?></th>
							<th><?=$listFishes['feed']?></th>
							<th><?=$listFishes['family']?></th>
							<th><?=$listFishes['characteristics']?></th>
							<th><?=$listFishes['locality']?></th>
						</tr>
			<?php endforeach ; ?>
					</tbody>	
			<?php else : ?>
				<h3>No existe ningún registro de especie de peces para consultar.</h3>
				<p class="deletedInfo">Cuando ingreses alguna especie de peces aparecerán en esta listado...</p>
			<?php endif; ?>
			<?php if(isset($listOfFishDeletes) && count($listOfFishDeletes)>1) : ?>
					<a class="btn btn-link btnTD" href="<?=$base_url?>/deletes" role="button">Especies Eliminadas</a>
			<?php endif; ?>
	</section>
	<footer>
		<div class="foot">
			<p>&copy; 2015 <a href="">Alejandro Córdoba Muñoz</a></p>
			<p>Listado...</p>
		</div>
	</footer>
	</div>
</body>
</html>