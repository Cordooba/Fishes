<?php

require_once(dirname(dirname(__FILE__)).'/app/info.php');

require_once(__ROOT__.'/bd/connectiondb.php'); 

try{	

	$sql = "CREATE TABLE fishes (
		id 					INT AUTO_INCREMENT PRIMARY KEY,
		fish 				VARCHAR(50) NOT NULL,
		type   				ENUM('Agua dulce','Agua fria','Agua salada') NOT NULL,
		feed 				SET('Carnivoros','Omnivoros','Herbivoros','Limnivoros') NOT NULL,
		characteristics 	VARCHAR(100),
		locality			VARCHAR(40),
		createntry			TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		donentry 			TIMESTAMP NULL DEFAULT NULL,
		deletentry 			TIMESTAMP NULL DEFAULT NULL
	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'tasks':". $e->getMessage());

}

?>