<?php

// dbconnect.php

try
{
	$PDO = new PDO("mysql:host=localhost;dbname=dragons_slayer;charset=UTF8", "3wa", "troiswa");
}
catch (PDOException $exceptionObject)
{
	echo 'Erreur de connection PDO (' . $exceptionObject->getCode() . '): ' . $exceptionObject->getMessage();

	exit();
}
