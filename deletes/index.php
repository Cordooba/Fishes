<?php 

	require_once(dirname(dirname(__FILE__)).'/app/info.php');
	require_once(dirname(dirname(__FILE__)).'/bd/connectiondb.php');

	$listOfFishDeletes = [];

	try {
		
		$sql = 'SELECT * FROM fishes WHERE deletentry IS NOT NULL ORDER BY deletentry';

		$ps = $pdo->prepare($sql);

		$ps->execute();

	} catch (PDOException $e) {
		
		die("No se ha podido extraer informacion de la base de datos: " . $e -> getMessage());

	}

	while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

	$listOfFishDeletes [] = $row;

	}

	if ( isset( $_GET['updateFish']) ) {

		$id = $_POST['idFish'];

	if ( is_numeric($id) ) {

		try {

			$sql = "UPDATE fishes SET deletentry = NULL WHERE id = :id";

			$ps = $pdo->prepare($sql);

			$ps->bindValue(':id', $id);

			$ps->execute();

		} catch (PDOException $e) {

			echo "Error";
			exit();

		}

	}
	
	header('Location: .');
	exit();

	}

	require_once 'deletes.html.php';

 ?>