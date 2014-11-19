<?php

echo '<pre>';
var_dump($_POST);
echo '<pre>';


if(isset($_POST['rep']) AND $_POST['rep']=='oui')
	{
		include("chat.php");
		die();
	}
else 
	{
		die('<h1>Merci pour votre visite !</h1>');
	}

?>