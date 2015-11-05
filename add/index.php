<?php 
	
	require_once(dirname(dirname(__FILE__)).'/app/info.php');
	require_once(dirname(dirname(__FILE__)).'/bd/connectiondb.php');

	if ($_POST) {

		//Datos del formulario

		$addUsser = htmlspecialchars($_POST['addUsser'], ENT_QUOTES, 'UTF-8');
		$addFishName = htmlspecialchars($_POST['addFishName'], ENT_QUOTES, 'UTF-8');
		$addTypeFish = htmlspecialchars($_POST['addTypeFish'], ENT_QUOTES, 'UTF-8');
		$addFamilyFish = htmlspecialchars($_POST['addFamilyFish'], ENT_QUOTES, 'UTF-8');
		$addCharacterFish = htmlspecialchars($_POST['addCharacterFish'], ENT_QUOTES, 'UTF-8');
		$addFeedFish = htmlspecialchars($_POST['addFeedFish'], ENT_QUOTES, 'UTF-8');
		$addLocalityFish = htmlspecialchars($_POST['addLocalityFish'], ENT_QUOTES, 'UTF-8');

		//Array de errores

		$addErrores = [];

		//Comprobacion de errores

		if ( strlen($addUsser) == 0) {

			$addErrores ['problemUsser'] = true;

		}

		if ( strlen($addFishName) == 0) {

			$addErrores ['problemFishName'] = true;

		}

		if ( strlen($addFamilyFish) == 0) {

			$addErrores ['problemFamilyFish'] = true;

		}

		if ( strlen($addCharacterFish) == 0) {

			$addErrores ['problemCharacterFish'] = true;

		}

		if ( strlen($addLocalityFish) == 0) {

			$addErrores ['problemLocalityFish'] = true;

		}

		//Si no hay errores, añadimos un registro a la base de datos

		if ( empty($addErrores) ) {

		try {
			
			$sql = "INSERT INTO fishes (fish, type, feed, family, characteristics, locality) VALUES (:addFishName, :addTypeFish, :addFeedFish, :addFamilyFish, :addCharacterFish, :addLocalityFish)";

			$ps = $pdo->prepare($sql);

			$ps->bindValue(':addFishName', $addFishName);
			$ps->bindValue(':addTypeFish', $addTypeFish);
			$ps->bindValue(':addFeedFish', $addFeedFish);
			$ps->bindValue(':addFamilyFish', $addFamilyFish);
			$ps->bindValue(':addCharacterFish', $addCharacterFish);
			$ps->bindValue(':addLocalityFish', $addLocalityFish);

			$ps->execute();

		} catch (PDOException $e) {

			die("No se ha podido introducir el registro en la base de datos:".$e->getMessage());
		
	}

		header("Location:".$base_url);
		exit();

	}

	}	

	require_once 'added.html.php';

 ?>