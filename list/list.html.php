<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consultar...</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
	<div class="container">
	<header>
		<h1><a class="btn btn-info back" href="<?=$base_url?>" role="button">Inicio <i class="glyphicon glyphicon-home"></i></a></h1>
		<h2 class="logoName">Consultar...</h1>
	</header>
	<hr>
	<?php if( !empty($listOfFish) && count($listOfFish)>1 ): ?>
		<table>
			<tbody>
				<div class="btn-group" role="group" aria-label="order">
				<tr>
					<td>
						<form action="?alphaFish" method="post" class="orderbutton">
							<button type="submit" class="btn btn-primary btn1">
								<span class="glyphicon glyphicon-sort-by-alphabet"></span>
							</button>
						</form>
					</td>
					<td>
						<form action="?desalphaFish" method="post" class="orderbutton">
							<button type="submit" class="btn btn-danger btn2">
								<span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
							</button>
						</form>
					</td>
					<td>
						<form action="?fishTypeSalada" method="post" class="orderbutton">
							<button type="submit" class="btn btn-warning btn3">
								<span class="glyphicon glyphicon-plane"></span>
							</button>
						</form>
					</td>
					<td>
						<form action="?fishTypeDulce" method="post" class="orderbutton">
							<button type="submit" class="btn btn-success btn4">
								<span class="glyphicon glyphicon-sunglasses"></span>
							</button>
						</form>
					</td>
					<td>
						<form action="?fishTypeFria" method="post" class="orderbutton">
							<button type="submit" class="btn btn-active btn5">
								<span class="glyphicon glyphicon-piggy-bank"></span>
							</button>
						</form>
					</td>
				</tr>
				</div>
			</tbody>
		</table>
	<?php endif; ?>
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
					<a class="btn btn-info btnFishDeletes" href="<?=$base_url?>/deletes" role="button">Especies Eliminadas</a>
			<?php endif; ?>
	</section>
	</div>
</body>
</html>