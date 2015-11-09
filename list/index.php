<?php 

	require_once(dirname(dirname(__FILE__)).'/app/info.php');
	require_once(dirname(dirname(__FILE__)).'/bd/connectiondb.php');

	if ( isset($_GET['alphaFish'])) {

		$sql = 'SELECT * FROM fishes WHERE deletentry IS NULL ORDER BY fish ASC';

	}else if ( isset( $_GET['desalphaFish']) ) {

		$sql = 'SELECT * FROM fishes WHERE deletentry IS NULL ORDER BY fish DESC';

	}else {
		
		$sql = 'SELECT * FROM fishes WHERE deletentry IS NULL ORDER BY deletentry';

	}	

	try {
		

		$ps = $pdo->prepare($sql);

		$ps->execute();
		

	} catch (PDOException $e) {
		
		die("No se ha podido extraer informacion de la base de datos: " . $e -> getMessage());

	}

	while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

	$listOfFish [] = $row;

	}

	//Especies eliminadas

	try {
		
		$sql = 'SELECT * FROM fishes WHERE deletentry IS NOT NULL ORDER BY deletentry';

		$ps = $pdo->prepare($sql);

		$ps->execute();

	} catch (PDOException $e) {
		
		die("No se ha podido extraer informacion de la base de datos: " . $e -> getMessage());
		
	}

	while ($rows = $ps -> fetch(PDO::FETCH_ASSOC) ) {

	$listOfFishDeletes [] = $rows;

	} 

	require_once 'list.html.php';

 ?>