<?php 

	require_once(dirname(dirname(__FILE__)).'/app/info.php');
	require_once(dirname(dirname(__FILE__)).'/bd/connectiondb.php');

	$listOfFish = [];

	try {
		
		$sql = 'SELECT * FROM fishes WHERE deletentry IS NULL ORDER BY deletentry';

		$ps = $pdo->prepare($sql);

		$ps->execute();
		

	} catch (PDOException $e) {
		
		die("No se ha podido extraer informacion de la base de datos: " . $e -> getMessage());

	}

	while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

	$listOfFish [] = $row;

	}

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