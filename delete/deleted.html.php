<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Eliminar...</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
	<div class="container">
	<header>
		<h1><a class="btn btn-info back" href="<?=$base_url?>" role="button">Inicio <i class="glyphicon glyphicon-home"></i></a></h1>
		<h2 class="logoName">Eliminar...</h1>
	</header>
	<hr>
	<section>
			<?php if ( !empty($listOfFishDelete) ) :?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th><strong>Pez</strong></th>
							<th><strong>Tipo</strong></th>
							<th><strong>Alimentación</strong></th>
							<th><strong>Familia</strong></th>
							<th><strong>Características</strong></th>
							<th><strong>Ubicación</strong></th>
							<th><strong>Eliminar</strong></th>
						</tr>
					</thead>
					<tbody>
			<?php foreach($listOfFishDelete as $listFishesD): 
				switch ($listFishesD['type']) {
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
							<th><?=$listFishesD['fish']?></th>
							<th><?=$listFishesD['type']?></th>
							<th><?=$listFishesD['feed']?></th>
							<th><?=$listFishesD['family']?></th>
							<th><?=$listFishesD['characteristics']?></th>
							<th><?=$listFishesD['locality']?></th>
							<th class="listicon">
								<form action="?deleteFish" method="post">
									<input type="hidden" name="idFish" value="<?=$listFishesD['id']?>">
									<button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="glyphicon glyphicon-remove-circle"></i></button>
								</form>
							</th>
			<?php endforeach ; ?>
					</tbody>	
			<?php else : ?>
				<h3>No existe ningún registro de especie de peces para eliminar.</h3>
				<p class="deletedInfo">Cuando ingreses alguna especie de peces aparecerán en esta lista...</p>
			<?php endif; ?>
	</section>
	</div>
</body>
</html>