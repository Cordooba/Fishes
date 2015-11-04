<?php 
	
	require_once(dirname(dirname(__FILE__)).'/app/info.php');
	require_once(dirname(dirname(__FILE__)).'/bd/connectiondb.php');

	if ($_POST) {

		$addUsser = htmlspecialchars($_POST['addUsser'], ENT_QUOTES, 'UTF-8');
		$addFishName = htmlspecialchars($_POST['addFishName'], ENT_QUOTES, 'UTF-8');
		$addTypeFish = htmlspecialchars($_POST['addTypeFish'], ENT_QUOTES, 'UTF-8');
		$addCharacterFish = htmlspecialchars($_POST['addCharacterFish'], ENT_QUOTES, 'UTF-8');
		$addFeedFish = htmlspecialchars($_POST['addFeedFish'], ENT_QUOTES, 'UTF-8');
		$addLocalityFish = htmlspecialchars($_POST['addLocalityFish'], ENT_QUOTES, 'UTF-8');
		$addErrores = [];

		if ( strlen($addUsser) == 0) {

			$addErrores ['problemUsser'] = true;

		}

		if ( strlen($addFishName) == 0) {

			$addErrores ['problemFishName'] = true;

		}

		if ( strlen($addCharacterFish) == 0) {

			$addErrores ['problemCharacterFish'] = true;

		}

		if ( strlen($addLocalityFish) == 0) {

			$addErrores ['problemLocalityFish'] = true;

		}

		echo $addUsser . " " . $addFishName . " " . $addTypeFish . " " . $addCharacterFish . " " . $addFeedFish;

		exit();
		
	}
	
	require_once 'add.html.php';

 ?>